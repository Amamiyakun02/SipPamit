@extends('layout.shopping_main')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="breadcrumb-text product-more">
                <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                <a href="./shop.html">Shop</a>
                <span>Detail</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Breadcrumb Section Begin -->
  
      <!-- Product Shop Section Begin -->
      <section class="product-shop spad page-details">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6">
                  <div class="product-pic-zoom">
                    <img
                      class="product-big-img"
                      src="img/product-single/product-1.jpg"
                      alt=""
                    />
                    <div class="zoom-icon">
                      <i class="fa fa-search-plus"></i>
                    </div>
                  </div>
                  <div class="product-thumbs">
                    <div class="product-thumbs-track ps-slider owl-carousel">
                      <div
                        class="pt active"
                        data-imgbigurl="img/product-single/product-1.jpg"
                      >
                        <img src="img/product-single/product-1.jpg" alt="" />
                      </div>
                      <div
                        class="pt"
                        data-imgbigurl="img/product-single/product-2.jpg"
                      >
                        <img src="img/product-single/product-2.jpg" alt="" />
                      </div>
                      <div
                        class="pt"
                        data-imgbigurl="img/product-single/product-3.jpg"
                      >
                        <img src="img/product-single/product-3.jpg" alt="" />
                      </div>
                      <div
                        class="pt"
                        data-imgbigurl="img/product-single/product-3.jpg"
                      >
                        <img src="img/product-single/product-3.jpg" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="product-details">
                    <div class="pd-title">
                      <h3>{{ $product->name }}</h3>
                      <a href="#" class="heart-icon"
                        ><i class="icon_heart_alt"></i
                      ></a>
                    </div>
                    <div class="pd-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <span>(5)</span>
                    </div>
                    <div class="pd-desc">
                      <h4>Rp {{ $product->price }},00</h4>
                    </div>
                    <div class="pd-color">
                      <h6>STOK : {{ $product->stock}}</h6>
                      <!-- <div class="pd-color-choose">
                        <div class="cc-item">
                          <input type="radio" id="cc-black" />
                          <label for="cc-black"></label>
                        </div>
                        <div class="cc-item">
                          <input type="radio" id="cc-yellow" />
                          <label for="cc-yellow" class="cc-yellow"></label>
                        </div>
                        <div class="cc-item">
                          <input type="radio" id="cc-violet" />
                          <label for="cc-violet" class="cc-violet"></label>
                        </div>
                      </div>
                    </div>
                    <div class="pd-size-choose">
                      <div class="sc-item">
                        <input type="radio" id="sm-size" />
                        <label for="sm-size">s</label>
                      </div>
                      <div class="sc-item">
                        <input type="radio" id="md-size" />
                        <label for="md-size">m</label>
                      </div>
                      <div class="sc-item">
                        <input type="radio" id="lg-size" />
                        <label for="lg-size">l</label>
                      </div>
                      <div class="sc-item">
                        <input type="radio" id="xl-size" />
                        <label for="xl-size">xs</label>
                      </div> -->
                      <br>
                    </div>
                    <div class="quantity">
                      <div class="pro-qty">
                        <input type="text" value="1" />
                      </div>
                      <a href="#" class="primary-btn pd-cart">Buy It Now</a>
                    </div>
                    <ul class="pd-tags">
                      <li>
                        <span>KATEGORI : {{ $product->kategori }}</span>
                      </li>
                      <!-- <li><span>TAGS</span>: Clothing, T-shirt, Woman</li> -->
                    </ul>
                    <div class="pd-share">
                      <div class="p-code">Sku : 00012</div>
                      <div class="pd-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-tab">
                <div class="tab-item">
                  <ul class="nav" role="tablist">
                    <li>
                      <a class="active" data-toggle="tab" href="#tab-1" role="tab"
                        >DESCRIPTION</a
                      >
                    </li>
                    <li>
                      <a data-toggle="tab" href="#tab-2" role="tab"
                        >SPECIFICATIONS</a
                      >
                    </li>
                    <li>
                      <a data-toggle="tab" href="#tab-3" role="tab"
                        >Customer Reviews (02)</a
                      >
                    </li>
                  </ul>
                </div>
                @include('modals/modalEditDetailProduct')

                <div class="tab-item-content">
                  <div class="tab-content">
                    <div
                      class="tab-pane fade-in active"
                      id="tab-1"
                      role="tabpanel"
                    >
                    @auth
                    <!-- Trigger tombol modal -->
                    <a
                      class="btn btn-primary"
                      id="editdeskripsiButton"
                      data-toggle="modal"
                      data-target="#editdeskripsiModal"
                      ><i class="fas fa-pencil"></i> Edit</a
                    >
                    <!-- end of trigger -->
                    @endauth
                      <div class="product-content">
                        <div class="row">
                          <div class="col-lg-7">
                            <h5>Deskripsi</h5>
                            <p>
                              {{ $product->deskripsi}}
                            </p>
                            <!-- <h5>Features</h5>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing
                              elit, sed do eiusmod tempor incididunt ut labore et
                              dolore magna aliqua. Ut enim ad minim veniam, quis
                              nostrud exercitation ullamco laboris nisi ut aliquip
                              ex ea commodo consequat. Duis aute irure dolor in
                            </p> -->
                          </div>
                          <div class="col-lg-5">
                            <img src="img/product-single/tab-desc.jpg" alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                      @auth
                    <!-- Trigger tombol modal -->
                    <a
                      class="btn btn-primary"
                      id="editSpesifikasiButton"
                      data-toggle="modal"
                      data-target="#editSpesifikasiModal"
                      ><i class="fas fa-pencil"></i> Edit</a
                    >
                    <!-- end of trigger -->
                    @endauth
                      <div class="specification-table">
                        {{ $product->spesifikasi}}
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-3" role="tabpanel">
                      <div class="customer-review-option">
                        <h4>2 Comments</h4>
                        <div class="comment-option">
                          <div class="co-item">
                            <div class="avatar-pic">
                              <img src="img/product-single/avatar-1.png" alt="" />
                            </div>
                            <div class="avatar-text">
                              <div class="at-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <h5>Brandon Kelley <span>27 Aug 2019</span></h5>
                              <div class="at-reply">Nice !</div>
                            </div>
                          </div>
                          <div class="co-item">
                            <div class="avatar-pic">
                              <img src="img/product-single/avatar-2.png" alt="" />
                            </div>
                            <div class="avatar-text">
                              <div class="at-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <h5>Roy Banks <span>27 Aug 2019</span></h5>
                              <div class="at-reply">Nice !</div>
                            </div>
                          </div>
                        </div>
                        <div class="personal-rating">
                          <h6>Your Ratind</h6>
                          <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                        </div>
                        <div class="leave-comment">
                          <h4>Leave A Comment</h4>
                          <form action="#" class="comment-form">
                            <div class="row">
                              <div class="col-lg-6">
                                <input type="text" placeholder="Name" />
                              </div>
                              <div class="col-lg-6">
                                <input type="text" placeholder="Email" />
                              </div>
                              <div class="col-lg-12">
                                <textarea placeholder="Messages"></textarea>
                                <button type="submit" class="site-btn">
                                  Send message
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Product Shop Section End -->
  
      <!-- Related product Section End -->
      <div class="related-products spad">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title">
                <h2>Related Products</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/women-1.jpg" alt="" />
                  <div class="sale">Sale</div>
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <a href="#"><i class="icon_bag_alt"></i></a>
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <a href="#"><i class="fa fa-random"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Coat</div>
                  <a href="#">
                    <h5>Pure Pineapple</h5>
                  </a>
                  <div class="product-price">
                    $14.00
                    <span>$35.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/women-2.jpg" alt="" />
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <a href="#"><i class="icon_bag_alt"></i></a>
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <a href="#"><i class="fa fa-random"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Shoes</div>
                  <a href="#">
                    <h5>Guangzhou sweater</h5>
                  </a>
                  <div class="product-price">$13.00</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/women-3.jpg" alt="" />
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <a href="#"><i class="icon_bag_alt"></i></a>
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <a href="#"><i class="fa fa-random"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Towel</div>
                  <a href="#">
                    <h5>Pure Pineapple</h5>
                  </a>
                  <div class="product-price">$34.00</div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="img/products/women-4.jpg" alt="" />
                  <div class="icon">
                    <i class="icon_heart_alt"></i>
                  </div>
                  <ul>
                    <li class="w-icon active">
                      <a href="#"><i class="icon_bag_alt"></i></a>
                    </li>
                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                    <li class="w-icon">
                      <a href="#"><i class="fa fa-random"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="pi-text">
                  <div class="catagory-name">Towel</div>
                  <a href="#">
                    <h5>Converse Shoes</h5>
                  </a>
                  <div class="product-price">$34.00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Related Products Section End -->
  
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