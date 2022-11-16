@extends('layout.home')
@section('content')
    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url({{ asset('storage/'. $konfigurasi[0]->page_header) }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white">Blog Posts</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    
    <!-- blog section start here -->
    <div class="blog-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">
                    @forelse ($blogs as $blog)
              
                   @empty
                   <br>
                   <p class="text-center">Maaf, Hasil tidak ditemukan</p>
              
                   @endforelse
                    @foreach ($blogs as $blog)
                        
                    <div class="col">
                        <div class="post-item">
                            <div class="post-inner">
                                <div class="post-thumb">
                                    <a href="{{ route('blogs.show', $blog->slug) }}"><img src="{{ asset('storage/' . $blog->gambar) }}" alt="{!! $blog->judul !!}" title="{!! $blog->judul !!}" style="max-width: 390px; height: 250px; object-fit: cover;"></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{ route('blogs.show', $blog->slug) }}"><h4>{!! $blog->judul !!}</h4></a>
                                    <div class="meta-post">
                                        <ul class="lab-ul">
                                            <li><i class="icofont-calendar"></i>{!! $blog->created_at !!}</li>
                                        </ul>
                                    </div>
                                    <p>{!! substr($blog->deskripsi, 0, 50) !!}</p>
                                </div>
                                <div class="post-footer">
                                    <div class="pf-left">
                                        <a href="{{ route('blogs.show', $blog->slug) }}" class="lab-btn-text">Read more <i class="icofont-external-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div>
                    {!! $blogs->links() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- blog section ending here -->
@endsection