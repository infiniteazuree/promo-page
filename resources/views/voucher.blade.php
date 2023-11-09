<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <title>landing page</title>
  </head>
  <body class="h-100">
    <div class="modal" data-backdrop="static" data-keyboard="false" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <div class="py-3">
              <b style="color: orange;">
                SELAMAT DATANG DI MYSTERY BOX
              </b>
            </div>
            <div>
              <button type="button" class="btn btn-block btn-sm btn-orange inputCode">Mulai</button>
              <button type="button" id="showPrize" class="btn btn-block btn-sm btn-danger">Tampilkan Hadiah</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <div class="py-3">
              <b style="color: orange;">
                Silahkan Masukan Kode Tiket
              </b>
            </div>
            <div>
                <form role="form" method="POST" action="{{ route('start-game') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="code" class="form-control" placeholder="Kode Tiket" aria-label="Username" aria-describedby="basic-addon1">
                        @if(isset($error))
                          <div class="error-text">{{$error}}</div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-block btn-sm btn-orange">Mulai</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <div class="py-3">
              <b style="color: red; font-size: 50px;">
                SELAMAT
              </b>
              <div class="py-3">
                anda memenangkan
              </div>
              <div>
                <img class="prize-won-img w-100" src="">
              </div>
              @if(isset($maskedCode))
                <div class="py-3">
                  Kode Voucher: {{$maskedCode}}
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="volume-wrapper">
      <img src="/img/volume-mute.png">
    </div>
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center pt-0 pt-md-5">
      <img src="/img/logo.png" class="logo-center">
      @if(!isset($reward))
      <div class="angpao-wrapper d-flex justify-content-center row no-gutters">
      @else
      <div class="angpao-wrapper shuffling shaking d-flex justify-content-center row no-gutters">
      @endif
        <div class="angpao-item floating col-6 col-md-4 col-lg-3">
          <img class="angpao-prize" src="/img/angpao.png">
        </div>
        <div class="angpao-item floating col-6 col-md-4 col-lg-3">
          <img class="angpao-prize" src="/img/angpao.png">
        </div>
        <div class="angpao-item floating col-6 col-md-4 col-lg-3">
          <img class="angpao-prize" src="/img/angpao.png">
        </div>
        <div class="angpao-item floating col-6 col-md-4 col-lg-3">
          <img class="angpao-prize" src="/img/angpao.png">
        </div>
        <div class="angpao-item floating col-6 col-md-4 col-lg-3">
          <img class="angpao-prize" src="/img/angpao.png">
        </div>
        <div class="angpao-item floating col-6 col-md-4 col-lg-3">
          <img class="angpao-prize" src="/img/angpao.png">
        </div>
        <div class="angpao-item floating col-6 col-md-4 col-lg-3">
          <img class="angpao-prize" src="/img/angpao.png">
        </div>
        <div class="angpao-item floating col-6 col-md-4 col-lg-3">
          <img class="angpao-prize" src="/img/angpao.png">
        </div>
      </div>
      <div class="ingame-start justify-content-center w-100 d-none">
        <button type="button" class="btn w-50 btn-block btn-sm btn-orange inputCode">Mulai</button>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $(function() {
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
        $('.inputCode').click(() => {
            document.getElementById("audio1").play();
            $('#exampleModalCenter').modal('hide')
            $('#exampleModalCenter2').modal('show')
        })
        
        $('#showPrize').click(() => {
            document.getElementById("audio1").play();
            $('#exampleModalCenter').modal('hide')
            $(this).find('.angpao-prize').each(function(i){
              $(this).attr('src', ('/img/'+ (i+1) +'.png'))
            })
            $('.ingame-start').removeClass('d-none')
        })
        
        $('.volume-wrapper').click( function(){
          if($('img', this).attr('src') == '/img/volume.png') {
            $('img', this).attr('src', '/img/volume-mute.png')
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
        setTimeout(() => {
          $('#exampleModalCenter').modal('hide')
          $('#exampleModalCenter2').modal('show')
        }, 1);
      </script>
    @endif
    @if(!isset($reward))
    <script>
      $('#exampleModalCenter').modal('show')
    </script>
    @endif
    @if(isset($reward))
    <script>
      var winSound = new Audio('/win.mp3');
      setTimeout(() => {
        $('.angpao-wrapper').toggleClass('shuffling shaking')
        $('.angpao-item').click(function(e) {
          $('.particles', this).toggleClass('animated')
          $('.angpao-prize', this).toggleClass('small')
          setTimeout(() => {
            $('.angpao-prize', this).toggleClass('small')
            $('.angpao-prize', this).attr('src', ('/img/'+ {!! $reward !!} +'.png'))
            $('.prize-won-img').attr('src', ('/img/'+ {!! $reward !!} +'.png'))
          }, 200);
          setTimeout(() => {
            $("#background-audio").remove()
            $('#exampleModalCenter3').modal('show')
            winSound.play()
          }, 500);
        })
      }, 1000);
    </script>
    @endif
  </body>
</html>