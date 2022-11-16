@extends('layout.home')
@section('content')
    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url({{ asset('storage/'. $konfigurasi[0]->page_header) }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white">Tutorial Posts</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">Tutorial</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    
    <!-- blog section start here -->
    {{-- <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                    @forelse ($tutorials as $tutorial)
              
                   @empty
                   <br>
                   <p class="text-center">Maaf, Hasil tidak ditemukan</p>
              
                   @endforelse
                    @foreach ($tutorials as $tutorial)
                        
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="{{ route('tutorials.show', $tutorial->slug) }}"><img src="{{ asset('storage/' . $tutorial->gambar) }}" alt="{!! $tutorial->judul !!}" title="{!! $tutorial->judul !!}" style="max-width: 390px; height: 250px; object-fit: cover;"></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{ route('tutorials.show', $tutorial->slug) }}"><h4>{!! $tutorial->judul !!}</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-ui-user"></i>{!! $tutorial->nama !!}</li>
                                            <li><i class="icofont-calendar"></i>{!! $tutorial->created_at !!}</li>
                                        </ul>
                                    </div>
                                    <p>{!! substr($tutorial->deskripsi, 0, 50) !!}</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="{{ route('tutorials.show', $tutorial->slug) }}" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div>
                    {!! $tutorials->links() !!}
                </div>
            </div>
        </div>
    </div> --}}
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
                
                <div class="col-lg-2 col-12">
                    <aside>

                        <div class="widget shop-widget">
                            <div class="widget-header">
                                <h5>All Categories</h5>
                            </div>
                            <div class="widget-wrapper">
                                <ul class="shop-menu lab-ul">
                                    @foreach ($subkategoritutorial as $subkategoritutorial)
                                        
                                    <li>
                                        <a href="#0">{!! $subkategoritutorial->kategori !!}</a>
                                        <ul class="shop-submenu lab-ul">
                                            <li><a href="#0">All Products</a></li>
                                            <li><a href="#0">Seo</a></li>
                                            <li><a href="#0">Marketing</a></li>
                                            <li><a href="#0">Email Marketing</a></li>
                                            <li><a href="#0">Seo Support</a></li>
                                        </ul>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-10 col-12">
                    <article>
                        <div class="product-details">
                            <div class="row align-items-center">
                                        {{-- <div class="section-wrapper">
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
                                        </div> --}}
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->
@endsection