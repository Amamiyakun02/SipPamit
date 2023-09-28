
@extends('layout.admin_main')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Kelola Peternak</li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail Peternak</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Kelola Peternak</h6>
          </nav>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- Button trigger modal -->
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary btn-sm mb-0 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">edit</button>
              </li>
            </ul>
            <!-- End Button Modal -->
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control" />
            </div>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

<<<<<<< HEAD
      <!-- Modal Tambah Peternak -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Edit Akun Peternak</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/detailpeternak/{{$peternak -> id}}/update" method="POST" enctype="multipart/form-data">
                          @method('put') 
                          @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Nama Peternakan</label>
                                        <input type="text" class="form-control" name="nama_peternakan" value={{$peternak -> nama_peternakan}} >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">No HP</label>
                                        <input type="text" class="form-control" name="contact_phone" value={{$peternak -> contact_phone}}>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="address" value={{$peternak -> address}}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label for="formFile" class="form-label">Pilih Foto Profil</label>
                                        <input class="form-control" type="file" id="formFile" name="profile_photo" value={{$peternak -> profile_photo}}>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Pemilik</label>
                                        <input type="text" class="form-control" name="name" value={{$peternak -> name}}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Role</label>
                                        <input type="text" class="form-control" name="role" value={{$peternak -> role}} >
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">email</label>
                                    <input type="text" class="form-control" name="email" value={{$peternak -> email}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">username</label>
                                    <input type="text" class="form-control" name="username" value= {{$peternak -> username}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline my-3">
                                    <label class="form-label">password</label>
                                    <input type="text" class="form-control" name="password" value={{$peternak -> password}}>
                                </div>
                            </div>
                            <button type="submit" class="btn bg-gradient-primary" value="saved">Save changes</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
      <!-- End Modal Tambah Peternak -->
=======
      @include('modals/modalEditPeternak')
>>>>>>> f1b0b60494ab80a4ea3f2819a185b5dec0a800cf
      <!-- Ini Detail Peternak -->
      <div class="container-fluid py-4">
        <div class="card card-frame">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10">
                <h2 class="text-center">Profil Peternak</h2>
                <h4 class="text-center mb-3">{{$peternak -> descript}}</h4>
                <div class="row">
                  <div class="col-lg-8 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">Nama Peternakan</p>
                        <h4 class="mb-0">{{$peternak -> nama_peternakan}}</h4>
                      </div>
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">Alamat :</p>
                        <h4 class="mb-0">{{$peternak -> address}}</h4>
                      </div>
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">Pemilik :</p>
                        <h4 class="mb-0">{{$peternak -> name}}</h4>
                      </div>
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">No HP :</p>
                        <h4 class="mb-0">{{$peternak -> contact_phone}}</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="text-start pt-1">
                        <div class="img-circle text-center mb-3"><img img src="{{ asset('storage/' . $peternak->profile_photo) }}" alt="Image" class="shadow rounded-circle" width="150" height="150" /></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End DEtail Peternak -->
      <!-- Ini buat Galer ry -->
      <div class="container-fluid py-4">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <!-- Button trigger modal -->
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-primary btn-sm mb-0 me-3" data-bs-toggle="modal" data-bs-target="#addGambarModal">+</button>
              <button type="button" class="btn btn-outline-primary btn-sm mb-0 me-3" data-bs-toggle="modal" data-bs-target="#listModal">list</button>
          
            </li>
          </ul>
          <!-- End Button Modal -->
          @include('modals/tambahGaleri')
          @include('modals/listGaleri')
        </div>
        <div class="card card-frame">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10">
                <h2 class="text-center">Gallery</h2>
                <div class="row">
                  <div class="col-md-12 mx-auto">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                      </ol>
                      {{-- <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg" alt="First slide" />
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-2-min.jpg" alt="Second slide" />
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-3-min.jpg" alt="Third slide" />
                        </div> --}}
                        @foreach ($galeri as $gambar)
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('storage/' . $gambar->gambar) }}" alt="First slide" />
                          </div>
                        </div>
                        @endforeach
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
                  <!-- Opsional Mau pake Carusel atau enggk -->
                  <!-- Kalo make hapus aja yg di baris ini dibagian card background -->

                  <!-- <div class="card card-background">
                    <div
                      class="full-background"
                      style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80')"
                    ></div>
                    <div class="card-body pt-12">
                      <h4 class="text-white font-weight-normal">Search and Discovery</h4>
                      <p>Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.</p>
                    </div>
                  </div> -->
                  <!-- Ini dihapus gkpp -->
                </div>
              </div>
              <div class="container-fluid py-4">
                        <!-- Tabel Daftar Barang -->
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="text-white text-capitalize ps-3">
                      DAFTAR BARANG
                    </h6>
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary btn-sm btn-white mb-0 me-3" data-bs-toggle="modal" data-bs-target="#tambahbarang">+</button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          <!-- Modal Tambah Peternak -->
      <div class="modal fade" id="tambahbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Dagangan</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Nama Dagangan</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Jenis Dagangan</label>
                      <select class="form-select custom-select">
                        <option value="Daging">Daging</option>
                        <option value="Alat">Alat</option>
                        <option value="Obat">Obat</option>
                        <option value="Pupuk">Pupuk</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Stok</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Harga</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label for="formFile" class="form-label">Gambar</label>
                      <input class="form-control" type="file" id="formFile" />
                    </div>
                  </div>
                </div>
              </form>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn bg-gradient-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>
      {{-- <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1"> --}}
      <!-- End Modal Tambah Peternak -->
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  @section('content')
<div class="card-body px-0 pb-2">
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Barang</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Barang</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Ginjal Ayam</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $product->jenis_barang }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{ $product->stok }}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $product->harga }}</span>
                    </td>
                    <td class="align-middle text-secondary font-weight-bold text-xs">
                        <a href="{{ route('detailpeternak', $product->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Detail
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Obat Perangsang</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Obat</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">20pacs</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">Rp 76.000,00</span>
                        </td>
                        <td class="align-middle text-secondary font-weight-bold text-xs">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Detail
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                        <span class="page-link">&laquo;</span>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">&raquo;</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
      <!-- End of table barang -->
      <!-- table of investasi -->
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="text-white text-capitalize ps-3">
                      DAFTAR INVESTASI
                    </h6>
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary btn-sm btn-white mb-0 me-3" data-bs-toggle="modal" data-bs-target="#tambahinvestasi">+</button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          <!-- Modal Tambah Peternak -->
      <div class="modal fade" id="tambahinvestasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Investasi</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Nama Investasi</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Tenggat</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Target</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Pembagian Keuntungan</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </form>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn bg-gradient-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal Tambah Peternak -->
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Investasi</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Target</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pembagian Keuntungan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tenggat</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Renov Dinding</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Rp 2.000.000,00 </p>
                          <p class="text-xs text-secondary mb-0">dari Rp 12.000.000</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">2,5%</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">11/09/2001</span>
                        </td>
                        <td class="align-middle text-secondary font-weight-bold text-xs">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Detail
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">Pembangunan Blower</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">Rp 6.000.000,00</p>
                          <p class="text-xs text-secondary mb-0">dari Rp 35.000.000</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-success">3,4%</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">12/ 12/ 2023</span>
                        </td>
                        <td class="align-middle text-secondary font-weight-bold text-xs">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Detail
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-end">
                      <li class="page-item disabled">
                        <span class="page-link">&laquo;</span>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">&raquo;</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>
      
      <!-- End of table investasi -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End GALER y foto foto -->
    </main>
@endsection