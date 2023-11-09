<?php

namespace App\Http\Controllers;


use App\User;
use App\Role;
use App\Promos;
use App\odds;
use App\Site;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class VoucherController extends Controller
{
    public function spin(Request $request){
    	return view('/spin');
    }

    public function iklan(Request $request){
        $siteConfig = Site::first();
        if($siteConfig->toggled == '0'){
    	    return view('/iklan');
        }
    	return view('/iklan-review');
    }

    public function rtp(Request $request){
        $siteConfig = Site::first();
        if($siteConfig->toggled == '0'){
    	    return view('/rtp');
        }
    	return view('/rtp-review');
    }

    public function promo(Request $request){
        $siteConfig = Site::first();
        if($siteConfig->toggled == '0'){
    	    return view('/promo');
        }
    	return view('/promo-review');
    }
    
    public function rtpApp(Request $request){
        $siteConfig = Site::first();
        if($siteConfig->toggled == '0'){
    	    return view('/rtp-app');
        }
    	return view('/rtp-review');
    }

    public function iklanPg(Request $request){
        $siteConfig = Site::where('id', 2)->first();
        if($siteConfig->toggled == '0'){
    	    return view('/iklan-pg');
        }
    	return view('/iklan-review');
    }

    public function rtpPg(Request $request){
        $siteConfig = Site::where('id', 2)->first();
        // dd($siteConfig);
        if($siteConfig->toggled == '0'){
    	    return view('/rtp-pg');
        }
    	return view('/rtp-review');
    }

    public function promoPg(Request $request){
        $siteConfig = Site::where('id', 2)->first();
        if($siteConfig->toggled == '0'){
    	    return view('/promo-pg');
        }
    	return view('/promo-review');
    }

    public function iklanPanen(Request $request){
        $siteConfig = Site::where('id', 3)->first();
        if($siteConfig->toggled == '0'){
    	    return view('/iklan-panen', compact('siteConfig'));
        }
    	return view('/iklan-review');
    }

    public function rtpPanen(Request $request){
        $siteConfig = Site::where('id', 3)->first();
        // dd($siteConfig);
        if($siteConfig->toggled == '0'){
    	    return view('/rtp-panen', compact('siteConfig'));
        }
    	return view('/rtp-review');
    }

    public function promoPanen(Request $request){
        $siteConfig = Site::where('id', 3)->first();
        $promos = Promos::where('deleted_at', null)->get();
        if($siteConfig->toggled == '0'){
    	    return view('/promo-panen', compact('promos', 'siteConfig'));
        }
    	return view('/promo-review');
    }

    public function generateRewardFromList (array $set){
        $length = 10000;
        $left = 0;
        foreach($set as $num=>$right)
        {
           $set[$num] = $left + $right*$length;
           $left = $set[$num];
        }
        $test = mt_rand(1, $length);
        $left = 1;
        foreach($set as $num=>$right)
        {
           if($test>=$left && $test<=$right)
           {
              return $num;
           }
           $left = $right;
        }
        return null;
    }

    public function startGame(Request $request){
        // dd($request->code);
        $query = voucher::where([
            ['code', '=', $request->code],
            ['deleted_at', '=', null]
        ]);
        $rewards=[
            [
                "value" => "7DqttTVqEA",
                "multiplier" => "2",
            ],
            [
                "value" => "ceqNHE9SE2",
                "multiplier" => "5",
            ],
            [
                "value" => "eEUXdhzMbq",
                "multiplier" => "10",
            ],
            [
                "value" => "8Qou9z61FC",
                "multiplier" => "25",
            ],
            [
                "value" => "m8k4CvAoEl",
                "multiplier" => "50",
            ],
            [
                "value" => "AJXRe0CiWB",
                "multiplier" => "100",
            ],
            [
                "value" => "TaB2Om4ikC",
                "multiplier" => "250",
            ],
            [
                "value" => "6hArUYWFhh",
                "multiplier" => "500",
            ]
        ];
        
        if($request->code !== null){
            if($query->exists()){
                if($query->where('claimed_at', '=', null)->exists()){
                    $selectedVoucher = voucher::where([
                        ['code', '=', $request->code],
                        ['deleted_at', '=', null],
                        ['claimed_at', '=', null]
                    ]);
                    $reward = $selectedVoucher->get()->last()->reward_id;
                    $multiplier = $selectedVoucher->get()->last()->multiplier_id;
                    if($reward == 999){
                        $odds = json_decode(odds::first()->odds);
                        $reward = self::generateRewardFromList($odds) + 1;
                        $selectedVoucher->update(['random_reward_id' => $reward]);
                    }
                    $maskedCode = substr_replace($request->code, str_repeat('X', 3), strlen($request->code)-3);
                    $winnings = [500, 1000, 2500, 5000, 10000, 25000, 50000, 75000, 100000];
                    $totalWinnings = ($winnings[$reward - 1] * $multiplier);

                    $found = false;  
                    foreach($rewards as $asd => $value) {
                        if ($value['multiplier'] == $multiplier) {
                            $found = $value['value'];
                            break;
                        }
                    }

                    if($found == false){        
                        return view('/spin')->with('error', "Kode voucher tidak valid.");
                    }
                    $selectedVoucher->update(['claimed_at' => Carbon::now()]);
                    return view('/spin')->with('reward', $reward)->with('totalWinnings', $totalWinnings)->with('multiplier', $multiplier)->with('maskedCode', $maskedCode)->with('imageUrl', $found);
                }
                return view('/spin')->with('error', "Kode voucher sudah digunakan.");
            }
        }
        return view('/spin')->with('error', "Kode voucher tidak valid.");
    }
}
