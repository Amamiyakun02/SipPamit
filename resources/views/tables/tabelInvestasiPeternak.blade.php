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
   @include('../modals/investasiPeternak')
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Investasi</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Target</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pembagian Keuntungan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tenggat</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($investasi as $invest)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$invest -> deskripsi}}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Rp {{$invest -> funding_collected}} </p>
                      <p class="text-xs text-secondary mb-0">dari Rp {{$invest -> funding_target}}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">{{$invest -> profit_sharing}}%</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$invest -> created_at}}</span>
                    </td>
                    <td class="align-middle text-secondary font-weight-bold text-xs">
                      <form action="/kelolainvestasi/{{$invest->user_id}}/{{$invest->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary" value="delete">Delete</button>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editPassword"><i class="material-icons opacity-10">key</i></button>
      
                    </form>
                    </td>
                    
                  </tr>
                 @endforeach
                </tbody>
              </table>
               <div class="custom-pagination">
                <ul class="pagination justify-content-end">
                    @if ($investasi->currentPage() > 1)
                    
                        <li class="page-item">
                            <a class="page-link" href="{{ $investasi->previousPageUrl() }}">
                                <span class="material-icons">keyboard_arrow_left</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                     
                    @endif
        
                    @for ($i = 1; $i <= $investasi->lastPage(); $i++)
                        <li class="page-item {{ $i == $investasi->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $investasi->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
        
                    @if ($investasi->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $investasi->nextPageUrl() }}">
                                <span class="material-icons">keyboard_arrow_right</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </div> 
            
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  
  <!-- End of table investasi -->