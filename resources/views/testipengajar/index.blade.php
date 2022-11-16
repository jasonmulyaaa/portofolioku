@extends('layout.master')
@section('content')
<!-- partial -->

<?php
use App\Models\User;
?>
<div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Contact Form Table</h4>
                  <div class="table-responsive">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="wid-tab" data-bs-toggle="tab" data-bs-target="#wid" type="button" role="tab" aria-controls="wid" aria-selected="true">Table</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="wid" role="tabpanel" aria-labelledby="wid-tab"><table class="table table-striped">
                        <div class="col-md-4">
                          <form action="{{ url()->current() }}" autocomplete="off" method="get">
                              <div class="input-group ">
                                  <input type="text" class="form-control" placeholder="Search Nama Pengrekrut atau Instansi" name="search">
                                  <button class=" btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                              </div>
                          </form>
                         </div>
                        <thead>
                          <tr>
                          <th>
                            Foto
                          </th>
                          <th>
                            Nama Pengajar
                          </th>
                            <th>
                              Pekerjaan
                            </th>
                            <th>
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($resumes as $resume)
                        @php
                            $pengajar = User::where('id', $resume->user_id)->first();
                        @endphp
                        @if ($pengajar->role == 'Pengajar')
                          <tr>
                            <td>
                              <div style="width: 100px;">
                                <img src="{{ asset('storage/' . $resume->foto) }}" alt="No Image" class="img-fluid mt-3">
                            </div>
                            </td>
                            <td>
                              {{ $resume->nama}}
                            </td>
                            <td>
                              {{ $resume->pekerjaan}}
                            </td>
                            <td>
                            <a class="btn rounded-pill btn-warning" href="{{ route('testipengajar.show', $resume->id)}}">Details</a>
                            </td>
                          </tr>
                        </tbody>
                        @endif
                        @endforeach
                      </table>
                      <br>

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