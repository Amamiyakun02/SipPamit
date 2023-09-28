<!-- Modal Tambah admin -->
<div class="modal fade" id="listModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Akun admin</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            
            
                <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($galeri as $p)
                      <tr>
                        <td class="align-middle text-center">{{ $loop->iteration }}</td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="{{ asset('storage/' . $p->gambar) }}" class="avatar avatar-sm me-3" />
                            </div>
                          </div>

                        <td>
                            <form action="/kelolagaleri/{{$p->id}}/{{$p->user_id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary" value="delete">Delete</button>
                            </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                
                
            
        </div>
     
    </div>
</div>
</div>
<!-- End Modal Tambah admin -->