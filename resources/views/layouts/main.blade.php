<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      {{-- <title>Laravel</title> --}}

      @yield('meta')
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <!-- Styles -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      {{-- <title>Kawasan Berikat | Aplikasi Manajemen & Informasi</title>
      <meta name="title" content="Kawasan Berikat | Aplikasi Manajemen & Informasi">
      <meta name="description" content="Kelola dan pantau aktivitas kawasan berikat dengan aplikasi modern. Solusi efisien untuk manajemen, pelaporan, dan informasi kawasan berikat.">
      <meta name="keywords" content="kawasan berikat, aplikasi kawasan berikat, manajemen kawasan, pelaporan kawasan, informasi industri, aplikasi logistik, kawasan industri"> --}}
      <meta name="author" content="Kawasan-Berikat.com">
      <meta property="og:title" content="Kawasan Berikat | Aplikasi Manajemen & Informasi">
      <meta property="og:description" content="Gunakan aplikasi kawasan berikat untuk kemudahan pengelolaan dan pelaporan kegiatan di kawasan industri berikat.">
      <meta property="og:type" content="website">
      <meta property="og:url" content="https://kawasan-berikat.com">
      <meta property="og:image" content="https://res.cloudinary.com/dvdkj3x6t/image/upload/v1747205601/incore_nj5gkx.png">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="Kawasan Berikat | Aplikasi Manajemen & Informasi">
      <meta name="twitter:description" content="Solusi digital modern untuk memantau dan mengelola kawasan berikat secara efisien dan real-time.">
      <meta name="twitter:image" content="https://res.cloudinary.com/dvdkj3x6t/image/upload/v1747205601/incore_nj5gkx.png">

      
      <style>
         .card {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.card-body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

         .text-ellipsis {
             display: -webkit-box;
             -webkit-line-clamp: 3; /* Tentukan jumlah baris yang ingin ditampilkan */
             -webkit-box-orient: vertical;
             overflow: hidden;
             text-overflow: ellipsis;
             max-height: 4.5em; /* Sesuaikan dengan tinggi satu baris teks */
         }
         /* .bg-body-tertiary {
            background-color: #fff3f5 !important;
         } */
     </style>
     @yield('styles')
   </head>
   <body class="antialiased">
      <!-- Header -->
      <div class="header" style="background-color: #fff3f5">
         <div class="container" style="background-color: #fff3f5">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #fff3f5 !important">
               <div class="container-fluid" style="background-color: #fff3f5">
                  <a class="navbar-brand" href="https://www.indonesiacore.com">
                     <img src="https://www.indonesiacore.com/_astro/logo-incore.BfcpG8i8.svg" style="width: 100px;height:50px" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                     <ul class="navbar-nav ms-auto">
                        <li class="nav-item ">
                           <a class="nav-link " href="https://gudangberikat.com">
                              <b>{{ __('navbar.subnav_1_1') }}</b>
                           </a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link " href="https://pusatlogistikberikat.com/">
                              <b>{{ __('navbar.subnav_1_2') }}</b>
                           </a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link " href="https://kitepembebasan.com/">
                              <b>{{ __('navbar.subnav_1_3') }}</b>
                           </a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link " href="https://itinventorybeacukai.com/">
                              <b>{{ __('navbar.subnav_1_4') }}</b>
                           </a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link " href="https://kawasan-berikat.com">
                              <b>{{ __('navbar.subnav_1_5') }}</b>
                           </a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle font-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>{{ __('navbar.kontak_kami') }}</b>
                           </a>
                           <ul class="dropdown-menu" style="min-width: 220px;">
                              <li><a class="dropdown-item" href="{{ url('kontak-kami') }}">{{ __('navbar.permit_it') }}</a></li>
                              <li><a class="dropdown-item" href="{{ url('konsultan') }}">{{ __('navbar.consultant_register') }}</a></li>
                           </ul>
                        </li>
                        {{-- <li class="nav-item ">
                           <a class="nav-link " href="{{ url('kontak-kami') }}">
                              <b>{{ __('navbar.kontak_kami') }}</b>
                           </a>
                        </li> --}}
                        @php
                            $locale = App::getLocale();
                              if ($locale === 'id') {
                                 $lang = __('navbar.nav_4');
                              } elseif ($locale === 'en') {
                                 $lang = __('navbar.nav_4');
                              } elseif ($locale === 'zh') {
                                 $lang = __('navbar.nav_4');
                              } elseif ($locale === 'ar') {
                                 $lang = __('navbar.nav_4');
                              } else {
                                 $lang = __('navbar.nav_4'); // default
                              }
                        @endphp
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle font-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{ __('navbar.image_nav') }}" style="width: 15px; height: 15px;margin-right: 2px" class="mr-2" alt="">
                              <b>{{ $lang }}</b>
                           </a>
                           <ul class="dropdown-menu" style="min-width: 160px;">
                              <li><a class="dropdown-item" href="#" onclick="changeLanguage('id')"><img src="https://www.indonesiacore.com/_astro/id.COWC0E3n.svg" style="width: 15px; height: 15px;margin-right: 2px" class="mr-2" alt=""><span>Indonesia</span></a></li>
                              <li><a class="dropdown-item" href="#" onclick="changeLanguage('en')"><img src="https://www.indonesiacore.com/_astro/en.DTXiLQoe.svg" style="width: 15px; height: 15px;margin-right: 2px" class="mr-2" alt=""><span>English</span></a></li>
                              <li><a class="dropdown-item" href="#" onclick="changeLanguage('zh')"><img src="https://www.indonesiacore.com/_astro/zh.DifnnI3t.svg" style="width: 15px; height: 15px;margin-right: 2px" class="mr-2" alt="">中文</a></li>
                              <li><a class="dropdown-item" href="#" onclick="changeLanguage('ar')"><img src="https://www.indonesiacore.com/_astro/sa.DMELvfVN.svg" style="width: 15px; height: 15px;margin-right: 2px" class="mr-2" alt=""><span>العربية</span></a></li>
                           </ul>
                        </li>
                        {{-- <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle font-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <b>List Domain</b>
                           </a>
                           <ul class="dropdown-menu">
                              @foreach (App\Helpers\Format::getSubdomain() as $item)
                                 <li><a class="dropdown-item" href="{{ 'https://'.$item->name_subdomain }}" target="_blank">{{ $item->name }}</a></li>
                              @endforeach
                           </ul>
                        </li> --}}
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <div class="dark-overlay"></div>
      <!-- Header End -->
      <!-- Page Content -->
      <div class="page-content">
      <div class="content-inner pt-0">
      <div class="container p-b50" style="background-color: #e6e8e6">
         @yield('content')
      </div>
      <script>
         function changeLanguage(locale) {
            window.location.href = `/lang/${locale}`;
         }
      </script>
      @yield('scripts')
      <!-- Page Content End-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   </body>
</html>