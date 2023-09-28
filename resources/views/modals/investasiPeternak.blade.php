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
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Nama Investasi</label>
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Tenggat</label>
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Target</label>
                      <input type="text" class="form-control" name="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Pembagian Keuntungan</label>
                      <input type="text" class="form-control" name="profit_sharing">
                    </div>
                  </div>
                  <div class="col-md-6" style="display: none">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">user id</label>
                      <input type="text" class="form-control" name="user_id" value={{$peternak -> id}}>
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