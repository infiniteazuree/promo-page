<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favico/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favico/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favico/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favico/site.webmanifest') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <title>LUCKY WHEEL OLYMPUS</title>
  </head>
  <body oncontextmenu="return false">
    <div class="modal fade" id="chestModal" tabindex="-1" role="dialog" aria-labelledby="chestModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="chest-modal modal-content">
          <div class="modal-body d-flex flex-column align-items-center justify-content-between">
            <div class="chest-text text-center">SELAMAT ANDA MENDAPATKAN<br/>CHEST MULTIPLIER</div>
            <div class="chest chest-click">
              <img src="{{ asset('img/gif/CHEST-SHAKING.gif') }}" class="chest-img"/>
            </div>
            @if(isset($totalWinnings))
              <div class="chest-text chest-text-total pb-3 text-closed text-center">ANDA MEMENANGKAN<br/>RP {{$totalWinnings}}</div>
            @endif
            
          </div>
          @if(isset($maskedCode))
            <div class="py-3 text-center" style="color: gold">
              Kode Voucher: {{$maskedCode}}
            </div>
          @endif
        </div>
      </div>
    </div>
    <div class="modal fade" id="howToPlay" tabindex="-1" role="dialog" aria-labelledby="howToPlayLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="howToPlayLabel">Cara Bermain</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul>
              <li>Event berlaku untuk seluruh Member Modalhoki88</li>
              <li>Event ini tidak dapat digabung dengan Promo Deposit Apapun.</li>
              <li>Member tetap dapat mengikuti Event Slot Games & Sportsbook</li>
              <li>Minimal Deposit untuk Claim Tiket Lucky Wheel Olympus Modalhoki88 adalah IDR 300.000 ( setelah mencapai 1x turnover baru bisa claim )</li>
              <li>Untuk Withdraw Bonus Wajib Mencapai 1x Turnover dari Hadiah Bonus</li>
              <li>Claim tiket hanya bisa dihari yang sama sewaktu Deposit.</li>
              <li>Dalam 1 Hari hanya bisa melakukan Claim sebanyak 1x ( Reset setiap jam 00.00 )</li>
              <li>Untuk dapat Claim, Setiap pemain wajib melakukan screenshoot hasil kemenangan Lucky Wheel Olympus dan melakukan share di grup facebook MODALHOKI88 dan tag md yang bertugas dengan hashtag #LuckyWheelOlympus</li>
              <li>Klaim Bonus dapat Lucky Wheel Olympus bisa konfirmasi Via Whatsapp atau Livechat dengan Menyertakan Bukti Kemenangan Lucky Wheel Olympus yang sudah di Share ke Grup Facebook.</li>
              <li>Pihak Modalhoki88 berhak membatalkan promosi apabila terjadi kecurangan.</li>
              <li>Segala kecurangan berupa kesamaan data, dll akan menyebabkan bonus di hanguskan</li>
              <li>Syarat dan ketentuan dapat berubah sewaktu waktu</li>
              <li>Segala keputusan MODALHOKI88 adalah mutlak dan tidak bisa di ganggu gugat.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    @if(isset($error))
      <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="errorModalLabel">Gagal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{$error}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>
    @endif
    <div class="volume-wrapper">
      <img src="/img/volume-mute.png">
    </div>
    <div class="container d-flex flex-column justify-content-center h-100">
      <img src="/img/wheel/DESKTOP-LOGO.gif" class="logo-center logo-desktop">
      <img src="/img/wheel/MOBILE-LOGO.gif" class="logo-center logo-mobile">
      <div class="custom-row">
        @desktop
        <div id="canvasContainer">
          <canvas id='canvas' width='540' height='540'>
            Canvas not supported, use another browser.
          </canvas>
          <img id="wheelBorder" src="{{ asset('img/wheel/frame_wheels.png') }}" />
          <img id="prizePointer" src="{{ asset('img/wheel/Marker.png') }}" />
          <img id="prizeCenter" src="{{ asset('img/wheel/center_wheels.png') }}" />
          <img id="zeus" src="{{ asset('img/wheel/zeus.png') }}" />
        </div>
        @elsedesktop
        <div id="canvasContainer">
          <canvas id='canvas' width='300' height='300'>
            Canvas not supported, use another browser.
          </canvas>
          <img id="wheelBorder" src="{{ asset('img/wheel/frame_wheels.png') }}" />
          <img id="prizePointer" src="{{ asset('img/wheel/Marker.png') }}" />
          <img id="prizeCenter" src="{{ asset('img/wheel/center_wheels.png') }}" />
          <img id="zeus" src="{{ asset('img/wheel/zeus.png') }}" />
        </div>
        @enddesktop
        <div class="d-flex flex-column justify-content-center" id="menuContainer">
          <div class="menu-wrapper">
            <img class="menu-bg" src="{{ asset('img/wheel/desktop_frame.png') }}" />
            <form role="form" method="POST" action="{{ route('start-game') }}">
              @csrf
              <div class="d-flex flex-column align-items-center text-center custom-input-box">
                <input type="text" required name="code" class="custom-input" placeholder="Kode Tiket...">
                <input type="image" type="submit" class="w-100 pt-4 cursor-pointer" src="{{ asset('img/wheel/button_spin.png') }}" />
                  <div class="row no-gutters mt-3">
                    <div class="col-6">
                      <img class="w-100 cursor-pointer" data-toggle="modal" data-target="#howToPlay" src="{{ asset('img/wheel/button_cara-bermain.png') }}" />
                    </div>
                    <div class="col-6">
                      <a href="https://wa.me/855314887888" target="_blank">
                        <img class="w-100 cursor-pointer" src="{{ asset('img/wheel/button_claim-tiket.png') }}" />
                      </a>
                    </div>
                  </div>
                  <img class="w-100 desktop-form-logo" src="{{ asset('img/wheel/MODALHOKI88-LOGO.png') }}" />
                </div>
                <img class="w-100 mobile-form-logo" src="{{ asset('img/wheel/MODALHOKI88-LOGO.png') }}" />
              </form>
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('javascript-winwheel-2.8.0/Winwheel.min.js') }}"></script>
    <script src="{{ asset('javascript-winwheel-2.8.0/TweenMax.min.js') }}"></script>
    <script>
      document.onkeydown = function(e) {
        if(event.keyCode == 123) {
          return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
          return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
          return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
          return false;
        }
        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
          return false;
        }
      }
      $(function() {
        let audio = new Audio('/tick.mp3');

        let theWheel = new Winwheel({
          'drawMode': 'image',
          'numSegments': 9,
          'segments': [
            {'text': '500'},
            {'text': '1000'},
            {'text': '2500'},
            {'text': '5000'},
            {'text': '10000'},
            {'text': '25000'},
            {'text': '50000'},
            {'text': '75000'},
            {'text': '100000'}
          ],
          'animation': {
              'type': 'spinToStop',
              'duration': 5,
              'spins': 8,
              'callbackSound': 'playSound()',
              'callbackFinished': 'alertPrize()'
          },
        });
        
        alertPrize = () => {
          let winningSegment = (theWheel.getIndicatedSegment());
          $('#chestModal').modal('show')
        }

        spinWheel = (reward) => {
          let stopAt = theWheel.getRandomForSegment(reward);
          theWheel.animation.stopAngle = stopAt;
          theWheel.startAnimation();
        }

        playSound = () => {
            audio.pause();
            audio.currentTime = 0;
            audio.play();
        } 

        let loadedImg = new Image();
        loadedImg.onload = function() {
          theWheel.wheelImage = loadedImg;
          theWheel.draw();
        }
        @desktop
        loadedImg.src = '{{ asset('img/wheel/wheels.png') }}';
        @elsedesktop
        loadedImg.src = '{{ asset('img/wheel/wheels_mobile.png') }}';
        @enddesktop
        
        let audioPlaying = true,
            backgroundAudio, browser
        browser = navigator.userAgent.toLowerCase()
        $('<audio id="audio1" src="/bgm.mp3" loop></audio>').prependTo('body')
        if (!browser.indexOf('firefox') > -1) {
            $('<embed id="background-audio" src="/bgm.mp3" autostart="1"></embed>').prependTo('body')
            backgroundAudio = setInterval(function() {
                $("#background-audio").remove()
                $('<embed id="background-audio" src="/bgm.mp3"></embed>').prependTo('body')
            }, 120000)
        }
        
        $('.volume-wrapper').click( function(){
          if($('img', this).attr('src') == '/img/volume.png') {
            $('img', this).attr('src', '/img/volume-mute.png')
            $("#background-audio").remove()
            document.getElementById("audio1").pause();
          } else {
            $('img', this).attr('src', '/img/volume.png')
            document.getElementById("audio1").play();
          }
        })
    })
    </script>
    @if(isset($error))
    <script>
      $('#errorModal').modal('show')
    </script>
    @endif
    @if(isset($reward))
    <script>
      $(function() {
        let duar = new Audio('/duar.mp3');
        let laugh = new Audio('/laugh.mp3');
        let multiplierImage = new Image();
        multiplierImage.src = 'img/gif/once/'+ '{!! $imageUrl !!}' +'.gif';
        spinWheel({!! $reward !!});

        $('.chest-click').click(function (){
          $(this).off('click');
          duar.play();
          $('.chest-img').toggleClass('chest-opened').attr('src', 'img/gif/once/'+ '{!! $imageUrl !!}' +'.gif')
          setTimeout(() => {
            laugh.play();
            $('.chest-text-total').toggleClass('text-closed')
          }, 5000);
        })
      })
    </script>
    @endif
  </body>
</html>