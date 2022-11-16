@extends('layout.master')
@section('content')
<div class="content-wrapper" style="background-color: white;">
    <div class="row">
      
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
<div class="col-md-4 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Total Sosial Media</h4>
      <div class="media">
        <i class="mdi mdi-compare icon-md text-info d-flex align-self-start me-3"></i>
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
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
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
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
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
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
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
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
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
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
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
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
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
        <i class="mdi mdi-clipboard-account icon-md text-info d-flex align-self-start me-3"></i>
        <div class="media-body">
          <h5 class="card-text"> <b>{!! $blog !!}</b> Blog</h5>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
@endsection