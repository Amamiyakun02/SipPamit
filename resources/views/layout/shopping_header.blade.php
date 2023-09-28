<!-- <div class="container">
    <div class="inner-header">
      <div class="row">
        <div class="col-lg-2 col-md-2">
          <div class="logo">
            <a href="/home">
              <img src="assets/img/shop/logo.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col-lg-7 col-md-7">
          <div class="advanced-search">
            <button type="button" class="category-btn">
              All Categories
            </button>
            <form action="#" class="input-group">
              <input type="text" placeholder="What do you need?" />
              <button type="button"><i class="ti-search"></i></button>
            </form>
          </div>
        </div>
        <div class="col-lg-3 text-right col-md-3">
          <ul class="nav-right">
            <li class="heart-icon">
              <a href="shopping-cart.html">
                <i class="icon_heart_alt"></i>
                <span>1</span>
              </a>
            </li>
            <li class="cart-icon">
              <a href="shopping-cart.html">
                <i class="icon_bag_alt"></i>
                <span>3</span>
              </a>
              <div class="cart-hover">
                <div class="select-items">
                  <table>
                    <tbody>
                      <tr>
                        <td class="si-pic">
                          <img src="img/select-product-1.jpg" alt="" />
                        </td>
                        <td class="si-text">
                          <div class="product-selected">
                            <p>$60.00 x 1</p>
                            <h6>Kabino Bedside Table</h6>
                          </div>
                        </td>
                        <td class="si-close">
                          <i class="ti-close"></i>
                        </td>
                      </tr>
                      <tr>
                        <td class="si-pic">
                          <img src="img/select-product-2.jpg" alt="" />
                        </td>
                        <td class="si-text">
                          <div class="product-selected">
                            <p>$60.00 x 1</p>
                            <h6>Kabino Bedside Table</h6>
                          </div>
                        </td>
                        <td class="si-close">
                          <i class="ti-close"></i>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="select-total">
                  <span>total:</span>
                  <h5>$120.00</h5>
                </div>
                <div class="select-button">
                  <a href="shopping-cart.html" class="primary-btn view-card"
                    >VIEW CARD</a
                  >
                  <a href="check-out.html" class="primary-btn checkout-btn"
                    >CHECK OUT</a
                  >
                </div>
              </div>
            </li>
            <li class="cart-price">
              @auth
              <a href="#">Selamat datang {{ auth()->user()->name }}</a>
                  <ul class="dropdown">
                    <li><a href="./shopping-cart.html">Pengaturan akun</a></li>
                    <li><a href="/logout"><button>Logout</button></a></li>
                  </ul>
              @else
               <a href="/login" class="login-panel"><i class="fa fa-user"></i>Login</a>
              @endauth
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="nav-item">
    <div class="container">
      <div class="nav-depart">
        <div class="depart-btn">
          <i class="ti-menu"></i>
          <span>All departments</span>
          <ul class="depart-hover">
            <li class="active"><a href="#">Peralatan</a></li>
            <li><a href="#">Pakan Ternak</a></li>
            <li><a href="#">Ayam Potong</a></li>
            <li><a href="#">Obat</a></li>
          </ul>
        </div>
      </div>
      <nav class="nav-menu mobile-menu">
        <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="/shop">Shop</a></li>
          <li><a href="/invest">Investasi</a></li>
          <li>
            <a href="#">Pages</a>
            <ul class="dropdown">
              <li><a href="./shopping-cart.html">Shopping Cart</a></li>
              <li><a href="./register.html">Register</a></li>
              <li><a href="./login.html">Login</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
    </div>
  </div>
</header> -->

<!-- Header Section Begin -->
<header class="header-section">
    <!-- Begin of up -->
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2" style="padding-top: 20px;">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7" style="padding-top: 30px;">
                    <div class="advanced-search">
                        <form action="#" class="input-group">
                            <input type="text" placeholder="Apa yang anda butuhkan?" />
                            <button type="button"><i class="ti-search"></i> Cari</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3" style="padding-top: 10px;">
                    <ul class="nav-right" style="display: flex;">
                    @auth
                        <li class="heart-icon">
                            <!-- Menggunakan <a> untuk membungkus gambar -->
                            <a href="#" data-toggle="modal" data-target="#user-modal">
                                <img class="gambar-login" src="../img/dummy.jpg" alt="User Image" id="user-image">
                            </a>
                        </li>
                        <li style="text-align: left;">
                            
                            Selamat Datang {{ auth()->user()->name }}
                            @else
                            <a href="/login" class="login-panel" style="color: #fff; background-color: #e7ab3c; padding: 10px 20px; border-radius: 5px;">
    <i class="fa fa-user" style="margin-right: 5px;"></i>Login
</a>
                            @endauth
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="user-modal" tabindex="-1" role="dialog" aria-labelledby="user-modal-label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="user-modal-label">Detail Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div style="position: relative;">
                        <img class="gambar-login" src="../img/dummy.jpg" alt="User Image" id="user-modal-image"
                            style="width: 150px; height: 150px;">
                        <i class="fa fa-cog fa-lg" style="position: absolute; top: 10px; right: 10px; cursor: pointer;"
                            data-toggle="tooltip" data-placement="top" title="Edit"></i>
                    </div>
                    <p class="mt-3">Nama Pengguna: <span id="user-modal-name">David</span></p>
                    <!-- Tambahkan informasi pengguna lainnya di sini -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger mx-auto" id="logout-button">Logout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Of Modal Selamat Datang -->
    <!-- End OF up Header -->
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>Semua Kategori</span>
                    <ul class="depart-hover">
                        <li class="active"><a href="#">Peralatan</a></li>
                        <li><a href="#">Pakan Ternak</a></li>
                        <li><a href="#">Ayam Potong</a></li>
                        <li><a href="#">Obat</a></li>
                        <li><a href="#">Investasi</a></li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./shop.html">Shop</a></li>
                    <li><a href="/invest">Investasi</a></li>
                    <li>
                        <a href="#">Pages</a>
                        <ul class="dropdown">
                            <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="./register.html">Register</a></li>
                        </ul>
                    </li>
                    @guest
                    <li><a href="/login">Login</a></li>
                    @endguest
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>

<script>
    @guest
    // Menggunakan jQuery untuk menonaktifkan modal jika pengguna belum login
    $(document).ready(function () {
        $('#user-modal').modal('hide'); // Menutup modal jika pengguna belum login
        $('#user-modal').on('show.bs.modal', function (e) {
            e.preventDefault(); // Mencegah modal muncul jika pengguna belum login
        });
    });
    @endguest
</script>

<!-- Header End -->
