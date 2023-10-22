<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="Ads"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Ads Management"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">

                    <div class="mb-3">

                        <div class="d-flex align-items-center">
                            <input type="file" class="form-control" id="gambar" name="gambar[]"
                                accept=".jpg, .jpeg, .png">

                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-1 mx-0">
                                    <div class="profile-img" >
                                        <img class="w-100" src="{{ asset('assets/img/1.png') }}" alt="profile-img" />
                                    </div>
                                </div>
                                <div class="col-1 mx-0">
                                    <div class="profile-img" >
                                        <img class="w-100" src="{{ asset('assets/img/2.png') }}" alt="profile-img" />
                                    </div>
                                </div>
                                <div class="col-1 mx-0">
                                    <div class="profile-img" >
                                        <img class="w-100" src="{{ asset('assets/img/3.png') }}" alt="profile-img" />
                                    </div>
                                </div>
                                <div class="col-1 mx-0">
                                    <div class="profile-img" >
                                        <img class="w-100" src="{{ asset('assets/img/4.png') }}" alt="profile-img" />
                                    </div>
                                </div>
                                <div class="col-1 mx-0">
                                    <div class="profile-img" >
                                        <img class="w-100" src="{{ asset('assets/img/5.png') }}" alt="profile-img" />
                                    </div>
                                </div>
                                <div class="col-1 mx-0">
                                    <div class="profile-img" >
                                        <img class="w-100" src="{{ asset('assets/img/6.png') }}" alt="profile-img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
        <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
