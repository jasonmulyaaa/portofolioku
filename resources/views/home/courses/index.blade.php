@extends('layout.home')
@section('content')

    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url({{ asset('storage/'. $konfigurasi[0]->page_header) }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white">{!! $pagetitle[0]->courses !!}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">Course Page</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- course section start here -->
    <div class="course-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                    @foreach ($courses as $courses) 
                    <div class="col">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="{{ asset('storage/' . $courses->gambar) }}" alt="{!! $courses->judul !!}" title="{!! $courses->judul !!}">
                                </div>
                                <div class="course-content">
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">{!! $courses->kategori !!}</a>
                                        </div>
                                    </div>
                                    <a href="{{ route('courses.show', $courses->slug) }}"><h5>{!! $courses->judul !!}</h5></a>
                                    <div class="course-details">
                                        <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                    </div>
                                    <div class="course-footer">
                                        <div class="course-btn">
                                            <a href="{{ route('courses.show', $courses->slug) }}" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <ul class="default-pagination lab-ul">
                    <li>
                        <a href="#"><i class="icofont-rounded-left"></i></a>
                    </li>
                    <li>
                        <a href="#">01</a>
                    </li>
                    <li>
                        <a href="#" class="active">02</a>
                    </li>
                    <li>
                        <a href="#">03</a>
                    </li>
                    <li>
                        <a href="#"><i class="icofont-rounded-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection    