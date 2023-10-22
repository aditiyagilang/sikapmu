@props(['activePage'])
<style>
    .sidenav {
        background-color: #293679;
        border-top: 1px solid #293679;
        border-left: 1px solid #293679;
        border-bottom: 0;
    }

    .custom-bg {
        background-color: #293679 !important;
        border-bottom: 0;
    }

    .active-page {
        background-color: #ffffff !important;
        color: #000000 !important;
        /* Set text color to black */
    }

    .nav-link:not(.active-page) {
        color: #ffffff !important;
    }

    .nav-link:not(.active-page) .material-icons {
        color: #ffffff !important;
        margin-left: 0 !important;
    }

    /* CSS for active card with a green background and white icon */
    .bg-4FD1C5 {
        background-color: #4FD1C5;
        border-bottom: 0;
    }

    .text-white {
        color: #ffffff;
        border-bottom: 0;
    }

    /* CSS for non-active card with a white background and green icon */
    .bg-white {
        background-color: #ffffff;
        border-bottom: 0;
    }

    .text-4FD1C5 {
        color: #4FD1C5;
        border-bottom: 0;
    }

    .card {
        /* Add any additional card styling here */
        /* For example, border, padding, and margin */
        border: 1px solid #ccc;
        padding: 8px;


        /* You can customize this as per your project's design */
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0-beta1/css/all.min.css">

<aside class="sidenav navbar navbar-vertical navbar-expand-xs fixed-start custom-bg" id="sidenav-main">
    <div class="sidenav-header">
        <a href="{{ route('dashboard') }}" class="nav-link" id="dashboard">
            <div class="profile-img"
                style="width: 60px; height: 60px; display: flex; justify-content: center; margin: 0 auto;">
                <img src="{{ asset('assets/logo.png') }}" alt="profile-img" />
            </div>
        </a>
    </div>
    <hr class="horizontal light mt-0 ">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'dashboard' ? ' active-page' : '' }} "
                href="{{ route('dashboard') }}">
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'DataWiraMuda' ? ' active-page' : '' }} "
                href="{{ route('DataWiraMuda') }}">
                <div class="card {{ $activePage == 'DataWiraMuda' ? 'bg-4FD1C5' : 'bg-white' }}">

            </div>
            <span class="nav-link-text ms-1">Data Wirausaha Muda</span>
            </a>
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'dataOKP' ? ' active-page' : '' }} "
                href="{{ route('dataOKP') }}">
                <div class="card {{ $activePage == 'dataOKP' ? 'bg-4FD1C5' : 'bg-white' }}">

                </div>
                <span class="nav-link-text ms-1">Data OKP</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'DataPemudaP' ? ' active-page' : '' }} "
                href="{{ route('DataPemudaP') }}">
                <div class="card {{ $activePage == 'DataPemudaP' ? 'bg-4FD1C5' : 'bg-white' }}">

                </div>
                <span class="nav-link-text ms-1">Data Pemuda Pelopor</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'DataUmum' ? ' active-page' : '' }} "
                href="{{ route('DataUmum') }}">
                <div class="card {{ $activePage == 'DataUmum' ? 'bg-4FD1C5' : 'bg-white' }}">

                </div>
                <span class="nav-link-text ms-1">Data Umum</span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Event & Loker</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'DataLoker' ? 'active-page' : '' }} "
                href="{{ route('DataLoker') }}">

                <span class="nav-link-text ms-1">Data Lowongan Kerja</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'DataEvent' ? ' active-page' : '' }} "
                href="{{ route('DataEvent') }}">

                <span class="nav-link-text ms-1">Data Event</span>
            </a>
        </li>
        <hr style="border-top: 2px solid #ffffff;">
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'Berita' ? ' active-page' : '' }}  "
                href="{{ route('Berita') }}">

                <span class="nav-link-text ms-1">Berita</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'Ads' ? ' active-page' : '' }}  "
                href="{{ route('Ads') }}">

                <span class="nav-link-text ms-1">Ads Management</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white {{ $activePage == 'index2' ? ' active-page' : '' }}  "
                href="{{ route('index2') }}">
                <span class="nav-link-text ms-1">Sign Up</span>
            </a>
        </li>
    </ul>


</aside>
