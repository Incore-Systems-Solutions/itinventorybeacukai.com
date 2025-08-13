@extends('layouts.main')

@section('meta')
        @php
        $meta = \App\Helpers\Format::getCachedMeta();
      //   $lang = app()->getLocale() ?? 'id';
        $lang = 'id';
    @endphp

   <!-- Meta Item -->

    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
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
        <div class="container">
            <div class="row row-cols-1 row-cols-md-1 mb-4 g-4">
                <section class="">
                    <div id="carouselGabungan" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="position-relative">
                                        <img
                                            src="https://res.cloudinary.com/dvdkj3x6t/image/upload/v1755054076/bapanas-meet-4.C_Fzfr4V_g1efqq.webp"
                                            class="img-fluid w-100 rounded"
                                            alt="Gudang Berikat"
                                            style="object-fit: cover; height: 300px;"
                                        >
                                        <div
                                            class="position-absolute top-50 start-50 translate-middle text-white text-center p-4"
                                            style="background-color: rgba(0, 0, 0, 0.7); border-radius: 12px;"
                                        >
                                            <h1 class="fw-bold text-white">{{ __('beacukai.slide_1_title') }}</h1>
                                            <p class="mt-2">{{ __('beacukai.slide_1_desc') }}</p>
                                            <a href="{{ url('kontak-kami') }}" class="btn btn-light mt-2">{{ __('beacukai.slide_1_cta') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

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

            <h2 class="fw-bold text-center">{{ __('beacukai.fitur') }}</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
                @for ($i = 1; $i <= 9; $i++)
                <div class="col">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body">
                            <h3 class="card-title">{{ __('beacukai.feature_'.$i.'_title') }}</h3>
                            <p class="card-text">{{ __('beacukai.feature_'.$i.'_desc') }}</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>

        </div>
    </div>
</div>

@endsection