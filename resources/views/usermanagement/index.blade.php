@extends('layout.master')
@section('content')
<!-- partial -->

<div class="content-wrapper bg-white">
          <div class="row">
            
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Management Table</h4>
                  <div class="table-responsive">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Add</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><table class="table table-striped">
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
                            Foto
                          </th>
                          <th>
                            NIS
                          </th>
                            <th>
                              Username
                            </th>
                            <th>
                              Nama
                            </th>
                            <th>
                              Role
                            </th>
                            <th>
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                          <tr>
                          <td>
                            <input type="checkbox" name="ids" class="checkBoxClass" value="{{ $user->id }}" />
                          </td>
                          <td>
                            <div style="width: 100px;">
                              <img src="{{ asset('storage/' . $user->foto) }}" alt="No Image" class="img-fluid mt-3" onerror="this.onerror=null; this.src='../../assets/images/faces/icon.png'">
                          </div>
                          </td>
                          <td>
                            {{ $user->nis}}
                          </td>
                            <td>
                              {{ $user->name}}
                            </td>
                            <td>
                              {{ $user->nama}}
                            </td>
                            <td>
                              {{ $user->role}}
                            </td>
                            <td>
                            <form action="{{ route('usermanagement.destroy', $user->id) }}" method="POST">
  
                            <a class="btn rounded-pill btn-warning" href="{{ route('usermanagement.edit', $user->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
  
                            <button type="submit" class="btn rounded-pill btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                          </form>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                      {!! $users->links() !!}
                      <br>
                      <div class="pull-right">
                        <a href="#" class="btn btn-danger" id="deleteAllSelectedUser" onclick="location.reload()">Delete Selected</a>
                    </div>

                    </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">@if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form action="{{ route('usermanagement.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">Form Akun Management</h4>
                                  <p class="card-description">
                                    Isi Form Akun Management
                                  </p>
                                  <div class="form-group">
                                    <strong>Foto</strong>
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" @error('image') is-invalid @enderror name="foto" id="image" onchange="previewImage()">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                  <form class="forms-sample">
                                    <div class="form-group">
                                      <label for="exampleInputName1">Username</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="name">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">NIS</label>
                                      <input type="number" class="form-control" id="exampleInputName1" placeholder="NIS" name="nis">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Nama</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Email</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Email" name="email">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Password</label>
                                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputName1">Role</label>
                                      <select class="form-control" name="role">
                                        <option value="User">User</option>
                                        <option value="PKL">PKL</option>
                                        <option value="Pengajar">Pengajar</option>
                                    </select>                                   
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