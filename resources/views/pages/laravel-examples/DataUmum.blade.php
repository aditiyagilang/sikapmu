<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="DataUmum"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Data Umum"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="me-3 my-3 text-start">
                        <a class="btn bg-0057FF mb-0"  data-bs-toggle="modal" data-bs-target="#add" href="javascript:;" style="background-color: #0057FF;">
                            <i class="text-sm text-white" >Tambah Data</i>
                        </a>
                    </div>

                        <div class="card-body px-0 pb-2">
                            <i class="text-sm text-black" >Data Umum</i>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama
                                            </th>
                                            <th
                                                class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                Email</th>
                                            <th
                                                class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Status</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Kelengkapan Data</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Action</th>

                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">user1
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">user1@gmail.com</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Belum Terverifikasi</span>
                                            </td>
                                            <td class="">


                                                <div class="progress-wrapper w-50 mx-auto text-center">
                                                    <span style="color: #4FD1C5;">60%</span>
                                                    <div class="progress-info text-center">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-4FD1C5 w-60" role="progressbar"
                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                               <div class="row">
                                                <div class="col-4">
                                                    <div class="me-n2 my-3 text-start">
                                                        <a class="btn btn-sm bg-0057FF mb-0 w-100" href="javascript:;" style="background-color: #0057FF;">
                                                            <i class="text-sm text-white text-center" >VERIFIKASI</i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="me-n2 my-3 text-start">
                                                        <a class="btn btn-sm bg-warning mb-0 w-100" href="javascript:;" style="background-color: #0057FF;">
                                                            <i class="text-sm text-white" >UBAH</i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="me-n2 my-3 text-start">
                                                        <a class="btn btn-sm bg-danger mb-0 h-25 w-100" href="javascript:;" style="background-color: #0057FF;">
                                                            <i class="text-sm text-white" >HAPUS</i>
                                                        </a>
                                                    </div>
                                                </div>
                                               </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">user2
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">user2@gmail.com</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Belum Terverifikasi</span>
                                            </td>
                                            <td class="">


                                                <div class="progress-wrapper w-50 mx-auto text-center">
                                                    <span style="color: #4FD1C5;">10%</span>
                                                    <div class="progress-info text-center">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-4FD1C5 w-10" role="progressbar"
                                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                               <div class="row">
                                                <div class="col-4">
                                                    <div class="me-n2 my-3 text-start">
                                                        <a class="btn btn-sm bg-0057FF mb-0 w-100" href="javascript:;" style="background-color: #0057FF;">
                                                            <i class="text-sm text-white text-center" >VERIFIKASI</i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="me-n2 my-3 text-start">
                                                        <a class="btn btn-sm bg-warning mb-0 w-100" href="javascript:;" style="background-color: #0057FF;">
                                                            <i class="text-sm text-white" >UBAH</i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="me-n2 my-3 text-start">
                                                        <a class="btn btn-sm bg-danger mb-0 h-25 w-100" href="javascript:;" style="background-color: #0057FF;">
                                                            <i class="text-sm text-white" >HAPUS</i>
                                                        </a>
                                                    </div>
                                                </div>
                                               </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">user3
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">user3@gmail.com</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">Belum Terverifikasi</span>
                                            </td>
                                            <td class="">


                                                <div class="progress-wrapper w-50 mx-auto text-center">
                                                    <span style="color: #4FD1C5;">100%</span>
                                                    <div class="progress-info text-center">
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-4FD1C5 w-100" role="progressbar"
                                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                               <div class="row">

                                                <div class="col-4">
                                                    <div class="me-n2 my-3 text-start">
                                                        <a class="btn btn-sm bg-warning mb-0 w-100" href="javascript:;" style="background-color: #0057FF;">
                                                            <i class="text-sm text-white" >UBAH</i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="me-n2 my-3 text-start">
                                                        <a class="btn btn-sm bg-danger mb-0 h-25 w-100" href="javascript:;" style="background-color: #0057FF;">
                                                            <i class="text-sm text-white" >HAPUS</i>
                                                        </a>
                                                    </div>
                                                </div>
                                               </div>
                                            </td>
                                        </tr>




                                    </tbody>
                                </table>
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

<div class="modal fade" id="add" tabindex="-1" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adddoc">Daftar SiPanda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nama" name="nama" required style="border: 2px solid #92929D;" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nama" name="nama" required style="border: 2px solid #92929D;" placeholder="Nama Belakang">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" required style="border: 2px solid #92929D;" placeholder="Email Address">

                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" required style="border: 2px solid #92929D;" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="kpassword" name="kpassword" required style="border: 2px solid #92929D;" placeholder="Konfirmasi Password">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nohp" name="nohp" required style="border: 2px solid #92929D;" placeholder="No Hp">
                    </div>
                    <button type="submit" class="btn btn-primary w-100" style="background-color: #0057FF;">SIMPAN</button>

                </form>
            </div>
        </div>
    </div>
</div>

