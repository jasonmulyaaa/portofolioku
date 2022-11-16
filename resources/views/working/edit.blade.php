@extends('layout.master')
@section('content')

<form action="{{ route('working.update', $working->id) }}" method="POST" enctype="multipart/form-data">
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
                  <h4 class="card-title">Form Pengalaman & Sertifikat</h4>
                  <p class="card-description">
                    Isi Form Pengalaman & Sertifikat
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Perusahaan\Sertifikat\Kegiatan</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama Perusahaan\Sertifikat\Kegiatan" name="judul" value="{{ $working->judul}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tahun Awal</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="Tahun Awal" name="tahun_awal" value="{{ $working->tahun_awal}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Tahun Akhir</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="Tahun Akhir" name="tahun_akhir" value="{{ $working->tahun_akhir}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Deskripsi</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Deskripsi" name="deskripsi" value="{{ $working->deskripsi}}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a class="btn btn-light" href="{{ route('working.index') }}">Cancel</a>
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