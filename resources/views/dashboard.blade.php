@extends('layout.master')
@section('content')
<?php
use App\Models\Tutorial;
$i = 0;
?>
<div class="content-wrapper" style="background-color: white;">
    <div class="row">
@if (auth()->user()->role == 'superadmin')
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Visit</h4>
      <div class="media">
        <i class="mdi mdi-compare icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $visittotal }} Visitor</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Today Visitor</h4>
      <div class="media">
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $visittoday }} Visitors</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Uniqe Visitor</h4>
      <div class="media">
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $visituniqe }} Visitors</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total CV</h4>
      <div class="media">
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text">{{ $totalcv }} CV</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">CV Table</h4>
      <div class="col-md-4">
        <form action="{{ url()->current() }}" autocomplete="off" method="get">
            <div class="input-group ">
                <input type="text" class="form-control" placeholder="Cari Nama" name="search">
                <button class=" btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
            </div>
        </form>
       </div>
<table class="table table-striped">
  <thead>
    <tr>
    <th>
      No.
    </th>
    <th>
      Gambar
    </th>
    <th>
      Nama Pengguna CV
    </th>
    <th>
      Pekerjaan
    </th>
      <th>
        Total Kunjungan
      </th>
      <th>
        Total Blog
      </th>
    </tr>
  </thead>
  <tbody>
  @foreach ($resumes as $resume)
    <tr>
      <td>
        {!! ++$i !!}
      </td>
      <td>
        <div style="width: 100px;">
          <img src="{{ asset('storage/' . $resume->foto) }}" alt="No Image" class="img-fluid mt-3">
      </div>
      </td>
      <td>
        {!! $resume->nama !!}
      </td>
      <td>
        {!! $resume->pekerjaan !!}
      </td>
      <td>
        {!! $resume->views !!}x
      </td>
      <td>
        @php
            $totalblog = Tutorial::where('user_id', $resume->user_id)->count();
        @endphp
        {!! $totalblog !!}x
      </td>
      <td>
      {{-- <form action="{{ route('contactform.destroy', $contactform->id) }}" method="POST">
        @csrf
      @method('DELETE')

      <a class="btn rounded-pill btn-warning" href="{{ route('contactform.show', $contactform->id)}}">Details</a>
      <button type="submit" class="btn rounded-pill btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
    </form> --}}
      </td>
    </tr>
  </tbody>
  @endforeach
</table>
<br>
{!! $resumes->links() !!}
  </div>
</div>
</div>
@elseif (auth()->user()->role == 'PKL')
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Tutorials</h4>
      <div class="media">
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text"> <b>{!! $tutorial !!}</b> Tutorials</h5>
        </div>
      </div>
    </div>
  </div>
</div>
  </div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Sosial Media</h4>
  <div class="media">
    <i class="mdi mdi-share-variant icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $sosial !!}</b> Sosial Media</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Service</h4>
  <div class="media">
    <i class="mdi mdi-wrench icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $service !!}</b> Service</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Skill</h4>
  <div class="media">
    <i class="mdi mdi-worker icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $skill !!}</b> Skill</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Working History</h4>
  <div class="media">
    <i class="mdi mdi-briefcase icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $working !!}</b> Working History</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Education History</h4>
  <div class="media">
    <i class="mdi mdi-school icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $education !!}</b> Education History</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Clients</h4>
  <div class="media">
    <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $client !!}</b> Clients</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Testimonial</h4>
  <div class="media">
    <i class="mdi mdi-wechat icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $testimonial !!}</b> Testimonial</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Portfolio</h4>
  <div class="media">
    <i class="mdi mdi-library-books icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $portfolio !!}</b> Portfolio</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Blog</h4>
  <div class="media">
    <i class="mdi mdi-book icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $blog !!}</b> Blog</h5>
    </div>
  </div>
</div>
</div>
@elseif (auth()->user()->role == 'User' || auth()->user()->role == 'Pengajar')
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Sosial Media</h4>
  <div class="media">
    <i class="mdi mdi-share-variant icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $sosial !!}</b> Sosial Media</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Service</h4>
  <div class="media">
    <i class="mdi mdi-wrench icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $service !!}</b> Service</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Skill</h4>
  <div class="media">
    <i class="mdi mdi-worker icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $skill !!}</b> Skill</h5>
    </div>
  </div>
</div>
</div>
</div>
<div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Working History</h4>
  <div class="media">
    <i class="mdi mdi-briefcase icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $working !!}</b> Working History</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Education History</h4>
  <div class="media">
    <i class="mdi mdi-school icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $education !!}</b> Education History</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Clients</h4>
  <div class="media">
    <i class="mdi mdi-lan icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $client !!}</b> Clients</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Testimonial</h4>
  <div class="media">
    <i class="mdi mdi-wechat icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $testimonial !!}</b> Testimonial</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Portfolio</h4>
  <div class="media">
    <i class="mdi mdi-library-books icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $portfolio !!}</b> Portfolio</h5>
    </div>
  </div>
</div>
</div>
</div><div class="col-md-4 grid-margin stretch-card">
<div class="card">
<div class="card-body">
  <h4 class="card-title">Total Blog</h4>
  <div class="media">
    <i class="mdi mdi-book icon-md text-info d-flex align-self-start me-3"></i>
    <div class="media-body">
      <h5 class="card-text"> <b>{!! $blog !!}</b> Blog</h5>
    </div>
  </div>
</div>
</div>
@endif

</div>
</div>
@endsection