<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-navbars.navs.navland titlePage="Landing"></x-navbars.navs.navland>
        <div class="profile-img" style="display: flex; height: 400px; margin: 0; position: relative;">
            <img src="{{ asset('assets/img/foto_1.png') }}" alt="profile-img" width="100%" style="opacity: 0.9;" />
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                <h1 style="color: white; font-size: 38px; ">SELAMAT DATANG DI SIKAPMU</h1>
                <h1 style="color: white; font-size: 24px; font-weight: 100;">Sistem Informasi Kepemudaan</h1>
            </div>
        </div>
        <h1 class="text-center mt-5 mb-5" style="color: rgb(78, 78, 78); font-size: 22px; ">Supported By :</h1>

        <div class="supp text-center mb-5">
            <img src="{{ asset('assets/img/supported.png') }}" alt="profile-img" class="text-center" />
        </div>
        <div class="text-center mx-5 mb-5">
            <a class="btn text-center align-items-center" href="#"
                style="background-color: #4C6FFF; text-align: center;">
                <i class="text-white mx-4 my-4"
                    style="text-transform: none; font-style: normal; font-weight: bold">Total Data 200.0000</i>


            </a>
        </div>
        <h1 class="text-start mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 22px; font-weight: bold;">Jumlah Pemuda
        </h1>
        <div class="container">
            <div class="row mb-5 mx-5">
                <div class="col-2"></div>
                <div class="col-4">
                    <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: 100;">Data Pemuda
                        Usia
                        16 s.d 19th</h1>

                    <canvas id="myChart" width="400" height="400"></canvas>
                    <div class="card mt-3" style="border-radius: 10px;">
                        <div class="row mx-1 mt-3 mb-3">
                            <div class="col-1">
                                <div class="cards" style="background-color: #55BEEB; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Utara 360 orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #F94144; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Timur 260 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mx-1 mt-1">
                            <div class="col-1">
                                <div class="cards" style="background-color: #FFB320; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Selatan 320 orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #5D5FEF; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Barat 60 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div class="text-start mx-4 mb-5">
                                    <a class="btn text-start align-items-center" href="#"
                                        style="background-color: #4C6FFF; text-align: center;">
                                        <i class="text-white" style="text-transform: none; font-style: normal;">Detail
                                            <i></i></i>
                                    </a>
                                </div>

                            </div>

                            <div class="col-5 ">
                                <div class="container text-center align-items-center">


                                    <div class="row ">
                                        <div class="col-2">
                                            <i class="fas fa-user d-flex text-center align-items-center"
                                                style="font-size: 1rem;"></i>
                                        </div>
                                        <div class="col-8 d-flex text-center align-items-center">
                                            <h1 class="d-flex text-center align-items-center"
                                                style="color: rgb(12, 12, 12); font-size: 12px; font-weight: bold;">100
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-4">
                    <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: 100;">Data Pemuda
                        Usia
                        20 s.d 30th</h1>

                    <canvas id="myChart2" width="400" height="400"></canvas>
                    <div class="card mt-3" style="border-radius: 10px;">
                        <div class="row mx-1 mt-3 mb-3">
                            <div class="col-1">
                                <div class="cards" style="background-color: #55BEEB; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Utara 360 orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #F94144; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Timur 260 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mx-1 mt-1">
                            <div class="col-1">
                                <div class="cards" style="background-color: #FFB320; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Selatan 320
                                    orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #5D5FEF; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Barat 60 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div class="text-start mx-4 mb-5">
                                    <a class="btn text-start align-items-center" href="#"
                                        style="background-color: #4C6FFF; text-align: center;">
                                        <i class="text-white" style="text-transform: none; font-style: normal;">Detail
                                            <i></i></i>
                                    </a>
                                </div>

                            </div>

                            <div class="col-5 ">
                                <div class="row ">
                                    <div class="col-2">
                                        <i class="fas fa-user d-flex text-center align-items-center"
                                            style="font-size: 1rem;"></i>
                                    </div>
                                    <div class="col-8 d-flex text-center align-items-center">
                                        <h1 class="d-flex text-center align-items-center"
                                            style="color: rgb(12, 12, 12); font-size: 12px; font-weight: bold;">100
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>


        <h1 class="text-start mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 22px; font-weight: bold;">Jumlah Pencari Kerja
        </h1>

        <div class="container">
            <div class="row mb-5 mx-5">
                <div class="col-4"></div>


                <div class="col-4">
                    <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: 100;">Data Pemuda
                        Usia
                        20 s.d 30th</h1>

                    <canvas id="myChart3" width="400" height="400"></canvas>
                    <div class="card mt-3" style="border-radius: 10px;">
                        <div class="row mx-1 mt-3 mb-3">
                            <div class="col-1">
                                <div class="cards" style="background-color: #55BEEB; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Utara 360 orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #F94144; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Timur 260 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mx-1 mt-1">
                            <div class="col-1">
                                <div class="cards" style="background-color: #FFB320; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Selatan 320
                                    orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #5D5FEF; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Barat 60 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div class="text-start mx-4 mb-5">
                                    <a class="btn text-start align-items-center" href="#"
                                        style="background-color: #4C6FFF; text-align: center;">
                                        <i class="text-white" style="text-transform: none; font-style: normal;">Detail
                                            <i></i></i>
                                    </a>
                                </div>

                            </div>

                            <div class="col-5 ">
                                <div class="row ">
                                    <div class="col-2">
                                        <i class="fas fa-user d-flex text-center align-items-center"
                                            style="font-size: 1rem;"></i>
                                    </div>
                                    <div class="col-8 d-flex text-center align-items-center">
                                        <h1 class="d-flex text-center align-items-center"
                                            style="color: rgb(12, 12, 12); font-size: 12px; font-weight: bold;">100
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>

        <h1 class="text-start mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 22px; font-weight: bold;">Jumlah Pesakitan Pemuda
        </h1>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <div class="text-center mx-5 mb-5">
                    <a class="btn text-center align-items-center" href="#"
                        style="background-color: #4C6FFF; text-align: center;">
                        <i class="text-white mx-4 my-4"
                            style="text-transform: none; font-style: normal; font-weight: bold">Pasien TB HIV Positif : 30</i>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="text-center mx-5 mb-5">
                    <a class="btn text-center align-items-center" href="#"
                        style="background-color: #4C6FFF; text-align: center;">
                        <i class="text-white mx-4 my-4"
                            style="text-transform: none; font-style: normal; font-weight: bold">OAV dengang ARV : 30</i>
                    </a>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
        <h1 class="text-start mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 22px; font-weight: bold;">Jumlah Wirausaha
        </h1>
        <div class="container">
            <div class="row mb-5 mx-5">
                <div class="col-4"></div>


                <div class="col-4">
                    <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: 100;">Data Kewirausahawan pemuda</h1>

                    <canvas id="myChart4" width="400" height="400"></canvas>
                    <div class="card mt-3" style="border-radius: 10px;">
                        <div class="row mx-1 mt-3 mb-3">
                            <div class="col-1">
                                <div class="cards" style="background-color: #55BEEB; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Utara 360 orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #F94144; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Timur 260 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mx-1 mt-1">
                            <div class="col-1">
                                <div class="cards" style="background-color: #FFB320; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Selatan 320
                                    orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #5D5FEF; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Barat 60 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div class="text-start mx-4 mb-5">
                                    <a class="btn text-start align-items-center" href="#"
                                        style="background-color: #4C6FFF; text-align: center;">
                                        <i class="text-white" style="text-transform: none; font-style: normal;">Detail
                                            <i></i></i>
                                    </a>
                                </div>

                            </div>

                            <div class="col-5 ">
                                <div class="row ">
                                    <div class="col-2">
                                        <i class="fas fa-user d-flex text-center align-items-center"
                                            style="font-size: 1rem;"></i>
                                    </div>
                                    <div class="col-8 d-flex text-center align-items-center">
                                        <h1 class="d-flex text-center align-items-center"
                                            style="color: rgb(12, 12, 12); font-size: 12px; font-weight: bold;">100
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>


        <h1 class="text-start mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 22px; font-weight: bold;">Jumlah Anggota Organisasi Kepemudaan
        </h1>
        <div class="container">
            <div class="row mb-5 mx-5">
                <div class="col-4"></div>


                <div class="col-4">
                    <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: 100;">Data Anggota OKP</h1>

                    <canvas id="myChart5" width="400" height="400"></canvas>
                    <div class="card mt-3" style="border-radius: 10px;">
                        <div class="row mx-1 mt-3 mb-3">
                            <div class="col-1">
                                <div class="cards" style="background-color: #55BEEB; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Utara 360 orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #F94144; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Timur 260 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mx-1 mt-1">
                            <div class="col-1">
                                <div class="cards" style="background-color: #FFB320; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Selatan 320
                                    orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #5D5FEF; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Barat 60 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div class="text-start mx-4 mb-5">
                                    <a class="btn text-start align-items-center" href="#"
                                        style="background-color: #4C6FFF; text-align: center;">
                                        <i class="text-white" style="text-transform: none; font-style: normal;">Detail
                                            <i></i></i>
                                    </a>
                                </div>

                            </div>

                            <div class="col-5 ">
                                <div class="row ">
                                    <div class="col-2">
                                        <i class="fas fa-user d-flex text-center align-items-center"
                                            style="font-size: 1rem;"></i>
                                    </div>
                                    <div class="col-8 d-flex text-center align-items-center">
                                        <h1 class="d-flex text-center align-items-center"
                                            style="color: rgb(12, 12, 12); font-size: 12px; font-weight: bold;">100
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>

        <h1 class="text-start mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 22px; font-weight: bold;">Jumlah  Organisasi Kepemudaan
        </h1>
        <div class="container">
            <div class="row mb-5 mx-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: 100;">Jumlah OKP</h1>

                    <canvas id="myChart6" width="400" height="400"></canvas>
                    <div class="card mt-3" style="border-radius: 10px;">
                        <div class="row mx-1 mt-3 mb-3">
                            <div class="col-1">
                                <div class="cards" style="background-color: #55BEEB; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Utara 360 orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #F94144; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Timur 260 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mx-1 mt-1">
                            <div class="col-1">
                                <div class="cards" style="background-color: #FFB320; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Selatan 320
                                    orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #5D5FEF; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Barat 60 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div class="text-start mx-4 mb-5">
                                    <a class="btn text-start align-items-center" href="#"
                                        style="background-color: #4C6FFF; text-align: center;">
                                        <i class="text-white" style="text-transform: none; font-style: normal;">Detail
                                            <i></i></i>
                                    </a>
                                </div>

                            </div>

                            <div class="col-5 ">
                                <div class="row ">
                                    <div class="col-2">
                                        <i class="fas fa-user d-flex text-center align-items-center"
                                            style="font-size: 1rem;"></i>
                                    </div>
                                    <div class="col-8 d-flex text-center align-items-center">
                                        <h1 class="d-flex text-center align-items-center"
                                            style="color: rgb(12, 12, 12); font-size: 12px; font-weight: bold;">100
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>

        <h1 class="text-start mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 22px; font-weight: bold;">Jumlah  OSIS se KAB. SUBANG
        </h1>
        <div class="container">
            <div class="row mb-5 mx-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: 100;">Jumlah OSIS Se Kab. Subang</h1>

                    <canvas id="myChart7" width="400" height="400"></canvas>
                    <div class="card mt-3" style="border-radius: 10px;">
                        <div class="row mx-1 mt-3 mb-3">
                            <div class="col-1">
                                <div class="cards" style="background-color: #55BEEB; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Utara 360 orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #F94144; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Timur 260 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mx-1 mt-1">
                            <div class="col-1">
                                <div class="cards" style="background-color: #FFB320; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Selatan 320
                                    orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #5D5FEF; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Barat 60 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div class="text-start mx-4 mb-5">
                                    <a class="btn text-start align-items-center" href="#"
                                        style="background-color: #4C6FFF; text-align: center;">
                                        <i class="text-white" style="text-transform: none; font-style: normal;">Detail
                                            <i></i></i>
                                    </a>
                                </div>

                            </div>

                            <div class="col-5 ">
                                <div class="row ">
                                    <div class="col-2">
                                        <i class="fas fa-user d-flex text-center align-items-center"
                                            style="font-size: 1rem;"></i>
                                    </div>
                                    <div class="col-8 d-flex text-center align-items-center">
                                        <h1 class="d-flex text-center align-items-center"
                                            style="color: rgb(12, 12, 12); font-size: 12px; font-weight: bold;">100
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>


        <h1 class="text-start mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 22px; font-weight: bold;">Jumlah  BEM se KAB. SUBANG
        </h1>
        <div class="container">
            <div class="row mb-5 mx-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: 100;">Jumlah BEM Se Kab. Subang</h1>

                    <canvas id="myChart8" width="400" height="400"></canvas>
                    <div class="card mt-3" style="border-radius: 10px;">
                        <div class="row mx-1 mt-3 mb-3">
                            <div class="col-1">
                                <div class="cards" style="background-color: #55BEEB; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Utara 360 orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #F94144; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Timur 260 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mx-1 mt-1">
                            <div class="col-1">
                                <div class="cards" style="background-color: #FFB320; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Selatan 320
                                    orang
                                </h1>
                            </div>
                            <div class="col-1">
                                <div class="cards" style="background-color: #5D5FEF; ">
                                </div>
                            </div>
                            <div class="col-4">
                                <h1 style="color: rgb(12, 12, 12); font-size: 12px; font-weight: 100;">Barat 60 orang
                                </h1>
                            </div>
                        </div>
                        <div class="row mt-3 ">
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div class="text-start mx-4 mb-5">
                                    <a class="btn text-start align-items-center" href="#"
                                        style="background-color: #4C6FFF; text-align: center;">
                                        <i class="text-white" style="text-transform: none; font-style: normal;">Detail
                                            <i></i></i>
                                    </a>
                                </div>

                            </div>

                            <div class="col-5 ">
                                <div class="row ">
                                    <div class="col-2">
                                        <i class="fas fa-user d-flex text-center align-items-center"
                                            style="font-size: 1rem;"></i>
                                    </div>
                                    <div class="col-8 d-flex text-center align-items-center">
                                        <h1 class="d-flex text-center align-items-center"
                                            style="color: rgb(12, 12, 12); font-size: 12px; font-weight: bold;">100
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>


        <h1 class="text-start mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 22px; font-weight: bold;">Jumlah Pesakitan Pemuda
        </h1>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-3">
                <div class="text-center mx-5 mb-5">
                    <a class="btn text-center align-items-center" href="#"
                        style="background-color: #4C6FFF; text-align: center;">
                        <i class="text-white mx-4 my-4"
                            style="text-transform: none; font-style: normal; font-weight: bold">Curanmor : 30</i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="text-center mx-5 mb-5">
                    <a class="btn text-center align-items-center" href="#"
                        style="background-color: #4C6FFF; text-align: center;">
                        <i class="text-white mx-4 my-4"
                            style="text-transform: none; font-style: normal; font-weight: bold">NARKOBA : 30</i>
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="text-center mx-5 mb-5">
                    <a class="btn text-center align-items-center" href="#"
                        style="background-color: #4C6FFF; text-align: center;">
                        <i class="text-white mx-4 my-4"
                            style="text-transform: none; font-style: normal; font-weight: bold">PEMBUNUHAN : 30</i>
                    </a>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        <x-footers.footer></x-footers.guest>
    </main>
    <x-plugins></x-plugins>

</x-layout>
<script>
    var data = {
        datasets: [{
            label: "Donut Chart",
            data: [36, 25, 25, 14],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "doughnut",
        data: data,
    });

    var data2 = {
        datasets: [{
            label: "Donut Chart",
            data: [53, 32, 25, 12],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx2 = document.getElementById("myChart2").getContext("2d");
    var myChart2 = new Chart(ctx2, {
        type: "doughnut",
        data: data2,
    });

    var data3 = {
        datasets: [{
            label: "Donut Chart",
            data: [13, 42, 25, 70],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx3 = document.getElementById("myChart3").getContext("2d");

    var myChart2 = new Chart(ctx3, {
        type: "doughnut",
        data: data3,
    });

    var data4 = {
        datasets: [{
            label: "Donut Chart",
            data: [53, 32, 25, 12],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx4 = document.getElementById("myChart4").getContext("2d");
    var myChart4 = new Chart(ctx4, {
        type: "doughnut",
        data: data4,
    });

    var data5 = {
        datasets: [{
            label: "Donut Chart",
            data: [53, 32, 25, 12],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx5 = document.getElementById("myChart5").getContext("2d");
    var myChart5 = new Chart(ctx5, {
        type: "doughnut",
        data: data5,
    });


    var data6 = {
        datasets: [{
            label: "Donut Chart",
            data: [53, 32, 25, 12],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx6 = document.getElementById("myChart6").getContext("2d");
    var myChart6 = new Chart(ctx6, {
        type: "doughnut",
        data: data6,
    });

    var data7 = {
        datasets: [{
            label: "Donut Chart",
            data: [53, 32, 25, 12],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx7 = document.getElementById("myChart7").getContext("2d");
    var myChart7 = new Chart(ctx7, {
        type: "doughnut",
        data: data7,
    });

    var data8 = {
        datasets: [{
            label: "Donut Chart",
            data: [53, 32, 25, 12],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx8 = document.getElementById("myChart8").getContext("2d");
    var myChart8 = new Chart(ctx8, {
        type: "doughnut",
        data: data8,
    });
</script>
<style>
    .cards {
        width: 10px;
        /* Sesuaikan lebar kartu sesuai kebutuhan */
        height: 10px;
        /* Sesuaikan tinggi kartu sesuai kebutuhan */
        border-radius: 50%;
        /* Memberikan bentuk lingkaran dengan radius 50% */

    }
</style>
<style>
    .container {
        overflow: hidden;
        width: 100%;
        white-space: nowrap;
        position: relative;
    }

    .scroll-container {
        display: inline-block;
        transition: transform 0.3s;
    }

    .scroll-container2 {
        display: inline-block;
        transition: transform 0.3s;
    }

    .scroll-container3 {
        display: inline-block;
        transition: transform 0.3s;
    }

    .card {
        display: inline-block;
        margin-right: 10px;
        /* Jarak antar elemen card */
        vertical-align: top;
    }

    .navigation {
        margin-top: 10px;
    }

    button {
        margin-right: 10px;
    }
</style>
