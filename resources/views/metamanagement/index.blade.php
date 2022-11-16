@extends('layout.master')
@section('content')
<!-- partial -->

<div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Meta Management Table</h4>
                  <div class="table-responsive">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
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
                    @foreach ($meta as $metaitem)
                    <form action="{{ route('metamanagement.update', $metaitem->id) }}" method="POST" enctype="multipart/form-data">
            
                @csrf
                @method('put')
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Form Meta Management</h4>
                                  <p class="card-description">
                                    Isi Form Meta Management
                                  </p>
                                  <form class="forms-sample">
                                    <div class="form-group">
                                      <label for="content">Meta Keywords</label>
                                      <br>
                                      <textarea id="content" name="keywords" rows="5" style="width: 100%;">{{ $metaitem->keywords }}</textarea>

                                    </div>
                                    <div class="form-group">
                                      <label for="content1">Meta Search Engine</label>
                                      <br>
                                      <textarea id="content1" name="search_engine" rows="5" style="width: 100%;">{{ $metaitem->search_engine }}</textarea>

                                    </div>

                                    <div class="form-group">
                                      <label for="content2">Meta Deskripsi</label>
                                      <textarea  id="content2" name="deskripsi" rows="5" style="width: 100%;">{{ $metaitem->deskripsi }}</textarea>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Meta Author</label>
                                      <input class="form-control" id="content3" name="author" value="{{ $metaitem->author }}">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Meta Website</label>
                                      <input class="form-control" id="exampleInputName1" name="website" value="{{ $metaitem->website }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                            @endforeach
                </form>

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
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. PT. PT PTan</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

@endsection