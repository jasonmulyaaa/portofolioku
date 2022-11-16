@extends('layout.home')
@section('content')
<?php
use App\Models\Tutorial;
?>
    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url({{ asset('storage/'. $konfigurasi[0]->page_header) }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white">{!! $kategoritutorial->kategori !!}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">{!! $kategoritutorial->kategori !!}</li>
                                {{-- <li class="breadcrumb-item active" aria-current="page" style="color: white">Tutorial Details</li> --}}
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    
    <!-- blog section start here -->
    <div class="blog-section blog-single padding-tb section-bg">

        <div class="category-section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="subtitle">{!! $pagetitle->judul_kategori !!}</span>
                    <h2 class="title">{!! $pagetitle->subjudul_kategori !!}</h2>
                </div>
                <div class="section-wrapper">
                    <div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
                        @foreach ($subkategoritutorial as $subkategoritutorial)
                        @if ($subkategoritutorial->id_kategori == $kategoritutorial->id)
                        @php
                        $totaltutorial = Tutorial::where('sub_kategori', $subkategoritutorial->id)->where('status', 'Aktif')->count();
                    @endphp
                    @if ($totaltutorial == 0)
                        
                    @else

                        <div class="col">
                            <div class="category-item text-center">
                                <div class="category-inner">
                                    <div class="category-thumb">
                            <a href="{{ route('tutorials.intro', $subkategoritutorial->kategori_name) }}">
                                <img src="{{ asset('storage/'. $subkategoritutorial->gambar) }}" alt="{!! $subkategoritutorial->kategori !!}" title="{!! $subkategoritutorial->kategori !!}" style="width: 100%; height: 80px;">
                            </a>
                                    </div>
                                    <div class="category-content">
                                        <a href="{{ route('tutorials.intro', $subkategoritutorial->kategori_name) }}"><h6>{!! $subkategoritutorial->kategori !!}</h6></a>

                                        <span>{!! $totaltutorial !!} Tutorial</span>
                                        @php
                                            $views = Tutorial::where('status', 'Aktif')->where('sub_kategori', $subkategoritutorial->id)->sum('views');
                                        @endphp
                                        <span><i class="icofont-eye-alt"></i> {!! $views !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->
@endsection