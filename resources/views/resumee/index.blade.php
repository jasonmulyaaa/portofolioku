@extends('layout.master')
@section('content')

<div class="content-wrapper bg-white">
    <div class="row">

      @if (empty($resume))
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Resume</h4>
            <div class="table-responsive">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Edit</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

          <form action="{{ route('resumee.store') }}" method="POST" enctype="multipart/form-data">
          
              @csrf
              {{-- @method('PUT') --}}
              <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Form Resume</h4>
                        <p class="card-description">
                          Isi Form Resume
                        </p>
                        <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama" value="{{ old('nama') }}">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>Foto</strong>
                            {{-- <input type="hidden" name="oldImage1" value="{{ $konfigurasi->favicon }}"> --}}
                            {{-- @if ($konfigurasi->favicon) --}}
                                {{-- <img src="{{ asset('storage/' . $konfigurasi->favicon) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block"> --}}
                            {{-- @else --}}
                                <img class="img-preview img-fluid mb-3">
                            {{-- @endif --}}
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" @error('image') is-invalid @enderror name="foto" id="image" onchange="previewImage()" >
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>File PDF (Max: 2MB)</strong>
                            {{-- <input type="hidden" name="oldImage1" value="{{ $konfigurasi->favicon }}"> --}}
                            {{-- @if ($konfigurasi->favicon) --}}
                                {{-- <img src="{{ asset('storage/' . $konfigurasi->favicon) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block"> --}}
                            {{-- @else --}}
                                <img class="img-preview img-fluid mb-3">
                            {{-- @endif --}}
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" @error('image') is-invalid @enderror name="pdf" id="image" onchange="previewImage()" >
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group">
                          <label for="exampleInputName1">Link Google Drive PDF</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Contoh: https://drive.google.com/file/d/167Jao_fBDleQkFqVe1UAkqaRUGrgAneZ/view?usp=sharing" name="pdf">
                      </div> --}}
                      <div class="form-group">
                          <label for="exampleInputName1">Tanggal Lahir</label>
                          <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Pekerjaan</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Email</label>
                          <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="email" value="{{ old('email') }}">
                      </div>
                      {{-- <div class="form-group">
                          <label for="exampleInputName1">Nama Sosial Media</label>
                          <input type="email" class="form-control" id="exampleInputName1" placeholder="Contoh: Twitter" name="social_media">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Link Sosial Media</label>
                          <input type="email" class="form-control" id="exampleInputName1" placeholder="Contoh: https://instagram.com" name="social_media">
                      </div>
                      <span class="addsocialmedia btn btn-primary">Tambah Social Media</span>

                      <div class="customer"></div> --}}
                      
                          <div class="form-group">
                            <label for="exampleInputName1">About Me</label>
                            <textarea type="text" class="form-control" id="content" placeholder="About Me" name="about_me">{{ old('about_me') }}</textarea>
                              <script>
                                CKEDITOR.replace('content');
                            </script>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat" value="{{ old('alamat') }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">No Telp (Contoh: 6282188905567)</label>
                          <input type="number" class="form-control" id="exampleInputName1" placeholder="+62123456789" name="no_telp" value="{{ old('no_telp') }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Contact Map</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Contact Map" name="contact_map" value="{{ old('contact_map') }}">
                    </div>
{{-- 
                          <div class="form-group">
                            <label for="exampleInputName1">Judul Service</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Service" name="service">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Deskripsi Service</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Deskripsi Service" name="service">
                      </div>

                      <span class="addservice btn btn-primary">Tambah Service</span>

                      <div class="customer"></div> --}}
                      <input type="hidden" name="views" value="0">
                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
          </form>
          {{-- @endforeach --}}
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      @else
      
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Resume</h4>
            <div class="table-responsive">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Edit</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
          <form action="{{ route('resumee.update', $resume->id) }}" method="POST" enctype="multipart/form-data">
          
              @csrf
              @method('PUT')
              <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Form Resume</h4>
                        <p class="card-description">
                          Isi Form Resume
                        </p>
                        <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama" value="{{ $resume->nama }}">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>Foto</strong>
                            <input type="hidden" name="oldImage1" value="{{ $resume->foto }}">
                            @if ($resume->foto)
                                <img src="{{ asset('storage/' . $resume->foto) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3">
                            @endif
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" @error('image') is-invalid @enderror name="foto" id="image" onchange="previewImage()" >
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>File PDF (Max: 2MB)</strong>
                            <input type="hidden" name="oldImage2" value="{{ $resume->pdf }}">
                            @if ($resume->pdf)
                                <img src="{{ asset('storage/' . $resume->pdf) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                                <img class="img-preview img-fluid mb-3">
                            @endif
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" @error('image') is-invalid @enderror name="pdf" id="image" onchange="previewImage()" >
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        </div>
                        {{-- <div class="form-group">
                          <label for="exampleInputName1">Link Google Drive PDF</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Link Google Drive PDF" name="pdf" value="{{ $resume->pdf }}">
                      </div> --}}
                      <div class="form-group">
                          <label for="exampleInputName1">Tanggal Lahir</label>
                          <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ $resume->tanggal_lahir }}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Pekerjaan</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Pekerjaan" name="pekerjaan" value="{{ $resume->pekerjaan }}">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Email</label>
                          <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="email" value="{{ $resume->email }}">
                      </div>
                      {{-- <div class="form-group">
                          <label for="exampleInputName1">Nama Sosial Media</label>
                          <input type="email" class="form-control" id="exampleInputName1" placeholder="Contoh: Twitter" name="social_media">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputName1">Link Sosial Media</label>
                          <input type="email" class="form-control" id="exampleInputName1" placeholder="Contoh: https://instagram.com" name="social_media">
                      </div>
                      <span class="addsocialmedia btn btn-primary">Tambah Social Media</span>

                      <div class="customer"></div> --}}
                      
                          <div class="form-group">
                            <label for="exampleInputName1">About Me</label>
                            <textarea type="text" class="form-control" id="content" placeholder="About Me" name="about_me">{{ $resume->about_me }}</textarea>
                              <script>
                                CKEDITOR.replace('content');
                            </script>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat" value="{{ $resume->alamat }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">No Telp (Contoh: 6282188905567)</label>
                          <input type="number" class="form-control" id="exampleInputName1" placeholder="+62123456789" name="no_telp" value="{{ $resume->no_telp }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Contact Map</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Contact Map" name="contact_map" value="{{ $resume->contact_map }}">
                    </div>
{{-- 
                          <div class="form-group">
                            <label for="exampleInputName1">Judul Service</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Service" name="service">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Deskripsi Service</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Deskripsi Service" name="service">
                      </div>

                      <span class="addservice btn btn-primary">Tambah Service</span>

                      <div class="customer"></div> --}}

                          <button type="submit" class="btn btn-primary me-2">Submit</button>
                      {{-- <a href="{{ route('resume.show', $resume->slug) }}" class="btn btn-success">Show</a> --}}

                        </form>
                      </div>
                    </div>
                  </div>
          </form>
          {{-- @endforeach --}}
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
      

      {{-- <script type="text/javascript">
      $('.addsocialmedia').on('click', function(){
        addsocialmedia();
      });
      var appendQueue = 0;
      function addsocialmedia(){
        var customer = '<div class="form-group "><label for="exampleInputName1">Nama Sosial Media</label><input type="email" class="form-control" id="exampleInputName1" placeholder="Contoh: Twitter" name="social_media"></div><div class="form-group"><label for="exampleInputName1">Link Sosial Media</label><input type="email" class="form-control" id="exampleInputName1" placeholder="Contoh: https://instagram.com" name="social_media"></div><a class="remove btn btn-danger" href="#" >Hapus</a>';
        $('.customer').append(`<div class="form-group appendQueue${appendQueue}">
            <label for="exampleInputName1">Nama Sosial Media</label>
            <input type="email" class="form-control" id="exampleInputName1" placeholder="Contoh: Twitter" name="ign[]">
          </div>
          <div class="form-group appendQueue${appendQueue}">
            <label for="exampleInputName1">Link Sosial Media</label>
            <input type="email" class="form-control" id="exampleInputName1" placeholder="Contoh: https://instagram.com" name="social_media[]">
          </div>
        <span class="remove btn btn-danger appendQueue${appendQueue}" data-id="${appendQueue}">Hapus</span>`);
        appendQueue += 1
      };

      $(document).on('click', '.remove', function(){
        var id = $(this).data('id')
        $(`.appendQueue${id}`).remove();
      });
      </script> --}}

            <script type="text/javascript">
              $('.addservice').on('click', function(){
                addservice();
              });
              var appendQueue1 = 0;
              function addservice(){
                var customer = '<div class="col-xs-12 col-sm-12 col-md-12"><div class="form-group "><strong>Gambar Service</strong>{{-- <input type="hidden" name="oldImage1" value="{{ $konfigurasi->favicon }}"> --}}{{-- @if ($konfigurasi->favicon) --}}{{-- <img src="{{ asset('storage/' . $konfigurasi->favicon) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block"> --}}{{-- @else --}}<img class="img-preview img-fluid mb-3">{{-- @endif --}}<img class="img-preview img-fluid mb-3 col-sm-5"><div class="input-group mb-3"><input type="file" class="form-control" @error('image') is-invalid @enderror name="service" id="image" onchange="previewImage()" >@error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror</div></div></div><div class="form-group"><label for="exampleInputName1">Judul Service</label><input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Service" name="service"></div><div class="form-group"><label for="exampleInputName1">Deskripsi Service</label><input type="text" class="form-control" id="exampleInputName1" placeholder="Deskripsi Service" name="service"></div>`)';
                $('.customer').append(`<div class="col-xs-12 col-sm-12 col-md-12"><div class="form-group appendQueue${appendQueue}"><strong>Gambar Service</strong>{{-- <input type="hidden" name="oldImage1" value="{{ $konfigurasi->favicon }}"> --}}{{-- @if ($konfigurasi->favicon) --}}{{-- <img src="{{ asset('storage/' . $konfigurasi->favicon) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block"> --}}{{-- @else --}}<img class="img-preview img-fluid mb-3">{{-- @endif --}}<img class="img-preview img-fluid mb-3 col-sm-5"><div class="input-group mb-3"><input type="file" class="form-control" @error('image') is-invalid @enderror name="service" id="image" onchange="previewImage()" >@error('image')<div class="invalid-feedback">{{ $message }}</div>@enderror</div></div></div><div class="form-group appendQueue${appendQueue}"><label for="exampleInputName1">Judul Service</label><input type="text" class="form-control" id="exampleInputName1" placeholder="Judul Service" name="service"></div><div class="form-group appendQueue${appendQueue}"><label for="exampleInputName1">Deskripsi Service</label><input type="text" class="form-control" id="exampleInputName1" placeholder="Deskripsi Service" name="service"></div><span class="remove btn btn-danger">Hapus</span>
`);
                appendQueue += 1
              };
              $(document).on('click', '.remove', function(){
                var id = $(this).data('id')
                $(`.appendQueue${id}`).remove();
              });
              </script>
     
      

    
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