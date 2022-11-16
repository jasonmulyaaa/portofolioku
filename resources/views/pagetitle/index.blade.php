@extends('layout.master')
@section('content')
<div class="content-wrapper bg-white">
    <div class="row">
      
      
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Page Title Table</h4>
            <div class="table-responsive">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Edit</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

          @foreach ($pagetitle as $pagetitle)
          <form action="{{ route('pagetitle.update', $pagetitle->id) }}" method="POST" enctype="multipart/form-data">
          
              @csrf
              @method('PUT')
              <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Form Page Title</h4>
                        <p class="card-description">
                          Isi Form Page Title
                        </p>
                        <form class="forms-sample">
                          <strong>CV</strong>
                          <br>
                          <br>
                        <div class="form-group">
                            <label for="exampleInputName1">Judul CV</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul CV" name="judul_cv" value="{{ $pagetitle->judul_cv}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Sub Judul CV</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Sub Judul CV" name="subjudul_cv" value="{{ $pagetitle->subjudul_cv}}">
                      </div>
                      <strong>Tutorial</strong>
                      <br>
                      <br>
                      <div class="form-group">
                        <label for="exampleInputName1">Judul Tutorial</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Tutorial" name="judul_tutorial" value="{{ $pagetitle->judul_tutorial}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Sub Judul Tutorial</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Sub Judul Tutorial" name="subjudul_tutorial" value="{{ $pagetitle->subjudul_tutorial}}">
                  </div>
                  <strong>Gallery</strong>
                  <br>
                  <br>
                  <div class="form-group">
                    <label for="exampleInputName1">Judul Gallery</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Gallery" name="judul_gallery" value="{{ $pagetitle->judul_gallery}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Sub Judul Gallery</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Sub Judul Gallery" name="subjudul_gallery" value="{{ $pagetitle->subjudul_gallery}}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Judul Blog</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Blog" name="judul_blog" value="{{ $pagetitle->judul_blog}}">
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Judul Kategori</label>
              <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Kategori" name="judul_kategori" value="{{ $pagetitle->judul_kategori}}">
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Sub Judul Kategori</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Sub Judul Kategori" name="subjudul_kategori" value="{{ $pagetitle->subjudul_kategori}}">
        </div>
        <div class="form-group">
          <label for="exampleInputName1">Kategori Tutorial</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Kategori Tutorial" name="kategori_tutorial" value="{{ $pagetitle->kategori_tutorial}}">
      </div>
                  <strong>Page</strong>
                  <br>
                  <br>
                  <div class="form-group">
                    <label for="exampleInputName1">Page Courses</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Page Courses" name="courses" value="{{ $pagetitle->courses}}">
                </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Page CV</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Page CV" name="cv" value="{{ $pagetitle->cv}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Page Gallery</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Page Gallery" name="gallery" value="{{ $pagetitle->gallery}}">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Page Contact</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Page Contact" name="contact" value="{{ $pagetitle->contact}}">
                    </div>
                    <strong>Contact</strong>
                    <br>
                    <br>
                    <div class="form-group">
                      <label for="exampleInputName1">Judul Contact</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Contact" name="judul_contact" value="{{ $pagetitle->judul_contact}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Sub Judul Contact</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Sub Judul Contact" name="subjudul_contact" value="{{ $pagetitle->subjudul_contact}}">
                </div>
                <strong>Form Contact</strong>
                <br>
                <br>
                <div class="form-group">
                  <label for="exampleInputName1">Judul Form</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Form" name="judul_form" value="{{ $pagetitle->judul_form}}">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Sub Judul Form</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Sub Judul Form" name="subjudul_form" value="{{ $pagetitle->subjudul_form}}">
            </div>
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
          </form>
          @endforeach
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          
            
     
      

    
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Halaman ini bersifat rahasia dan hanya boleh diakses oleh pihak yang berwajib</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2022.</span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
@endsection