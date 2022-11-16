@extends('layout.home')
@section('content')

    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url({{ asset('storage/'. $konfigurasi[0]->page_header) }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white">{!! $blog->judul !!}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blogger.index') }}" style="color: rgb(211, 211, 211)">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">Blog Details</li>
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="section-wrapper">
                            <div class="row row-cols-1 justify-content-center g-4">
                                <div class="col">
                                    <div class="post-item style-2">
                                        <div class="post-inner">
                                            <div class="post-thumb">
                                                <img src="{{ asset('storage/' . $blog->gambar) }}" alt="{!! $blog->judul !!}" title="{!! $blog->judul !!}" class="w-100">
                                            </div>
                                            <div class="post-content">
                                                <h2>{!! $blog->judul !!}</h2>
                                                <div class="meta-post">
                                                    <ul class="lab-ul">
                                                        <li><a href="#"><i class="icofont-calendar"></i>{!! $blog->created_at !!}</a></li>
                                                    </ul>
                                                </div>
                                                <p>{!! $blog->deskripsi !!}</p>




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
                            <form action="{{ route('blogger.index') }}" class="search-wrapper" method="get" autocomplete="off">
                                <input type="search" name="search" placeholder="Search...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>
    
                        <div class="widget widget-post">
                            <div class="widget-header">
                                <h5 class="title">Most Popular Post</h5>
                            </div>
                            <ul class="widget-wrapper">
                                @foreach ($blog3 as $blog3)   
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="{{ route('blogs.show', $blog3->slug) }}"><img src="{{ asset('storage/' . $blog3->gambar) }}" alt="{!! $blog3->judul !!}" title="{!! $blog3->judul !!}" style="object-fit: cover;"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="{{ route('blogs.show', $blog3->slug) }}"><h6>{!! $blog3->judul !!}</h6></a>
                                        <p>{!! $blog3->created_at !!}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->
@endsection