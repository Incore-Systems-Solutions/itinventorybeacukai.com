@extends('layouts.main')

@section('meta')
        @php
        $meta = \App\Helpers\Format::getCachedMeta();
      //   $lang = app()->getLocale() ?? 'id';
        $lang = 'id';
    @endphp

   <!-- Meta Item -->

    <title>{{ $data['title'] }}</title>
    <meta name="description" content="{{ $meta_description}}">
    <meta name="keywords" content="{{ $meta_keywords }}">
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
@section('meta')
    {!! App\Helpers\Format::meta($data['meta']) !!}
@endsection

@section('content')
<div class="post-area">
    <div *ngFor="let story of stories" class="post-card">
        @php
    $locale = App::getLocale();

    if ($locale === 'id') {
        $content = $data['content_id'] ?? $data['content'];
        $title = $data['title_id'] ?? $data['title'];
    } elseif ($locale === 'en') {
        $content = $data['content_en'] ?? $data['content'];
        $title = $data['title_en'] ?? $data['title'];
    } elseif ($locale === 'zh') {
        $content = $data['content_zh'] ?? $data['content'];
        $title = $data['title_zh'] ?? $data['title'];
    } elseif ($locale === 'ar') {
        $content = $data['content_ar'] ?? $data['content'];
        $title = $data['title_ar'] ?? $data['title'];
    } else {
        $content = $data['content'];
        $title = $data['title'];
    }
@endphp
       <div class="container" >
          <div class="row">
            <div class="col-md-12">
                <div class="card p-4">
                    <h1 class="card-title text-center">{{ $title }}</h1>
                    <img 
                        src="{{ $data['path_image'] }}" 
                        class="d-block mx-auto my-2 rounded-top-2"
                        width="50%"
                        alt="/" 
                    />
                    <div class="card-body text-justify">
                        {!! $content !!}
                    </div>
                </div>
            </div>
          </div>
          
          <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">{{ __('navbar.other_article') }}</h3>
            </div>

            @foreach ($data['related_artikel'] as $item)
            @php
    $locale = App::getLocale();
    if ($locale === 'id') {
        $title = $item['artikel']['title_id'] ?? $item['artikel']['title'];
    } elseif ($locale === 'en') {
        $title = $item['artikel']['title_en'] ?? $item['artikel']['title'];
    } elseif ($locale === 'zh') {
        $title = $item['artikel']['title_zh'] ?? $item['artikel']['title'];
    } elseif ($locale === 'ar') {
        $title = $item['artikel']['title_ar'] ?? $item['artikel']['title'];
    } else {
        $title = $item['artikel']['title'];
    }
@endphp
                {{-- {{ dd($data->relatedArtikel) }} --}}
            <div class="col-md-4 mt-4">
                <div class="position-relative">
                    <!-- Gambar -->
                    <img 
                        src="{{ $item['artikel']['path_image'] ?? 'default-image.jpg' }}" 
                        class="d-block mx-auto rounded-top-2 w-100" 
                        alt="Image of {{ $item['artikel']['title'] }}" 
                    />
                    <!-- Judul di atas gambar -->
                    <a href="{{ $item['artikel']['slug'] }}" class="stretched-link">
                        <p class="position-absolute bottom-0 start-0 w-100 text-center text-white bg-dark bg-opacity-75 py-2 m-0">
                            {{ $title }}
                        </p>
                    </a>
                </div>
            </div>
            
            @endforeach
          </div>
       </div>
    </div>
</div>
@endsection