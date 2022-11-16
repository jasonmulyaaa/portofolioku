@extends('layout.master')
@section('content')


<form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="content-wrapper bg-white">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form What I Do</h4>
                  <p class="card-description">
                    Isi Form What I Do
                  </p>
                  <form class="forms-sample">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gambar</strong>
                                <input type="hidden" name="oldImage" value="{{ $portfolio->gambar }}">
                                @if ($portfolio->gambar)
                                    <img src="{{ asset('storage/' . $portfolio->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3">
                                @endif
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('image') is-invalid @enderror name="gambar" id="image" onchange="previewImage()" value="{{ asset('storage/' . $portfolio->gambar) }}">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Judul</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value="{{ $portfolio->judul}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Kategori</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Kategori" name="kategori" value="{{ $portfolio->kategori}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Deskripsi</label>
                            <textarea type="text" class="form-control" id="content" placeholder="Deskripsi" name="deskripsi">{{ $portfolio->deskripsi}}</textarea>
                            <script>
                              CKEDITOR.replace('content');
                          </script>
                          </div>
                          
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a class="btn btn-light" href="{{ route('portfolio.index') }}">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
</form>

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