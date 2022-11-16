@extends('layout.master')
@section('content')
<!-- partial -->
<div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Portfolio Table</h4>
                  <div class="table-responsive">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="portfolio-tab" data-bs-toggle="tab" data-bs-target="#portfolio" type="button" role="tab" aria-controls="portfolio" aria-selected="true">Home</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Add</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab"><table class="table table-striped">
                        <div class="col-md-4">
                          <form action="{{ url()->current() }}" autocomplete="off" method="get">
                              <div class="input-group ">
                                  <input type="text" class="form-control" placeholder="Search" name="search">
                                  <button class=" btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                              </div>
                          </form>
                         </div>
                        <thead>
                          <tr>
                          <th>
                            <input type="checkbox" id="chkCheckAll" />
                          </th>
                            <th>
                              Gambar
                            </th>
                            <th>
                              Judul
                            </th>
                            <th>
                              Kategori
                            </th>
                            <th>
                              Deskripsi
                            </th>
                            <th>
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($portfolios as $portfolio)
                          <tr>
                          <td>
                            <input type="checkbox" name="ids" class="checkBoxClass" value="{{ $portfolio->id }}" />
                          </td>
                            <td>
                            <div style="width: 100px;">
                              <img src="{{ asset('storage/' . $portfolio->gambar) }}" alt="No Image" class="img-fluid mt-3">
                          </div>
                            </td>
                            <td>
                              {{ $portfolio->judul}}
                            </td>
                            <td>
                              {{ $portfolio->kategori}}
                            </td>
                            <td class="text-wrap">
                              {!! $portfolio->deskripsi !!}
                            </td>
                            <td>
                            <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST">
  
                            <a class="btn rounded-pill btn-warning" href="{{ route('portfolio.edit', $portfolio->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
  
                            <button type="submit" class="btn rounded-pill btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                          </form>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                      {!! $portfolios->links() !!}
                      <br>
                      <div class="pull-right">
                        <a href="#" class="btn btn-danger" id="deleteAllSelectedPortfolio" onclick="location.reload()">Delete Selected</a>
                    </div>

                    </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Form Portfolio</h4>
                                  <p class="card-description">
                                    Isi Form Portfolio
                                  </p>
                                  <form class="forms-sample">
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Cover</strong>
                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" name="gambar" id="image" onchange="previewImage()">
                                                </div>
                                            </div>
                                        </div>
                                        <strong>Portfolio (Pilih salah satu: Screenshot\Video\Links)</strong>
                                        <br>
                                        <br>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                              <strong>ScreenShot</strong>
                                              <img class="img-preview img-fluid mb-3 col-sm-5">
                                              <div class="input-group mb-3">
                                                  <input type="file" class="form-control"  name="screenshot" id="image" onchange="previewImage()">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputName1"><strong>Video (Contoh: https://www.youtube.com/)</strong></label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Contoh: https://www.youtube.com/" name="video" value="{{ old('video') }}">
                                      </div>
                                        <div class="form-group">
                                          <label for="exampleInputName1"><strong>Link (Contoh: https://www.portofolioku.com)</strong></label>
                                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Contoh: https://www.portofolioku.com" name="link" value="{{ old('link') }}">
                                        </div>
                                        <div class="form-group">
                                      <label for="exampleInputName1">Judul</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value="{{ old('judul') }}">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Kategori (Contoh: Website)</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Kategori" name="kategori" value="{{ old('kategori') }}">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Deskripsi</label>
                                      <textarea type="text" class="form-control" id="content" placeholder="Deskripsi" name="deskripsi">{{ old('deskripsi') }}"</textarea>
                                      <script>
                                        CKEDITOR.replace('content');
                                    </script>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                  </form>
                                </div>
                              </div>
                            </div>
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