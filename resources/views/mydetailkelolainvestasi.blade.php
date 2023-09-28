
@extends('layout.admin_main')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Kelola Investasi</li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Detail Investasi</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Kelola Investasi</h6>
          </nav>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- Button trigger modal -->
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary btn-sm mb-0 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
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

      <!-- Modal Tambah Peternak -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Akun Peternak</h5>
              <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Nama Peternakan</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">No HP</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Alamat</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label for="formFile" class="form-label">Pilih Foto Profil</label>
                      <input class="form-control" type="file" id="formFile" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Pemilik</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn bg-gradient-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal Tambah Peternak -->
      <!-- Ini Detail Peternak -->
      <div class="container-fluid py-4">
        <div class="card card-frame">
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-12 col-sm-10">
                @foreach($invests as $invest)
                <h2 class="text-center">Profil Peternak</h2>
                <h4 class="text-center mb-3">Kelola Peternak untuk Lorem ipsum dolor sit.</h4>
                <div class="row">
                  <div class="col-lg-8 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">Nama Peternakan</p>
                        <h4 class="mb-0">{{$invest->farm->nama_peternakan}}</h4>
                      </div>
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">Alamat :</p>
                        <h4 class="mb-0">{{$invest->farm->user->address}}</h4>
                      </div>
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">Pemilik :</p>
                        <h4 class="mb-0">{{$invest->farm->user->name}}</h4>
                      </div>
                      <div class="text-start pt-1">
                        <p class="text-sm mb-0 text-capitalize">No HP :</p>
                        <h4 class="mb-0">{{$invest->farm->user->contact_phone}}</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-4 mb-4">
                    <div class="card z-index-2">
                      <div class="text-start pt-1">
                        <div class="img-circle text-center mb-3"><img img src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-2.jpg" alt="Image" class="shadow rounded-circle" width="150" height="150" /></div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End DEtail Peternak -->
      <!-- Tabel invest dan investor -->
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Tabel Barang</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Investor</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No HP</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Invest</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">1.</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">Elaina</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">08xxxxxxxxx</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">Rp. 35.000.000</span>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2">
                            <div class="my-auto">
                              <h6 class="mb-0 text-sm">1.</h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-sm font-weight-bold mb-0">Elaina</p>
                        </td>
                        <td>
                          <span class="text-xs font-weight-bold">08xxxxxxxxx</span>
                        </td>
                        <td class="align-middle text-center">
                          <div class="d-flex align-items-center justify-content-center">
                            <span class="me-2 text-xs font-weight-bold">Rp. 35.000.000</span>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--  tabel investornya -->
          <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Table Investasi</h6>
                  </div>
                </div>
                <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Investor</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No HP</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Invest</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex px-2">
                              <div class="my-auto">
                                <h6 class="mb-0 text-sm">1.</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="text-sm font-weight-bold mb-0">Elaina</p>
                          </td>
                          <td>
                            <span class="text-xs font-weight-bold">08xxxxxxxxx</span>
                          </td>
                          <td class="align-middle text-center">
                            <div class="d-flex align-items-center justify-content-center">
                              <span class="me-2 text-xs font-weight-bold">Rp. 35.000.000</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex px-2">
                              <div class="my-auto">
                                <h6 class="mb-0 text-sm">1.</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="text-sm font-weight-bold mb-0">Elaina</p>
                          </td>
                          <td>
                            <span class="text-xs font-weight-bold">08xxxxxxxxx</span>
                          </td>
                          <td class="align-middle text-center">
                            <div class="d-flex align-items-center justify-content-center">
                              <span class="me-2 text-xs font-weight-bold">Rp. 35.000.000</span>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End GALER y foto foto -->
    </main>
@endsection
