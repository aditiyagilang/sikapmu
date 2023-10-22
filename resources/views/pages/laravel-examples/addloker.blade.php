<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="addloker"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tambah Post Lamaran Kerja"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">

                <div class="card " style="margin-right: 500px">
                    <div class="card-body">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            required style="border: 2px solid #92929D;" placeholder="Judul Lamaran">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            required style="border: 2px solid #92929D;" placeholder="Kuota Pelamar">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="email" name="email" required
                                    style="border: 2px solid #92929D;" placeholder="Deskripsi Lamaran">

                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="password" name="password" required
                                    style="border: 2px solid #92929D;" placeholder="Nama Perusahaan">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="kpassword" name="kpassword" required
                                    style="border: 2px solid #92929D;" placeholder="Nama Perusahaan">
                            </div>
                            <div class="mb-3">

                                <div class="d-flex align-items-center">
                                    <input type="file" class="form-control" id="gambar" name="gambar[]"
                                        accept=".jpg, .jpeg, .png">

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100"
                                style="background-color: #0057FF;">SIMPAN</button>

                        </form>


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
