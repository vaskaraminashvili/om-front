        <!-- Shop-control-bar Title -->
        <div class="d-block d-md-flex flex-center-between mb-3">
          <h3 class="font-size-25 mb-2 mb-md-0">{{request()->category}}</h3>
          <p class="font-size-14 text-gray-90 mb-0">Showing {{ $paginator->firstItem() }}–{{ $paginator->lastItem() }} of {{ $paginator->total() }} results</p>
        </div>
        <!-- End shop-control-bar Title -->
        <!-- Shop-control-bar -->
        <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
          <div class="d-xl-none">
            <!-- Account Sidebar Toggle Button -->
            <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button"
              aria-controls="sidebarContent1" aria-haspopup="true" aria-expanded="false" data-unfold-event="click"
              data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1" data-unfold-type="css-animation"
              data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
              <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
            </a>
            <!-- End Account Sidebar Toggle Button -->
          </div>
          <div class="px-3 d-none d-xl-block">
            <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1"
                  role="tab" aria-controls="pills-one-example1" aria-selected="false">
                  <div class="d-md-flex justify-content-md-center align-items-md-center">
                    <i class="fa fa-th"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1"
                  role="tab" aria-controls="pills-two-example1" aria-selected="false">
                  <div class="d-md-flex justify-content-md-center align-items-md-center">
                    <i class="fa fa-align-justify"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1"
                  role="tab" aria-controls="pills-three-example1" aria-selected="true">
                  <div class="d-md-flex justify-content-md-center align-items-md-center">
                    <i class="fa fa-list"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-four-example1-tab" data-toggle="pill" href="#pills-four-example1"
                  role="tab" aria-controls="pills-four-example1" aria-selected="true">
                  <div class="d-md-flex justify-content-md-center align-items-md-center">
                    <i class="fa fa-th-list"></i>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="d-flex">
            <form method="get">
              <!-- Select -->
              <select
                class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0"
                data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                <option value="one" selected>Default sorting</option>
                <option value="two">Sort by popularity</option>
                <option value="three">Sort by average rating</option>
                <option value="four">Sort by latest</option>
                <option value="five">Sort by price: low to high</option>
                <option value="six">Sort by price: high to low</option>
              </select>
              <!-- End Select -->
            </form>
            <form method="POST" class="ml-2 d-none d-xl-block">
              <!-- Select -->
              <select class="js-select selectpicker dropdown-select max-width-120"
                data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                <option value="one" selected>Show 20</option>
                <option value="two">Show 40</option>
                <option value="three">Show All</option>
              </select>
              <!-- End Select -->
            </form>
          </div>
          <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
            <form method="post" class="min-width-50 mr-1">
              <input size="2" min="1" max="3" step="1" type="number"
                class="form-control text-center px-2 height-35" value="1">
            </form> of 3
            <a class="text-gray-30 font-size-20 ml-2" href="#">→</a>
          </nav>
        </div>
        <!-- End Shop-control-bar -->
        <!-- Shop Body -->
        <!-- Tab Content -->
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel"
            aria-labelledby="pills-one-example1-tab" data-target-group="groups">
            <ul class="row list-unstyled products-group no-gutters">
                @foreach ($productsData->data as $item)
                <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                  <div class="product-item__outer h-100">
                    <div class="product-item__inner px-xl-4 p-3">
                      <div class="product-item__body pb-xl-2">
                        <div class="mb-2"><a href="./products/{{ $item->category_name }}"
                            class="font-size-12 text-gray-5">{{ $item->category_name }}</a></div>
                        <h5 class="mb-1 product-item__title"><a href="/product/{{ $item->slug }}"
                            class="text-blue font-weight-bold">{{ $item->title }}</a></h5>
                        <div class="mb-2">
                          <a href="/product/{{ $item->slug }}" class="d-block text-center"><img
                              class="img-fluid" src="{{asset('./assets/img/212X200/img'.rand(1,8). '.jpg')}}" alt="Image Description"></a>
                        </div>
                        <div class="flex-center-between mb-1">
                            <div class="prodcut-price d-flex align-items-center position-relative">
                                <ins class="font-size-20 text-red text-decoration-none">${{ $item->real_price }}</ins>
                                <del class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ $item->price }}</del>
                            </div>
                          <div class="d-none d-xl-block prodcut-add-cart">
                            <a href="/product/{{ $item->slug }}"
                              class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </li>

                @endforeach

            </ul>
          </div>
          <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel"
            aria-labelledby="pills-two-example1-tab" data-target-group="groups">
            <ul class="row list-unstyled products-group no-gutters">
                @foreach ($productsData->data as $item)
              <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                <div class="product-item__outer h-100">
                  <div class="product-item__inner px-xl-4 p-3">
                    <div class="product-item__body pb-xl-2">
                      <div class="mb-2"><a href="./products/{{ $item->category_name }}"
                          class="font-size-12 text-gray-5">{{ $item->category_name }}</a></div>
                      <h5 class="mb-1 product-item__title"><a href="/product/{{ $item->slug }}"
                          class="text-blue font-weight-bold">
                          {{ $item->title }}
                        </a></h5>
                      <div class="mb-2">
                        <a href="/product/{{ $item->slug }}" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img{{ rand(1,8) }}.jpg" alt="Image Description"></a>
                      </div>
                      <div class="mb-3">
                        <a class="d-inline-flex align-items-center small font-size-14" href="#">
                          <div class="text-warning mr-2">
                            @for ($i = 0; $i < rand(1,4); $i++)
                            <small class="fas fa-star"></small>
                            @endfor
                            <small class="far fa-star text-muted"></small>
                          </div>
                          <span class="text-secondary">({{ rand(1,100) }})</span>
                        </a>
                      </div>
                      <ul class="font-size-12 p-0 text-gray-110 mb-4">
                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                          resistant, anti-shock material.</li>
                        <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera</li>
                      </ul>
                      <div class="text-gray-20 mb-2 font-size-12">SKU: {{ $item->sku }}</div>
                      <div class="flex-center-between mb-1 mt-4">

                        <div class="prodcut-price d-flex align-items-center position-relative">
                            <ins class="font-size-20 text-red text-decoration-none">${{ $item->real_price }}</ins>
                            <del class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ $item->price }}</del>
                        </div>
                        <div class="d-none d-xl-block prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-item__footer">
                      <div class="border-top pt-2 flex-center-between flex-wrap">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
          <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel"
            aria-labelledby="pills-three-example1-tab" data-target-group="groups">
            <ul class="d-block list-unstyled products-group prodcut-list-view">
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-4">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img9.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-5">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price mb-2 d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-3">
                        <div class="prodcut-price mb-2">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add to cart</a>
                        </div>
                      </div>
                      <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-4">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img10.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-5">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price mb-2 d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-3">
                        <div class="prodcut-price mb-2">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add to cart</a>
                        </div>
                      </div>
                      <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-4">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img9.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-5">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price mb-2 d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-3">
                        <div class="prodcut-price mb-2">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add to cart</a>
                        </div>
                      </div>
                      <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-4">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img4.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-5">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price mb-2 d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-3">
                        <div class="prodcut-price mb-2">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add to cart</a>
                        </div>
                      </div>
                      <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-4">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img9.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-5">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price mb-2 d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-3">
                        <div class="prodcut-price mb-2">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add to cart</a>
                        </div>
                      </div>
                      <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-4">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img6.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-5">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price mb-2 d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-3">
                        <div class="prodcut-price mb-2">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add to cart</a>
                        </div>
                      </div>
                      <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade pt-2" id="pills-four-example1" role="tabpanel"
            aria-labelledby="pills-four-example1-tab" data-target-group="groups">
            <ul class="d-block list-unstyled products-group prodcut-list-view-small">
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-2">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img9.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-7">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-2 flex-center-between">
                        <div class="prodcut-price">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn-add-cart btn-primary transition-3d-hover"><i
                              class="ec ec-add-to-cart"></i></a>
                        </div>
                      </div>
                      <div
                        class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap border-top pt-3">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-2">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img10.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-7">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-2 flex-center-between">
                        <div class="prodcut-price">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn-add-cart btn-primary transition-3d-hover"><i
                              class="ec ec-add-to-cart"></i></a>
                        </div>
                      </div>
                      <div
                        class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap border-top pt-3">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-2">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img9.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-7">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-2 flex-center-between">
                        <div class="prodcut-price">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn-add-cart btn-primary transition-3d-hover"><i
                              class="ec ec-add-to-cart"></i></a>
                        </div>
                      </div>
                      <div
                        class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap border-top pt-3">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-2">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img4.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-7">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-2 flex-center-between">
                        <div class="prodcut-price">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn-add-cart btn-primary transition-3d-hover"><i
                              class="ec ec-add-to-cart"></i></a>
                        </div>
                      </div>
                      <div
                        class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap border-top pt-3">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-2">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img10.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-7">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-2 flex-center-between">
                        <div class="prodcut-price">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn-add-cart btn-primary transition-3d-hover"><i
                              class="ec ec-add-to-cart"></i></a>
                        </div>
                      </div>
                      <div
                        class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap border-top pt-3">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                  <div class="product-item__inner remove-prodcut-hover py-4 row">
                    <div class="product-item__header col-6 col-md-2">
                      <div class="mb-2">
                        <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img
                            class="img-fluid" src="./assets/img/212X200/img6.jpg" alt="Image Description"></a>
                      </div>
                    </div>
                    <div class="product-item__body col-6 col-md-7">
                      <div class="pr-lg-10">
                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html"
                            class="font-size-12 text-gray-5">Speakers</a></div>
                        <h5 class="mb-2 product-item__title"><a href="../shop/single-product-fullwidth.html"
                            class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base
                            audio</a></h5>
                        <div class="prodcut-price d-md-none">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                          <li class="line-clamp-1 mb-1 list-bullet">Brand new and high quality</li>
                          <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality, durable EVA crush
                            resistant, anti-shock material.</li>
                          <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28 megapixel CMOS rear camera
                          </li>
                        </ul>
                        <div class="mb-3 d-none d-md-block">
                          <a class="d-inline-flex align-items-center small font-size-14" href="#">
                            <div class="text-warning mr-2">
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="fas fa-star"></small>
                              <small class="far fa-star text-muted"></small>
                            </div>
                            <span class="text-secondary">(40)</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="product-item__footer col-md-3 d-md-block">
                      <div class="mb-2 flex-center-between">
                        <div class="prodcut-price">
                          <div class="text-gray-100">$685,00</div>
                        </div>
                        <div class="prodcut-add-cart">
                          <a href="../shop/single-product-fullwidth.html"
                            class="btn-add-cart btn-primary transition-3d-hover"><i
                              class="ec ec-add-to-cart"></i></a>
                        </div>
                      </div>
                      <div
                        class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap border-top pt-3">
                        <a href="../shop/compare.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                        <a href="../shop/wishlist.html" class="text-gray-6 font-size-13 mx-wd-3"><i
                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Tab Content -->
        <!-- End Shop Body -->
        <!-- Shop Pagination -->
        {{ $paginator->links('components.paginator') }}

        <!-- End Shop Pagination -->
