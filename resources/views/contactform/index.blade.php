@extends('layout.master')
@section('content')
<!-- partial -->

<?php
use App\Models\Resume;
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
                            <input type="checkbox" id="chkCheckAll" />
                          </th>
                          <th>
                            Nama Pengguna CV
                          </th>
                            <th>
                              Nama Pengrekrut
                            </th>
                            <th>
                              Instansi
                            </th>
                            <th>
                              Jabatan
                            </th>
                            <th>
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($contactforms as $contactform)
                        @php
                            $resume = Resume::where('user_id', $contactform->user_id)->first();
                        @endphp
                          <tr>
                            <td>
                              <input type="checkbox" name="ids" class="checkBoxClass" value="{{ $contactform->id }}" />
                            </td>
                            <td>
                              {{ $resume->nama}}
                            </td>
                            <td>
                              {{ $contactform->nama}}
                            </td>
                            <td>
                              {{ $contactform->instansi}}
                            </td>
                            <td>
                              {{ $contactform->jabatan}}
                            </td>
                            <td>
                            <form action="{{ route('contactform.destroy', $contactform->id) }}" method="POST">
                              @csrf
                            @method('DELETE')

                            <a class="btn rounded-pill btn-warning" href="{{ route('contactform.show', $contactform->id)}}">Details</a>
                            <button type="submit" class="btn rounded-pill btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                          </form>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                      {!! $contactforms->links() !!}
                      <br>
                      <div class="pull-right">
                        <a href="#" class="btn btn-danger" id="deleteAllSelectedContact" onclick="location.reload()">Delete Selected</a>
                    </div>

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