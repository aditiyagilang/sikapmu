@props(['titlePage'])

<nav class="navbar navbar-main navbar-expand-lg shadow-none border-radius-xl" id="navbarBlurs" navbar-scroll="true">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbar">
            {{-- <div class="row"> --}}
            <div class="col-2">
                <div class="profile-img"
                    style="width: 40px; height: 40px; display: flex; justify-content: end; margin: 0 auto;">
                    <img src="{{ asset('assets/img/icon_black.png') }}" alt="profile-img" />
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-1 text-end">
                <a class="fw-bold " href="/" style="font-size: 11px;">Home</a>
            </div>
            <div class="col-1 text-end">
                <a class=" fw-bold" style="font-size: 11px;" href="landingwiramuda">Wirausaha Muda
                </a>
            </div>
            <div class="col-1 text-end">
                <a class=" fw-bold" href="landingpemuda" style="font-size: 11px;">Pemuda Pelopor
                </a>
            </div>
            <div class="col-1 text-center">
                <a class=" fw-bold" href="landingokp" style="font-size: 11px;">Pemuda OKP
                </a>
            </div>
            <div class="col-1 text-center">
                <a class=" fw-bold" href="landingloker" style="font-size: 11px;">Loker
                </a>
            </div>
            <div class="col-1 text-start">
                <a class=" fw-bold" href="landingberita" style="font-size: 11px;">Berita
                </a>
            </div>
            <div class="text-center mt-4 mx-1 mb-1">
                <a class="btn text-start align-items-center" href="sign-up"
                    style="background-color: #4C6FFF; text-align: center;">
                    <i class="text-white" style="text-transform: none; font-style: normal;">Daftar
                    </i>
                </a>
            </div>
            <div class="col-1">
                <span class="input-group-text text-start">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
    </div>
</nav>
