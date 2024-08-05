<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>LokaTiket</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/card.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <style>
        .search-container {
            position: relative;
        }

        #search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #ccc;
            z-index: 1000;
            border-radius: 20px;
        }

        #search-results ul {
            list-style: none;
            padding: 0;
            margin: 0;
            border-radius:20px;
        }

        #search-results li {
            padding: 10px;
            cursor: pointer;
        }

        #search-results li:hover {
            background: #f0f0f0;
        }
    </style>
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <nav id="navbar1" class="navbar navbar-expand fixed-bottom" style="background-color: white;">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a class="nav-link" href="{{route('customer.index')}}">
                    <i class="fa-solid fa-house-chimney" style="font-size: 26px;"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('customer.explore')}}">
                    <i class="fa-solid fa-compass" style="font-size: 26px;"></i>
                    <span>Jelajah</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('customer.riwayat')}}">
                    <i class="fa-solid fa-ticket" style="font-size: 26px;"></i>
                    <span>Pesanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('customer.profile')}}">
                    <i class="fa-solid fa-user" style="font-size: 26px;"></i>
                    <span>Profil</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="main-content">
        <!-- Konten utama di sini -->
        <!-- ***** Main Banner Area Start ***** -->
        <section id="section-1">
            <div class="content">
                <div class="search-container">
                    <input type="text" id="search" placeholder="Cari tempat favorit kamu">
                    <button type="button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                    <div id="search-results" style="display: none;">
                    <ul></ul>
                </div>
                </div>
            </div>
        </section>
        <!-- ***** Main Banner Area End ***** -->
        <div class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="more-info">
                            <div class="row">
                                <p class="mb-3" style="text-align: left; font-size: 20px; color:black;">Kategori</p>
                                <div class="col-lg-4 col-sm-6 col-6">
                                    <a href="">
                                        <i class="fa-solid fa-tree"></i>
                                    </a>
                                    <h4><span>Alam</span></h4>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-6">
                                    <a href="{{ route('customer.wisata.filter', 'Pantai') }}">
                                        <i class="fa-solid fa-umbrella-beach"></i>
                                    </a>
                                    <h4><span>Pantai</span></h4>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-6">
                                    <a href="{{ route('customer.wisata.filter', 'Gunung') }}">
                                        <i class="fa-solid fa-mountain"></i>
                                    </a>
                                    <h4><span>Gunung</span></h4>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-6">
                                    <a href="{{ route('customer.wisata.filter', 'Kawah') }}">
                                        <i class="fa-solid fa-water"></i>
                                    </a>
                                    <h4><span>Kawah</span></h4>
                                </div>
                                <div class="col-lg-4 col-sm-6 col-6">
                                    <a href="{{route('customer.explore')}}">
                                        <i class="fa-solid fa-border-all"></i>
                                    </a>
                                    <h4><span>Semua</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cities-town">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="mb-3" style="text-align: left; font-size: 20px; color:black; margin-left:15px;">Rekomendasi</p>
                    </div>
                    <div class="slider-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="owl-cites-town owl-carousel">
                                    @foreach($wisatas as $wisata)
                                    <div class="item">
                                        <div class="thumb">
                                            <a href="{{ route('customer.show', $wisata) }}">
                                                <img src="{{ asset('storage/images/' . json_decode($wisata->images)[0]) }}" alt="">
                                            </a>
                                        </div>
                                        <h1>{{$wisata->name}}</h1>
                                        <span class="badge text-dark">⭐ {{$wisata->rating_text}}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.image-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });

            $('#search').on('keyup', function() {
                let query = $(this).val();
                if (query.length > 2) {
                    $.ajax({
                        url: "{{ route('customer.search') }}",
                        type: "GET",
                        data: { query: query },
                        success: function(data) {
                            $('#search-results').show();
                            $('#search-results ul').empty();
                            $.each(data, function(index, wisata) {
                                $('#search-results ul').append('<li><a href="' + "{{ route('customer.show', '') }}" + '/' + wisata.id + '">' + wisata.name + '</a></li>');
                            });
                        }
                    });
                } else {
                    $('#search-results').hide();
                }
            });

            $(document).on('click', function(event) {
                if (!$(event.target).closest('.search-container').length) {
                    $('#search-results').hide();
                }
            });
        });
    </script>
</body>

</html>
