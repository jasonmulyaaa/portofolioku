@extends('layout.master')
@section('content')

<form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="content-wrapper bg-white">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Kompetensi</h4>
                  <p class="card-description">
                    Isi Form Kompetensi
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <strong>Icon</strong>
                      <input type="hidden" name="oldImage" value="{{ $service->gambar }}">
                      @if ($service->gambar)
                          <img src="{{ asset('storage/' . $service->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                      @else
                          <img class="img-preview img-fluid mb-3">
                      @endif
                      <img class="img-preview img-fluid mb-3 col-sm-5">
                      <div class="input-group mb-3">
                          <input type="file" class="form-control" @error('image') is-invalid @enderror name="gambar" id="image" onchange="previewImage()" value="{{ asset('storage/' . $service->gambar) }}">
                          @error('image')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                  </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Kompetensi (Contoh: Designer)</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Kompetensi" name="judul" value="{{ $service->judul}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Deskripsi Singkat</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Deskripsi" name="deskripsi" value="{{ $service->deskripsi}}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a class="btn btn-light" href="{{ route('service.index') }}">Cancel</a>
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