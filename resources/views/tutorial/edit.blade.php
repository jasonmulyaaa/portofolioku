@extends('layout.master')
@section('content')

{{-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
<form action="{{ route('tutorial.update', $tutorial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
        <div class="content-wrapper bg-white">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Tutorial</h4>
                  <p class="card-description">
                    Isi Form Tutorial
                  </p>
                  <form class="forms-sample">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gambar</strong>
                                <input type="hidden" name="oldImage" value="{{ $tutorial->gambar }}">
                                @if ($tutorial->gambar)
                                    <img src="{{ asset('storage/' . $tutorial->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3">
                                @endif
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('image') is-invalid @enderror name="gambar" id="image" onchange="previewImage()" value="{{ asset('storage/' . $tutorial->gambar) }}">
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
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value="{{ $tutorial->judul}}">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Kategori</label>
                            <select class="form-control" name="kategori" id="kategori">
                              @foreach($kategoritutorial as $kategoritutorial)
                              <option value="{{$kategoritutorial->id}}" @if ($tutorial->kategori == $kategoritutorial->id) selected @endif>{{$kategoritutorial->kategori}}</option>
                              @endforeach
                          </select>                                   
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Sub Kategori</label>
                        <select class="form-control" name="sub_kategori" id="sub_kategori">
                          @foreach($subkategoritutorial as $subkategoritutorial)
                              <option value="{{$subkategoritutorial->id}}" @if ($tutorial->sub_kategori == $subkategoritutorial->id) selected @endif>{{$subkategoritutorial->kategori}}</option>
                              @endforeach
                      </select>                                   
                  </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Keywords</label>
                        <textarea class="form-control" id="content1" name="keywords">{{ $tutorial->keywords }}</textarea>
                        <script>
                            CKEDITOR.replace('content1');
                        </script>
                      </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Deskripsi</label>
                            <textarea class="form-control" id="content" name="deskripsi">{{ $tutorial->deskripsi }}</textarea>
                            <script>
                                CKEDITOR.replace('content');
                            </script>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputName1">Tampilkan</label>
                            <br>
                            <input type="radio" id="ya" name="status" value="Aktif" @if($tutorial->status == 'Aktif')checked @endif>
                             <label for="ya">Ya</label><br>
                             <input type="radio" id="tidak" name="status" value="NonAktif" @if($tutorial->status == 'NonAktif')checked @endif>
                             <label for="tidak">Tidak</label><br>                                
                      </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a class="btn btn-light" href="{{ route('tutorial.index') }}">Cancel</a>
                  </form>
                </div>
              </div>
            </div>
</form>
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
{{-- <script type='text/javascript'>
  $(document).ready(function(){

    $('#kategori').change(function(){
       // Department id
       var id = $(this).val();

       // Empty the dropdown
       $('#sub_kategori').find('option').remove();

       // AJAX request 
       $.ajax({
         url: 'getSubKategori/'+id,
         type: 'get',
         dataType: 'json',
         success: function(response){
              var len = 0;
              if(response['data'] != null){
                  len = response['data'].length;
              }

              if(len > 0){
                  // Read data and create <option >
                  for(var i=0; i<len; i++){
                      var id = response['data'][i].id;
                      var kategori = response['data'][i].kategori;
                      var option = "<option value='"+id+"'>"+kategori+"</option>"; 
                      $("#sub_kategori").append(option); 
                  }
              }
         }
      });
    });
  });
</script> --}}

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