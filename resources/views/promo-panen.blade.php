<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- style one -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>RTP SLOT GACOR MODALHOKI88 MINIMAL DEPOSIT 10 RIBU</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <!-- file setting css -->
        <link rel="stylesheet" href="{{ asset('iklancss/mobile.css') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('iklancss/mobile-dark-gold.css') }}"
        />
        <link rel="stylesheet" href="{{ asset('iklancss/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('iklancss/app-panen.css') }}" />
        <link rel="stylesheet" href="{{ asset('iklancss/font.css') }}" />
        <style>
            .w-100 {
                width: 100%;
            }
            .header {
                text-align: center;
                font-weight: bold;
                text-decoration: underline;
                font-size: 24px;
                padding: 16px 0;
            }
            img{
                border-radius: 0;
            }
            .app-logo{
                border-radius: 8px;
            }
            .app-brand{
                display: flex;
                align-items: center;
                gap: 8px;
                background-color: #be0e0e;
                border-radius: 8px;
            }
        </style>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />
    </head>
    <body>
        <header class="app-header surface">
            <!---->
            <div class="container--fluid" data-v-ced53b20>
                <div class="app-header__main" data-v-ced53b20>
                    <div class="app-brand" data-v-ced53b20>
                        <a class="app-brand" href="{{ $siteConfig->header_url }}">
                            <div class="app-link--exact-active app-link--active">
                                <img
                                    src="https://storage.googleapis.com/parkinggacor/panen/logopanen.jpg"
                                    alt="panen"
                                    loading="lazy"
                                    class="app-logo"/>
                            </div>
                            Slot Gacor Terbaru
                        </a>
                    </div>
                    <div class="app-header__widgets" data-v-ced53b20>
                        <div class="app-header__auth" data-v-ced53b20>
                            <a
                                class="btn btn--brand btn--flex"
                                href="{{ $siteConfig->daftar_url }}"
                            >
                                Daftar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="running-text running-text--primary">
            <p style="font-size: 18px">📢</p>
            <marquee style="color: rgb(f, f, f);">
              <strong>
                {{ $siteConfig->running_text }}
              </strong>
            </marquee>
        </div>
        <div>
            @foreach($promos as $promo)
                <div>
                    @if($promo->url == null)
                        <img class="w-100" style="margin-bottom: 8px;" src="{{ $promo->image_url }}" />
                    @else
                        <a href="{{ $promo->url }}">
                            <img class="w-100" style="margin-bottom: 8px;" src="{{ $promo->image_url }}" />
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
        <div class="top-observer"></div>
        <script src="{{ asset('js/mobile.js') }}" defer></script>
        <script src="{{ asset('js/javascript_alxgroup.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
