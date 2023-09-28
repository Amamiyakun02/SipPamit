@extends('layout.shopping_main')
@section('content')

  <!-- Hero Section Begin -->
  <section class="hero-section">
    <div class="hero-items owl-carousel">
      @foreach($farmerUser as $peternak)
      <div class="single-hero-items set-bg" data-setbg="img/banner.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <span>Investasi</span>
              <h1> Peternak {{ $peternak->username }} </h1>
              <a href="invest-now.html" class="primary-btn">Invest Now</a>
            </div>
          </div>
          <div class="off-card">
            <h2>profit<span>100%</span></h2>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- Banner Section Begin -->
  <div class="banner-section spad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="single-banner">
            <img src="img/makan.jpeg" alt="" />
            <div class="inner-text">
              <h4>Pakan</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="single-banner">
            <img src="img/alat.jpg" alt="" />
            <div class="inner-text">
              <h4>Peralatan</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="single-banner">
            <img src="img/pupuk2.jpg" alt="" />
            <div class="inner-text">
              <h4>Pupuk</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="single-banner">
            <img src="img/ayam potong.jpeg" alt="" />
            <div class="inner-text">
              <h4>Ayam potong</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Section End -->

  <!-- Women Banner Section End -->

  <!-- Deal Of The Week Section Begin-->
  <section class="deal-of-week set-bg spad" data-setbg="img/banner3.jpg">
    <div class="container">
      <div class="col-lg-6 text-center">
        <div class="section-title">
          <h2>Investasi ke Suwit's Farmer</h2>
          <p>
            Ayo cepat Investasikan Uang kalian ke peternakan pak suwito<br />
            agar tidak menyesal dikemudian hari. 30 Juta sabilah, ya gak?
          </p>
          <div class="product-price">Rp 2.000.000,00 / Rp 30.000.000,00</div>
        </div>
        <div class="countdown-timer" id="countdown">
          <div class="cd-item">
            <span>10</span>
            <p>Days</p>
          </div>
          <div class="cd-item">
            <span>12</span>
            <p>Hrs</p>
          </div>
          <div class="cd-item">
            <span>40</span>
            <p>Mins</p>
          </div>
          <div class="cd-item">
            <span>52</span>
            <p>Secs</p>
          </div>
        </div>
        <a href="#" class="primary-btn">Invest Now</a>
      </div>
    </div>
  </section>
  <!-- Deal Of The Week Section End -->

  <!-- Man Banner Section Begin -->
  <section class="man-banner spad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <div class="product-slider owl-carousel">
            <div class="col-lg-3 col-md-4">
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
                      <a href="invest-now.html" class="primary-btn pd-cart"
                        >Invest Now</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
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
                      <a href="invest-now.html" class="primary-btn pd-cart"
                        >Invest Now</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
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
                      <a href="invest-now.html" class="primary-btn pd-cart"
                        >Invest Now</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
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
                      <a href="invest-now.html" class="primary-btn pd-cart"
                        >Invest Now</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 offset-lg-1">
          <div
            class="product-large set-bg m-large"
            data-setbg="img/invest.png"
          >
            <h2>Investasi</h2>
            <a href="invest.html">Sektor</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Man Banner Section End -->



@endsection