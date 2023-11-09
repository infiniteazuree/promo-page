<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\reward;
use App\Promos;
use App\odds;
use App\Site;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $sites = Site::where([
            ['id', '=', 3],
        ])->first();
        return view('admin-promo', compact('sites'));
    }
    
    public function toggleSite(Request $request){
        $siteConfig = Site::first();
        $siteConfig->update(['toggled' => $request->input('toggled')]);
        return redirect('/admin-promo')->with('message', "Website berhasil diupdate.");
    }

    public function addPromo(Request $request){
        $post = Promos::create([
            'image_url' => $request->image_url,
            'url' => $request->url,
            'note' => $request->note,
            'updated_at' => NULL
        ]);
    }

    public function createPromo(Request $request){
        if($request->image_url == null || $request->note == null || $request->url == null){
            return redirect('/admin-promo')->with('error', "Form promo harus di isi.");
        }
        self::addPromo($request);
        return redirect('/admin-promo')->with('message', "Promo berhasil dibuat.");
    }

    public function updatePromo(Request $request, $id){
        $selectedPromo = Promos::where([
            ['id', '=', $id],
        ]);
        if($request->image_url == null || $request->note == null || $request->url == null){
            return redirect()->back()->with('error', "Form promo harus di isi.");
        }

        $selectedPromo->update(['image_url' => $request->input('image_url')]);
        $selectedPromo->update(['url' => $request->input('url')]);
        $selectedPromo->update(['note' => $request->input('note')]);
    
        $detail = Promos::all();
        $message = 'Promo berhasil diubah.';
        $error = '';
        return view('dashboard', compact('detail', 'message', 'error'));
    }

    public function updateUrl(Request $request){
        $selectedSites = Site::where([
            ['id', '=', 3],
        ]);

        $selectedSites->update(['header_url' => $request->input('header_url')]);
        $selectedSites->update(['daftar_url' => $request->input('daftar_url')]);
        $selectedSites->update(['running_text' => $request->input('running_text')]);
    
        $sites = Site::where([
            ['id', '=', 3],
        ])->first();
        return view('admin-promo', compact('sites'));
    }

    public function editPromo(Request $request, $id){
        if(Promos::where('id', $id)->get()->count() == 0) {
            $detail = Promos::all();
            $message = '';
            $error = 'Promo tidak ditemukan.';
            return view('dashboard', compact('detail', 'message', 'error'));
        }
        $detail = Promos::where('id', $id)->first();
        return view('update-promo', compact('detail'));
    }

    public function deletePromo(Request $request){
        Promos::where('id', $request->id)->update(['deleted_at' => Carbon::now()]);
        $message = "Promo berhasil dihapus.";
        $error = '';
        $detail = Promos::all();
        return view('dashboard', compact('detail', 'message', 'error'));
    }

}
