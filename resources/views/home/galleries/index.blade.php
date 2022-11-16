@extends('layout.home')
@section('content')
<?php
use App\Models\Gallery;
?>
<div class="pageheader-section" style="background-image: url({{ asset('storage/'. $konfigurasi[0]->page_header) }})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2 style="color: white">{!! $pagetitle[0]->gallery !!}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="color: white">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="blog-section padding-tb yellow-color-section">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle yellow-color">{!! $pagetitle[0]->subjudul_gallery !!}</span>
            <h3 class="title">{!! $pagetitle[0]->judul_gallery !!}</h3>
        </div>
        <div class="section-wrapper">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                @foreach ($gallery as $gallery)
                    
                <div class="col">
                    <div class="post-item style-3">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a><img src="{{ asset('storage/' . $gallery->gambar) }}" alt="{!! $gallery->judul !!}" title="{!! $gallery->judul !!}" style="max-width: 420px; height: 250px; object-fit: contain;"></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div> --}}

<div class="blog-section padding-tb yellow-color-section">
        <div class="section-header text-center">
            <span class="subtitle yellow-color">{!! $pagetitle[0]->subjudul_gallery !!}</span>
        </div>
<div class="course-section style-3">
    <div class="course-shape one"><img src="{{ asset('') }}assets/user/homepage/images/shape-img/icon/01.png" alt="education"></div>
    <div class="course-shape two"><img src="{{ asset('') }}assets/user/homepage/images/shape-img/icon/02.png" alt="education"></div>
    <div class="container">
        <div class="section-header">
            <h2 class="title">{!! $pagetitle[0]->judul_gallery !!}</h2>
            <div class="course-filter-group">
                <ul class="lab-ul">
                    <li class="active" data-filter="*">All</li>
                    @foreach ($kategorigallery as $kategorigallery)
                    @php
                        $count = Gallery::where('kategori_name', $kategorigallery->slug)->get('judul');
                    @endphp
                    <li data-filter=".{!! $kategorigallery->slug !!}">{!! $kategorigallery->kategori !!} ({!! $count !!})</li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="section-wrapper">
            <div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 course-filter">
                @foreach ($gallery as $gallery)
                    
                <div class="col {!! $gallery->kategori_name !!}">
                    <div class="course-item style-4">
                        <div class="course-inner">
                            <div class="course-thumb">
                                <img src="{{ asset('storage/'. $gallery->gambar) }}" alt="course">
                            </div>
                            <div class="course-content">
                                <a href="course-single.html"><h5>{!! $gallery->judul !!}</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
</div>
@endsection    
