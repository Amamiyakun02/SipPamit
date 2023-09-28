@extends('layout.admin_main')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Kelola User</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Kelola Admin</h6>
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

      @include('modals/modalTambahAdmin')

      <div class="container-fluid py-4">
        <!-- Table -->
        <div class="card">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Profil</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No HP</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($admin as $a)
                <tr>
                  <td class="align-middle text-center">{{ $loop->iteration }}</td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="{{ asset('storage/' . $a->profile_photo) }}" class="avatar avatar-sm me-3" />
                      </div>
                      
                  </td>
                  <td>
                    <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-xs">{{$a->name}}</h6>
                  </div>
                </div>
              </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$a->address}}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$a->contact_phone}}</p>
                  </td>
                  <td class="align-middle text-center">
                    <form action="/kelolaadmin/{{$a->id}}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-outline-primary" value="delete"><i class="material-icons opacity-10">delete</i></button>
                
                  </form>
                  <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="material-icons opacity-10">edit</i></button>
                  <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editPassword"><i class="material-icons opacity-10">key</i></button>
                  


                  </td>
                   
                  
                </tr>

                
              </tbody>
             @include('modals/modalEditAdmin')
             @include('modals/modalEditPasswordAdmin')
@endforeach
            </table>



            <div class="custom-pagination">
              <ul class="pagination justify-content-end">
                  @if ($admin->currentPage() > 1)
                  
                      <li class="page-item">
                          <a class="page-link" href="{{ $admin->previousPageUrl() }}">
                              <span class="material-icons">keyboard_arrow_left</span>
                              <span class="sr-only">Previous</span>
                          </a>
                      </li>
                   
                  @endif
      
                  @for ($i = 1; $i <= $admin->lastPage(); $i++)
                      <li class="page-item {{ $i == $admin->currentPage() ? 'active' : '' }}">
                          <a class="page-link" href="{{ $admin->url($i) }}">{{ $i }}</a>
                      </li>
                  @endfor
      
                  @if ($admin->hasMorePages())
                      <li class="page-item">
                          <a class="page-link" href="{{ $admin->nextPageUrl() }}">
                              <span class="material-icons">keyboard_arrow_right</span>
                              <span class="sr-only">Next</span>
                          </a>
                      </li>
                  @endif
          </div>
        </div>
        <!-- End Table -->
      </div>
    </main>
@endsection
  