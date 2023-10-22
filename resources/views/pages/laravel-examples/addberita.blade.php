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

                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            required style="border: 2px solid #92929D;" placeholder="Judul Berita">

                                </div>

                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            required style="border: 2px solid #92929D;" placeholder="Kategori">

                            </div>


                            <div class="mb-3">

                                <div class="d-flex align-items-center">
                                    <input type="file" class="form-control" id="gambar" name="gambar[]"
                                        accept=".jpg, .jpeg, .png">

                                </div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px; border: 2px solid #92929D;"></textarea>
                                <label for="floatingTextarea">Comments</label>
                              </div>



                            <button type="submit" class="btn btn-primary w-100 mt-5"
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
