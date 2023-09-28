<!-- Modal Tambah admin -->
<div class="modal fade" id="addGambarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
            <form action="/kelolagaleri/{{ $peternak->id }}/store" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label for="formFile" class="form-label">Masukkan Gambar</label>
                            <input class="form-control" type="file" id="formFile" name="gambar">
                        </div>
                    </div>
                    <div class="col-md-6" style="display: none">
                        <div class="input-group input-group-outline my-3">
                            <input type="text" class="form-control" name="user_id" value={{$peternak->id}}>
                        </div>
                    </div>
                </div>
                
                {{-- footer modal --}}
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-primary" value="saved">Save changes</button>
                </div>
                {{-- end footer modal --}}
            </form>
        </div>
     
    </div>
</div>
</div>
<!-- End Modal Tambah admin -->