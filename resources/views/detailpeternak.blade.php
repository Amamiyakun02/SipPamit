<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Peternak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <style>
      section {
        padding-top: 30px;
        padding-bottom: 30px;
      }
      .userprofil {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
      }
      .icon-category-sm i {
        font-size: 40px;
      }
    </style>
  </head>
  <body>
    <section class="profil_peternak">
        <div class="container border">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10">
                    <h2 class="text-center">Profil Peternak</h2>
                    <h4 class="text-center mb-3">Kelola Peternak untuk Lorem ipsum dolor sit.</h4>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <!-- {{-- Isi Form --}} -->
                            <form name="isianProfil" action="#" method="POST">
                                <div class="mb-3">
                                  <label for="username" class="form-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" placeholder="nama pengguna">
                                </div>
                                <div class="mb-3">
                                  <label for="nama" class="form-label">Nama</label>
                                  <input type="text" class="form-control" id="nama" name="nama" placeholder="isi nama lengkap anda">
                                </div>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="masukan email anda">
                                </div>
                                <div class="mb-3">
                                  <label for="nohp" class="form-label">Nomor Telepon</label>
                                  <input type="text" class="form-control" id="nohp" name="nohp" placeholder="masukan nomor telepon aktif anda">
                                </div>
                                <div class="mb-3">
                                  <label for="namatoko" class="form-label">Nama Toko</label>
                                  <input type="text" class="form-control" id="namatoko" name="namatoko" placeholder="masukan nama toko anda">
                                </div>
                                <div class="mb-3">
                                  <label for="alamat" class="form-label">Alamat</label>
                                  <textarea class="form-control" id="alamat" name="alamat" placeholder="masukan alamat lengkap anda" rows="3"></textarea>
                                  </div>
                                <fieldset class="mb-3">
                                  <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                                  <div class="container overflow-hidden">
                                    <div class="row gx-5">
                                      <div class="col">
                                       <div class="p-0">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                                          <label class="form-check-label" for="jenis_kelamin">
                                            Laki-laki
                                          </label>
                                        </div>
                                       </div>
                                      </div>
                                      <div class="col">
                                        <div class="p-0">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                                            <label class="form-check-label" for="jenis_kelamin">
                                              Perempuan
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>           
                                </fieldset>
                                <div class="mb-3">
                                  <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                </div>
                                <!-- <input type="submit" class="btn btn-primary mb-3" id="submit" name="submit" value="Simpan"></input> -->
                              </form>
                              <!-- {{-- End Form --}} -->
                        </div>
                        <div class="col-4">
                                    <div class="p-4">
                                        <div class="img-circle text-center mb-3">
                                            <img src="https://api.sdmdigital.id/file/dowload-get-file?path=foto_profil/d1d9c0a0-476b-4248-a64b-bac9db2a9d0b.png" alt="Image" class="shadow rounded-circle" width="150" height="150">
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Pilih Foto Profil</label>
                                            <input class="form-control" type="file" id="formFile">
                                          </div>
                                    </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                      <input type="submit" class="btn btn-primary mb-3 btn-lg" id="submit" name="submit" value="Ubah Profil">
                    </div>
                    <hr>
                    <!-- Disini DIisi apaaan njer -->
                    <div class="detailpeternaklainnya border mb-3">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                              <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false">Disabled</button>
                            </div>
                          </nav>
                          <!-- <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, necessitatibus sequi molestiae ipsa suscipit veniam eaque facere optio quis praesentium consequuntur iusto in ut! Iste aliquid sed tempore fugiat error?</div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quam deserunt tempore soluta expedita suscipit. Dignissimos possimus voluptatum, magni dicta repudiandae, dolore eaque incidunt similique deserunt ipsum maxime nostrum voluptatibus.</div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, reiciendis minus explicabo sunt facere quidem quia quis voluptates porro vel a amet consequatur labore ad adipisci repellendus minima aperiam. Provident?</div>
                            <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque laborum deleniti hic praesentium exercitationem impedit sequi dolores minus id, possimus adipisci ipsa aperiam quibusdam tempora ipsam velit illum vel nihil.</div>
                          </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>
