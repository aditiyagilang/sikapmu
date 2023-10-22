<x-layout bodyClass="bg-gray-200">
    <x-navbars.navs.navland signin='login' signup='register'></x-navbars.navs.navland>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->

                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <div class="page-header min-vh-100">
            <div class="container">
                <h1 class="text-start mx-3" style="color: rgb(0, 0, 0); font-size: 18px; ">Login SIPanda</h1>
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column me-auto me-lg-auto">
                        <div class="card card-plain">

                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('login') }}" class="text-start">
                                    @csrf
                                    @if (Session::has('status'))
                                        <div class="alert alert-success alert-dismissible text-white" role="alert">
                                            <span class="text-sm">{{ Session::get('status') }}</span>
                                            <button type="button" class="btn-close text-lg py-3 opacity-10"
                                                data-bs-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ 'admin@material.com' }}">
                                    </div>
                                    @error('email')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password"
                                            value='{{ 'secret' }}'>
                                    </div>
                                    @error('password')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="form-check form-switch d-flex align-items-center my-3">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember
                                            me</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn w-100 my-4 mb-2" style="background-color: #0057FF;"><i class="text-sm text-white" >Sign Up</i></button>
                                    </div>
                                    <div class="text-center">
                                        <button type="close"
                                            class="btn btn-lg bg- btn-lg w-100 mt-4 mb-0" style="background-color: #000000;"><i class="text-sm text-white" >Kembali Ke Login</i></button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                    <div
                                class="col-4 d-lg-flex d-none my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-end flex-column">
                                <div class="position-relative   border-radius-lg d-flex flex-column justify-content-center">
                                    <img src="{{ asset('assets/img/bg_up.png') }}" alt="profile-img" class="text-center" />
                                </div>
                            </div>
                </div>
            </div>

        </div>
    </main>
    @push('js')
        <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
        <script>
            $(function() {

                var text_val = $(".input-group input").val();
                if (text_val === "") {
                    $(".input-group").removeClass('is-filled');
                } else {
                    $(".input-group").addClass('is-filled');
                }
            });
        </script>
    @endpush
</x-layout>
