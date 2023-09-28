

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
                        {{-- mulai editingnya --}}
                        <form id="perkenalanEdit" method="POST" action="{{ url('edit', ['id' => $product->id]) }}">
                        @csrf
                        @method('PUT') <!-- Untuk metode PUT -->
                        <div class="mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="perkenalanEdit" name="deskripsi">{{ old('deskripsi', $product->deskripsi) }}</textarea>
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
                        <form id="editSpesifikasiForm" method="POST" action="{{ url('edit', ['id' => $product->id]) }}">
                            @csrf
                            @method('PUT') <!-- Untuk metode PUT -->
                            <div class="mb-3">
                                <label for="spesifikasi">spesifikasi</label>
                                <textarea class="form-control" id="spekEdit" name="spesifikasi">{{ old('spesifikasi', $product->spesifikasi) }}</textarea>
                            </div>
                      
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
            </form>
              </div>

              <!-- end of modal Spesifikasi-->