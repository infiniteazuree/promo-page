<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- style one -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>INFORMASI PAYMENT TERBAIK</title>

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
        <link rel="stylesheet" href="{{ asset('iklancss/app.css') }}" />
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
            .game {
                display: flex;
                border-radius: 8px;
                background-color: rgba(255, 165, 0, 0.4);
                margin-top: 16px;
            }
            .game img {
                width: 30%;
            }
            .game-desc {
                text-align: center;
                flex-grow: 1;
                padding: 0 16px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .play-button {
                font-weight: bold;
                background-color: orange;
                color: white;
                border-radius: 100px;
                padding: 4px 0;
            }
            .winner-wrapper{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .winner-wrapper span{
                margin-right: 4px;
            }
            .first{
                font-size: 28px;
                font-weight: bold;
                color:gold;
            }
            .second{
                font-size: 20px;
                font-weight: bold;
                color:silver;
            }
            .third{
                font-size: 16px;
                font-weight: bold;
                color: brown;
            }
            .detail-value{
                display: flex;
                justify-content: space-between;
                margin: 4px 16px;
            }
        </style>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
        />
        <style></style>
    </head>
    <body>
        <header class="app-header surface">
            <!---->
            <div class="container--fluid" data-v-ced53b20>
                <div class="app-header__main" data-v-ced53b20>
                    <div class="app-brand" data-v-ced53b20>
                        Payment
                    </div>
                </div>
            </div>
        </header>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img class="w-100" src="https://storage.googleapis.com/parkinggacor/payments.png" />
                </div>
                <div class="swiper-slide">
                    <img class="w-100" src="https://storage.googleapis.com/parkinggacor/review/payment2.jpg" />
                </div>
            </div>
        </div>
        <div class="site-gambar">
            <section class="slot-game">
                <div class="content">
                    <div class="wrapper">
                        <div class="header">PAYMENT TERPOPULER</div>
                        <div class="game">
                            <img src="{{ asset('img/qris.png') }}" />
                            <div class="game-desc">
                                <div class="winner-wrapper">
                                    <span class="first">#1</span>QRIS
                                </div>
                                <div class="play-button" data-toggle="collapse" href="#collapse1">Lihat Detail</div>
                            </div>
                        </div>
                        <div class="collapse" id="collapse1">
                            <div class="detail-value">
                                <div class="value-label">
                                    Total Pengguna
                                </div>
                                <div class="value">
                                    537892
                                </div>
                            </div>
                            <div class="detail-value">
                                <div class="value-label">
                                    Total Transaksi
                                </div>
                                <div class="value">
                                    128923727
                                </div>
                            </div>
                        </div>
                        <div class="game">
                            <img src="{{ asset('img/ovo.png') }}" />
                            <div class="game-desc">
                                <div class="winner-wrapper">
                                    <span class="second">#2</span>OVO
                                </div>
                                <div class="play-button" data-toggle="collapse" href="#collapse2">Lihat Detail</div>
                            </div>
                        </div>
                        <div class="collapse" id="collapse2">
                            <div class="detail-value">
                                <div class="value-label">
                                    Total Pengguna
                                </div>
                                <div class="value">
                                    31293
                                </div>
                            </div>
                            <div class="detail-value">
                                <div class="value-label">
                                    Total Transaksi
                                </div>
                                <div class="value">
                                    7913523
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="game">
                            <img src="{{ asset('img/gopay.png') }}" />
                            <div class="game-desc">
                                <div class="winner-wrapper">
                                    <span class="third">#3</span>GO-PAY
                                </div>
                                <div class="play-button" data-toggle="collapse" href="#collapse3">Lihat Detail</div>
                            </div>
                        </div>
                        <div class="collapse" id="collapse3">
                            <div class="detail-value">
                                <div class="value-label">
                                    Total Pengguna
                                </div>
                                <div class="value">
                                    16345
                                </div>
                            </div>
                            <div class="detail-value">
                                <div class="value-label">
                                    Total Transaksi
                                </div>
                                <div class="value">
                                    2384567
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="top-observer"></div>
        <script src="{{ asset('js/mobile.js') }}" defer></script>
        <script src="{{ asset('js/javascript_alxgroup.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <script>
            const swiper = new Swiper(".swiper", {
                loop: true,
                autoplay: true,
            });
        </script>
    </body>
</html>
