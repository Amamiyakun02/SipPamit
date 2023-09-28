@extends('layout.shopping_main')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="breadcrumb-text">
                <a href="#"><i class="fa fa-home"></i> Home</a>
                <span>Shop</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Breadcrumb Section Begin -->
  
      <!-- Product Shop Section Begin -->
      <section class="product-shop spad">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 order-1 order-lg-2">
              <div class="product-show-option">
                <div class="row">
                  <div class="col-lg-7 col-md-7">
                    <div class="select-option">
                      <select class="sorting">
                        <option value="">Default Sorting</option>
                      </select>
                      <select class="p-show">
                        <option value="">Show:</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-5 text-right">
                    <p>Show 01- 09 Of 36 Product</p>
                  </div>
                </div>
              </div>


              <div class="product-list">
                <div class="row">
                  @foreach ($invests as $invest)
                  <div class="col-lg-3 col-md-4">
                    <div class="card custom-card">
                      <div class="square-image">
                        <img
                          class="square-image"
                          src="\assets\img\shop\{{ $invest->farm->foto_peternakan }}"
                          alt=""
                        />
                      </div>
                      <br />
                      <div class="card-body">
                        <h5 class="card-title"><strong>{{ $invest->farm->nama_peternakan }}</strong></h5>
                        <ul class="list-unstyled">
                          <li><strong>Kapasitas Ayam:</strong> {{ $invest->farm->kapasitas }} ekor</li>
                          <li><strong>Ukuran Kandang:</strong> {{ $invest->farm->ukuran}}m persegi</li>
                          <li><strong>Tahun Beroperasi:</strong> {{ $invest->farm->sejak}} </li> 
                        </ul>
                        <div class="progress-wrapper">
                          <div class="progress">
                            <div
                              class="progress-bar"
                              role="progressbar"
                              style="width: 0%"
                              aria-valuenow="0"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            >
                              0%
                            </div>
                          </div>
                          <div class="progress-label">
                            <span id="current-value">Rp 0,00</span> /
                            <span id="max-value">Rp 30.000.000,00</span>
                          </div>
                        </div>
                        <br />
                        <div class="btn-wrapper">
                          <div>
                            <a href="/invest-now" class="primary-btn pd-cart"
                              >Invest Now</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                  {{-- <div class="col-lg-3 col-md-4">
                    <div class="card custom-card">
                      <div class="square-image">
                        <img
                          class="square-image"
                          src="img/sipamit logo.jpg"
                          alt=""
                        />
                      </div>
                      <br />
                      <div class="card-body">
                        <h5 class="card-title"><strong>Jali's Farmer</strong></h5>
                        <ul class="list-unstyled">
                          <li><strong>Kapasitas Ayam:</strong> 300 ekor</li>
                          <li><strong>Ukuran Kandang:</strong> 20 m persegi</li>
                          <li><strong>Tahun Beroperasi:</strong> 2003</li>
                        </ul>
                        <div class="progress-wrapper">
                          <div class="progress">
                            <div
                              class="progress-bar"
                              role="progressbar"
                              style="width: 0%"
                              aria-valuenow="0"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            >
                              0%
                            </div>
                          </div>
                          <div class="progress-label">
                            <span id="current-value">Rp 0,00</span> /
                            <span id="max-value">Rp 30.000.000,00</span>
                          </div>
                        </div>
  
                        <br />
                        <div class="btn-wrapper">
                          <div>
                            <a href="/invest-now" class="primary-btn pd-cart"
                              >Invest Now</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                  <!-- Tambahkan kartu-kartu lain di sini -->
                </div>
              </div>
              <div class="loading-more">
                <i class="icon_loading"></i>
                <a href="#"> Loading More </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Product Shop Section End -->
  
      <!-- Partner Logo Section Begin -->
      <div class="partner-logo">
        <div class="container">
          <div class="logo-carousel owl-carousel">
            <div class="logo-item">
              <div class="tablecell-inner">
                <img src="img/logo-carousel/logo-1.png" alt="" />
              </div>
            </div>
            <div class="logo-item">
              <div class="tablecell-inner">
                <img src="img/logo-carousel/logo-2.png" alt="" />
              </div>
            </div>
            <div class="logo-item">
              <div class="tablecell-inner">
                <img src="img/logo-carousel/logo-3.png" alt="" />
              </div>
            </div>
            <div class="logo-item">
              <div class="tablecell-inner">
                <img src="img/logo-carousel/logo-4.png" alt="" />
              </div>
            </div>
            <div class="logo-item">
              <div class="tablecell-inner">
                <img src="img/logo-carousel/logo-5.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Partner Logo Section End -->
  
@endsection