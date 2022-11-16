@extends('layout.home')
@section('header')
<meta property="og:image" content="{{ asset('storage/'. $tutorial_detail->gambar) }}">
<meta property="og:title" content="{!! $tutorial_detail->judul !!}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:type" content="article" />
<meta property="og:description" content="{!! substr($tutorial_detail->deskripsi, 0, 100) !!}">
<meta property="og:site_name" content="Portofolioku" />
<meta property="og:image:width" content="1600" />
<meta property="og:image:height" content="900" />
<meta property="og:image:alt" content="{!! $tutorial_detail->judul !!}" />

<meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@portofolioku" />
        <meta name="twitter:site:id" content="@portofolioku" />
        <meta name="twitter:creator" content="@portofolioku" />
        <meta name="twitter:description" content="{!! substr($tutorial_detail->deskripsi, 0, 100) !!}." />
        <meta name="twitter:image" content="{{ asset('storage/'. $tutorial_detail->gambar) }}" />
@endsection
@section('content')
<?php
use App\Models\Tutorial;
?>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=636c7c8e0e0d03001fe8c3b4&product=sticky-share-buttons&source=platform" async="async"></script>
    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url({{ asset('storage/'. $konfigurasi[0]->page_header) }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white">{!! $tutorial_detail->judul !!}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('tutorials.show', $kategoritutorial->kategori_name) }}" style="color: rgb(211, 211, 211)">Tutorials</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">Tutorial Details</li>
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
        {{-- <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="row row-cols-1 justify-content-center g-4">
                                <div class="col">
                                    <div class="post-item style-2">
                                        <div class="post-inner">
                                            <div class="post-thumb">
                                                <img src="{{ asset('storage/' . $tutorial->gambar) }}" alt="{!! $tutorial->judul !!}" title="{!! $tutorial->judul !!}" class="w-100">
                                            </div>
                                            <div class="post-content">
                                                <h2>{!! $tutorial->judul !!}</h2>
                                                <div class="meta-post">
                                                    <ul class="lab-ul">
                                                        <li><a href="#"><i class="icofont-calendar"></i>{!! $tutorial->created_at !!}</a></li>
                                                        <li><a href="#"><i class="icofont-ui-user"></i>{!! $tutorial->nama !!}</a></li>
                                                        <li><a href="#"><i class="icofont-eye-alt"></i>{!! $tutorial->views !!}</a></li>
                                                    </ul>
                                                </div>
                                                <p>{!! $tutorial->deskripsi !!}</p>




                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-12">
                    <aside>
                        <div class="widget widget-search">
                            <form action="{{ route('tutorials.index') }}" class="search-wrapper" method="get" autocomplete="off">
                                <input type="search" name="search" placeholder="Search...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>
    
                        <div class="widget widget-post">
                            <div class="widget-header">
                                <h5 class="title">Most Popular Post</h5>
                            </div>
                            <ul class="widget-wrapper">
                                @foreach ($tutorial3 as $tutorial3)   
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="{{ route('tutorials.show', $tutorial3->slug) }}"><img src="{{ asset('storage/' . $tutorial3->gambar) }}" alt="{!! $tutorial3->judul !!}" title="{!! $tutorial3->judul !!}" style="object-fit: cover;"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="{{ route('tutorials.show', $tutorial3->slug) }}"><h6>{!! $tutorial3->judul !!}</h6></a>
                                        <p>{!! $tutorial3->created_at !!}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </aside>
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row justify-content-center">
                

                <div class="col-lg-8 col-12">
                    <article>
                        <div class="product-details">
                            <div class="row align-items-center">
                                        <div class="section-wrapper">
                                            <div class="row row-cols-1 justify-content-center g-4">
                                                <div class="col">
                                                    <div class="post-item style-2">
                                                        <div class="sharethis-sticky-share-buttons"></div>

                                                        <div class="post-inner">
                                                            <div class="post-thumb">
                                                                <img src="{{ asset('storage/' . $tutorial_detail->gambar) }}" alt="{!! $tutorial_detail->judul !!}" title="{!! $tutorial_detail->judul !!}" style="width: 100%; height: 450px; object-fit: cover;">
                                                            </div>
                                                            <div class="post-content">
                                                                <h2>{!! $tutorial_detail->judul !!}</h2>
                                                                <div class="meta-post">
                                                                    <ul class="lab-ul">
                                                                        <li><a href="#"><i class="icofont-calendar"></i>{!! $tutorial_detail->created_at !!}</a></li>
                                                                        <li><a href="#"><i class="icofont-ui-user"></i>{!! $tutorial_detail->nama !!}</a></li>
                                                                        <li><a href="#"><i class="icofont-eye-alt"></i>{!! $tutorial_detail->views !!}</a></li>
                                                                    </ul>
                                                                </div>
                                                                <p>{!! $tutorial_detail->deskripsi !!}</p>
                
                
                
                
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                </div>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-12">
                    <aside>

                        <div class="widget shop-widget">
                            <div class="widget-header">
                                <h5>{!! $pagetitle->kategori_tutorial !!}</h5>
                            </div>
                            <div class="widget-wrapper">
                                <ul class="shop-menu lab-ul">
                                    @foreach ($subkategoritutorial as $subkategoritutorial)
                                    @if ($subkategoritutorial->id_kategori == $kategoritutorial->id)
                                        
                                        
                                    <li>
                                        @php
                                        $totaltutorial = Tutorial::where('status', 'Aktif')->where('sub_kategori', $subkategoritutorial->id)->count();
                                    @endphp
                                        <a href="#0">{!! $subkategoritutorial->kategori !!} ({!! $totaltutorial !!})</a>
                                        <ul class="shop-submenu lab-ul">
                                        @php
                                            $tutorial = Tutorial::where('status', 'Aktif')->where('sub_kategori', $subkategoritutorial->id)->get();
                                        @endphp
                                        @foreach ($tutorial as $tutorial)
                                            <li><a href="{{ route('tutorials.detail', $tutorial->slug) }}">{!! $tutorial->judul !!}</a></li>
                                        @endforeach
                                        </ul>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->
@endsection