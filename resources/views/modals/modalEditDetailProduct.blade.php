

<!-- modal deskripsi -->
 <div
                class="modal fade"
                id="editdeskripsiModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="editdeskripsiModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editdeskripsiModalLabel">
                        Edit deskripsi
                      </h5>
                      <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="editdeskripsiForm">
                        <div class="mb-3">
                          <label for="perkenalan">Deskripsi</label>
                          <textarea
                            class="form-control"
                            id="perkenalanEdit"
                            name="perkenalanEdit"
                          ></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="img">Gambar</label>
                          <input
                            type="file"
                            class="form-control-file"
                            id="imgEdit"
                            name="imgEdit"
                          />
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                      >
                        Tutup
                      </button>
                      <button
                        type="button"
                        class="btn btn-primary"
                        id="simpanEditdeskripsi"
                      >
                        Simpan
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- end of modal deskripsi-->
              <!-- modal Spesifikasi -->
              <div
                class="modal fade"
                id="editSpesifikasiModal"
                tabindex="-1"
                role="dialog"
                aria-labelledby="editSpesifikasiModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="editSpesifikasiModalLabel">
                        Edit Spesifikasi
                      </h5>
                      <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="editSpesifikasiForm">
                        <div class="mb-3">
                          <label for="tentang">Spesifikasi</label>
                          <textarea
                            class="form-control"
                            id="spekEdit"
                            name="spekEdit"
                          ></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                      >
                        Tutup
                      </button>
                      <button
                        type="button"
                        class="btn btn-primary"
                        id="simpanEditSpesifikasi"
                      >
                        Simpan
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- end of modal Spesifikasi-->