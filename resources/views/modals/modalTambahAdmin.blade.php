<!-- Modal Tambah admin -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
            <form action="kelolaadmin/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">No HP</label>
                            <input type="text" class="form-control" name="contact_phone"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="address"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                            <label for="formFile" class="form-label">Pilih Foto Profil</label>
                            <input class="form-control" type="file" id="formFile" name="profile_photo"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="input-group input-group-outline my-3" style="display: none">
                            <label class="form-label">Role</label>
                            <input type="text" class="form-control" name="role" value="admin"/>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">email</label>
                        <input type="text" class="form-control" name="email"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">username</label>
                        <input type="text" class="form-control" name="username"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">password</label>
                        <input type="text" class="form-control" name="password"/>
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