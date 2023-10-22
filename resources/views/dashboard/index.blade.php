<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-8">
                                <div class="text-start">
                                    <p class="text-sm mb-0 text-capitalize">Userrs Online</p>
                                    <h4 class="mb-0">$53,000<span class="text-success  font-weight-bolder fs-5"> +55%
                                        </span></h4>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="profile-img" style="width: 30px; height: 30px;">
                                    <img src="{{ asset('assets/img/icons/icon_ewallet.png') }}" alt="profile-img" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-8">
                                <div class="text-start">
                                    <p class="text-sm mb-0 text-capitalize">New Users</p>
                                    <h4 class="mb-0">2,300<span class="text-success  font-weight-bolder fs-5"> +5%
                                        </span></h4>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="profile-img" style="width: 30px; height: 30px;">
                                    <img src="{{ asset('assets/img/icons/icon_earth.png') }}" alt="profile-img" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-8">
                                <div class="text-start">
                                    <p class="text-sm mb-0 text-capitalize">New Event</p>
                                    <h4 class="mb-0">+3</h4>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="profile-img" style="width: 30px; height: 30px;">
                                    <img src="{{ asset('assets/img/icons/icon_event.png') }}" alt="profile-img" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-8">
                                <div class="text-start">
                                    <p class="text-sm mb-0 text-capitalize">New Loker</p>
                                    <h4 class="mb-0">4</h4>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="profile-img" style="width: 30px; height: 30px;">
                                    <img src="{{ asset('assets/img/icons/icon_loker.png') }}" alt="profile-img" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-6 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2" style="margin: 0; padding: 0;">
                        <div class="card-header p-0 position-relative z-index-2 bg-transparent">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg">
                                <div class="chart">
                                    <canvas id="chart-bars" class="chart-canvas" height="210"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body mx-2">
                            <h6 class="mb-0">Aktive Users</h6>
                            <p class="text-sm"><span class="text-success  font-weight-bolder">(+23)</span>Than last week
                            </p>

                            <div class="row">
                                <div class="col-3">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="card bg-4FD1C5" style="border-radius: 5px;">
                                                <div class="text-white text-center d-flex align-items-center">
                                                    <i class="fas fa-users text-white" style="font-size: 10px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex text-center align-items-center">
                                            <p class="text-center align-items-center fw-bold ">Users</p>
                                        </div>
                                    </div>
                                    <div class="h6">
                                        3.000
                                    </div>
                                    <div class="progress-wrapper w-280 mx-auto">
                                        <div class="progress-info ">
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-4FD1C5 w-60" role="progressbar"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-3 ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="card bg-4FD1C5" style="border-radius: 5px;">
                                                <div
                                                    class="text-white text-center d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-rocket text-white" style="font-size: 10px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex text-center">
                                            <p class="text-center fw-bold">Clicks</p>
                                        </div>
                                    </div>
                                    <div class="h6">
                                        2,42m
                                    </div>
                                    <div class="progress-wrapper w-280 mx-auto">
                                        <div class="progress-info ">
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-4FD1C5 w-30" role="progressbar"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-3 ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="card bg-4FD1C5" style="border-radius: 5px;">
                                                <div
                                                    class="text-white text-center d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-calendar text-white"
                                                        style="font-size: 10px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex text-center">
                                            <p class="text-center fw-bold">Event</p>
                                        </div>
                                    </div>
                                    <div class="h6">
                                        287
                                    </div>
                                    <div class="progress-wrapper w-280 mx-auto">
                                        <div class="progress-info ">
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-4FD1C5 w-80" role="progressbar"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="card bg-4FD1C5" style="border-radius: 5px;">
                                                <div
                                                    class="text-white text-center d-flex align-items-center justify-content-center">
                                                    <i class="fas fa-wrench text-white" style="font-size: 10px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex text-center">
                                            <p class="text-center fw-bold">Loker</p>
                                        </div>
                                    </div>
                                    <div class="h6">
                                        287
                                    </div>
                                    <div class="progress-wrapper w-280 mx-auto">
                                        <div class="progress-info ">
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-4FD1C5 w-10" role="progressbar"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-6 mt-4 mb-3">
                    <div class="card z-index-2 " style="margin: 0; padding: 0;">
                        <div class="card-header p-0 position-relative z-index-2 bg-transparent">
                            <div class="card-body">
                                <h6 class="mb-0">Activity</h6>
                                <p class="text-sm"><span class="text-success  font-weight-bolder">(5+) more</span> In 2021
                                </p>
                            </div>
                            <div class="bg-white shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <canvas id="chart-line-tasks" class="chart-canvas" height="260"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mb-5 mx-5">

                    <div class="col-4">
                        <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: 100;">Data Pemuda
                            Usia
                            16 s.d 30th</h1>

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
                        <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: 100;">Data
                            Organisasi Kepemudaan</h1>

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

                    <div class="col-4">
                        <h1 class="text-center" style="color: rgb(0, 0, 0); font-size: 18px; font-weight: 100;">Data
                            Kewirausahawan pemuda</h1>

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
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
    </div>
    <style>
        .bg-gradient-primary {
            background: linear-gradient(90deg, #B7ECE7 0%, #B0BDF0 100%);
        }
    </style>
    @push('js')
        <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
        <script>
            var ctx = document.getElementById("chart-bars").getContext("2d");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["", "", "", "", "", "", "", "", ""],
                    datasets: [{
                        label: "Sales",
                        tension: 0.4,
                        borderWidth: 0,
                        borderRadius: 4,
                        borderSkipped: false,
                        backgroundColor: "rgba(255, 255, 255, .8)",
                        data: [50, 20, 10, 22, 50, 10, 40,5,10],
                        maxBarThickness: 6
                    }, ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                                color: "#fff"
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Roboto",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });



            var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

new Chart(ctx3, {
    type: "line",
    data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [
            {
                label: "Kurva 1",
                tension: 0.4,
                borderWidth: 2,
                borderColor: "rgba(0, 0, 0, 0)", // Gunakan warna transparan untuk menghilangkan garis
                backgroundColor: "rgba(0, 0, 0, 0.5)", // Memberikan gradasi ke dalam kurva
                fill: true,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            },
            {
                label: "Kurva 2",
                tension: 0.4,
                borderWidth: 2,
                borderColor: "rgba(0, 0, 0, 0)", // Gunakan warna transparan untuk menghilangkan garis
                backgroundColor: "rgba(79, 209, 197, 0.5)", // Memberikan gradasi ke dalam kurva
                fill: true,
                data: [30, 60, 200, 180, 480, 220, 350, 200, 450],
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: true,
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5],
                    color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                    display: true,
                    padding: 10,
                    color: '#f8f9fa',
                    font: {
                        size: 14,
                        weight: 300,
                        family: "Roboto",
                        style: 'normal',
                        lineHeight: 2
                    },
                }
            },
            x: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5],
                    color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                    display: true,
                    color: '#f8f9fa',
                    padding: 10,
                    font: {
                        size: 14,
                        weight: 300,
                        family: "Roboto",
                        style: 'normal',
                        lineHeight: 2
                    },
                }
            },
        },
    },
});



        </script>
    @endpush
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
