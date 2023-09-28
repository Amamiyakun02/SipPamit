<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
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
            </ol>
            <h6 class="font-weight-bolder mb-0">Kelola Investasi</h6>
          </nav>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- Button trigger modal 
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item d-flex align-items-center">
                Button trigger modal -->
            <!-- <button type="button" class="btn btn-outline-primary btn-sm mb-0 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button>
              </li>
            </ul>
             End Button Modal  -->
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control" />
            </div>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- 
      Modal Tambah Peternak 
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
                      <label class="form-label">Nama Admin</label>
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
      End Modal Tambah Peternak -->
      <div class="container-fluid py-4">
        <!-- Table -->
        <div class="card">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Peternakan</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pemilik</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($invests as $invest)
                <tr>
                  <td class="align-middle text-center">1.</td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3" />
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs">{{$invest->farm->nama_peternakan}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h6>{{$invest->funding_target}}</h6>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$invest->farm->user->name}}</p>
                  </td>
                  <td class="align-middle text-center">
                    <a href="{{ route('detailinvestasi', ['id' => $invest->id]) }}" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Edit user"> <i class="material-icons opacity-10">visibility</i> </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="javascript:;" tabindex="-1">
                    <span class="material-icons"> keyboard_arrow_left </span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="javascript:;">1</a></li>
                <li class="page-item active"><a class="page-link" href="javascript:;">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="javascript:;">
                    <span class="material-icons"> keyboard_arrow_right </span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- End Table -->
      </div>
    </main>
@endsection
