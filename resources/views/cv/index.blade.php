@extends('layout.home')
@section('content')
<?php
use App\Models\User;
?>
    <!-- Page Header section start here -->
    <div class="pageheader-section" style="background-image: url({{ asset('storage/'. $konfigurasi[0]->page_header) }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2 style="color: white">{!! $pagetitle[0]->cv !!}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/" style="color: rgb(211, 211, 211)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style="color: white">CV</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->
    <div class="course-section style-2 padding-tb section-bg-ash yellow-color-section" id="cv">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle" style="color: #3183f7">{!! $pagetitle[0]->subjudul_cv !!}</span>
                <h3 class="title">{!! $pagetitle[0]->judul_cv !!}</h3>
            </div>

            <div class="section-wrapper">
                <div class="course-slider p-2">
                    <div class="section-header text-center">
                        <h2 class="title">Pengajar</h2>
                    </div>
                    <div class="swiper-wrapper">
                        @foreach ($resume1 as $resume1)
                            @php
                            $pengajar = User::where('id', $resume1->user_id)->first();
                            @endphp
                            @if($pengajar->role == 'Pengajar')
                        <div class="swiper-slide">
                            <div class="instructor-item style-2">
                                <div class="instructor-inner">
                                    <div class="instructor-thumb">
                                        <a href="{{ route('cv.show_pengajar', $resume1->slug) }}" target="__blank"><img src="{{ asset('storage/' . $resume1->foto) }}" alt="{!! $resume1->nama !!}" title="{!! $resume1->nama !!}" style="width: 365px;"></a>
                                    </div>
                                    <div class="instructor-content">
                                        <a href="{{ route('cv.show_pengajar', $resume1->slug) }}" target="__blank"><b>{!! $resume1->nama !!}</b></a>
                                        <span class="d-block">{!! $resume1->pekerjaan !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="section-header text-center">
                    <h2 class="title">Mentor</h2>
                </div>
                <div class="instructor-bottom">
                <div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1" id="posts">
                    @foreach ($resume as $resume)
                    @php
                    $pelajar = User::where('id', $resume->user_id)->first();
                    @endphp
                    @if ($pelajar->role == 'PKL' || $pelajar->role == 'User')
                        
                    <div class="col">
                        <div class="course-item style-5">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <a href="{{ route('cv.show', $resume->slug) }}" target="__blank"><img src="{{ asset('storage/' . $resume->foto) }}" alt="{!! $resume->nama !!}" title="{!! $resume->nama !!}" style="width: 365px; height: 198px; object-fit: cover;"></a>
                                </div>
                                <div class="course-content">
                                    <a href="{{ route('cv.show', $resume->slug) }}" target="__blank"><b>@if( strlen($resume->nama) >= 30 ){!! substr($resume->nama, 0, 30) !!}... @else {!! $resume->nama !!} @endif</b></a>
                                    <span class="course-cate">@if(strlen($resume->pekerjaan) >= 15){!! substr($resume->pekerjaan, 0, 15) !!}... @else {!! $resume->pekerjaan !!} @endif</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <br> 
                </div>
                <br>
                <br>
                <div class="section-header text-center">
                    <a href="{{ route('cv.index') }}" class="lab-btn text-center" style="background: #3183f7;"><span>See More</span></a>
                </div>
            
            </div>
        </div>
    </div>
    
@endsection