@extends('layouts.main')

@section('meta')
        @php
        $meta = \App\Helpers\Format::getCachedMeta();
      //   $lang = app()->getLocale() ?? 'id';
        $lang = 'id';
    @endphp

   <!-- Meta Item -->

    <title>{{ $meta['meta'][$lang]['title'] ?? '' }}</title>
    <meta name="description" content="{{ $meta['meta'][$lang]['description'] ?? '' }}">
    <meta name="keywords" content="{{ $meta['meta'][$lang]['keywords'] ?? '' }}">
   <!-- Schema Item -->
    {{-- Schema Item --}}
    @if (!empty($meta['schema'][$lang]))
        @foreach ($meta['schema'][$lang] as $schemaItem)
            @if (!empty($schemaItem['structured_data']))
                <script type="application/ld+json">
                    {!! $schemaItem['structured_data'] !!}
                </script>
            @endif
        @endforeach
    @endif
@endsection


@section('styles')
    <style>
      .card {
  border-radius: 15px;
  transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.card-body img {
  width: 80px;
  height: 80px;
  object-fit: cover;
}

p {
  font-size: 14px;
  line-height: 1.4;
}

.container-fluid {
  background-color: #f5f5f5; /* Sesuaikan dengan background Anda */
}

    </style>
@endsection

@section('content')

<div class="post-area">
    <div *ngFor="let story of stories" class="post-card">
      <div class="container" >
         <div class="row row-cols-1 row-cols-md-1 mb-4 g-4">
            <section class="">
               <div id="carouselGabungan" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">

                     <div class="carousel-item active">
                        <div class="container">
                           <div class="position-relative">
                              <!-- Gambar sebagai latar belakang -->
                              <img
                                 src="https://res.cloudinary.com/dvdkj3x6t/image/upload/v1755054076/bapanas-meet-4.C_Fzfr4V_g1efqq.webp"
                                 class="img-fluid w-100 rounded"
                                 alt="Aplikasi Ceisa Bea Cukai"
                                 style="object-fit: cover; height: 300px;"
                              >

                              <!-- Overlay teks di tengah -->
                              <div
                                 class="position-absolute top-50 start-50 translate-middle text-white text-center p-4"
                                 style="background-color: rgba(0, 0, 0, 0.7); border-radius: 12px;"
                              >
                                 <h2 class="fw-bold text-white">{{ __('slider.slide_1_1') }}</h2>
                                 <p class="mt-2">{{ __('slider.slide_1_2') }}</p>
                                 <a href="{{ url('kontak-kami') }}" class="btn btn-sm btn-light mt-2">{{ __('slider.slide_1_3') }}</a>

                              </div>
                           </div>
                        </div>
                     </div>


   
                     <!-- Slide 2 -->
                     {{-- <div class="carousel-item">
                        <div class="container">
                           <div class="position-relative">
                              <!-- Gambar sebagai latar belakang -->
                              <img
                              src="https://res.cloudinary.com/dvdkj3x6t/image/upload/v1755054076/bapanas-meet-4.C_Fzfr4V_g1efqq.webp"
                              class="img-fluid w-100 rounded"
                              alt="Image 2"
                              style="object-fit: cover; height: 300px;"
                              >

                              <!-- Overlay teks di tengah -->
                              <div
                              class="position-absolute top-50 start-50 translate-middle text-white text-center p-4"
                              style="background-color: rgba(0, 0, 0, 0.7); border-radius: 12px;"
                              >
                              <h2 class="fw-bold text-white">{{ __('navbar.slide_2_1') }}</h2>
                              <p class="mt-2">
                                 {{ __('navbar.slide_2_2') }}
                              </p>
                              <a href="{{ url('kontak-kami') }}" class="btn btn-light mt-2">{{ __('navbar.slide_2_3') }}</a>
                              </div>
                           </div>
                        </div>
                     </div> --}}

   
                     <!-- Slide Tambahan (opsional) -->
                     <!-- <div class="carousel-item">...</div> -->
   
                  </div>
   
                  <!-- Navigasi Carousel -->
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselGabungan" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselGabungan" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                  </button>
               </div>
            </section>
         </div>

         <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($data as $item)
                <div class="col">
                  <a href="{{ url('artikel/'.$item['slug']) }}" class="text-black">
                    <div class="card h-100">
                        <img 
                            src="{{ $item['path_image'] }}" 
                            class="card-img-top" 
                            alt="/" 
                        />
                           @php
                           $locale = App::getLocale();
                           if ($locale === 'id') {
                              $content = $item['content_id'] ?? $item['content'];
                              $title = $item['title_id'] ?? $item['title'];
                           } elseif ($locale === 'en') {
                              $content = $item['content_en'] ?? $item['content'];
                              $title = $item['title_en'] ?? $item['title'];
                           } elseif ($locale === 'zh') {
                              $content = $item['content_zh'] ?? $item['content'];
                              $title = $item['title_zh'] ?? $item['title'];
                           } elseif ($locale === 'ar') {
                              $content = $item['content_ar'] ?? $item['content'];
                              $title = $item['title_ar'] ?? $item['title'];
                           } else {
                              $content = $item['content']; // default
                              $title = $item['title']; // default
                           }
                        @endphp
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $title }}</h5>
                            <!-- Konten scrollable -->
                            <div class="card-text overflow-hidden flex-grow-1" style="max-height: 200px;">
                                {{-- <div class="card-text text-truncate" style="max-height: 150px; overflow: hidden;"> --}}
                                {!! $content !!}
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('artikel/'.$item['slug']) }}" class="btn btn-sm btn-outline-primary">{{ __('navbar.detail') }}</a>
                            </div>
                        </div>
                    </div>
                  </a>
                </div>
            @endforeach
         </div>
        
        
      </div>
    </div>
</div>
@endsection