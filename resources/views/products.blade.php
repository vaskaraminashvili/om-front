<x-layouts.inner>
  <!-- breadcrumb -->
  <div class="bg-gray-13 bg-md-transparent">
    <div class="container">
      <!-- breadcrumb -->
      <div class="my-md-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="../home/index.html">Home</a></li>
            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Smart Phones & Tablets
            </li>
          </ol>
        </nav>
      </div>
      <!-- End breadcrumb -->
    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="container">
    <div class="row mb-8">
      <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
        <x-product-filter/>
      </div>
      <div class="col-xl-9 col-wd-9gdot5">
        <x-product-grid/>
      </div>
    </div>
    <!-- Brand Carousel -->
    <div class="mb-6">
      <div class="py-2 border-top border-bottom">
        <div class="js-slick-carousel u-slick my-1" data-slides-show="5" data-slides-scroll="1"
          data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
          data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
          data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
          data-responsive='[{
                                    "breakpoint": 992,
                                    "settings": {
                                        "slidesToShow": 2
                                    }
                                }, {
                                    "breakpoint": 768,
                                    "settings": {
                                        "slidesToShow": 1
                                    }
                                }, {
                                    "breakpoint": 554,
                                    "settings": {
                                        "slidesToShow": 1
                                    }
                                }]'>
          <div class="js-slide">
            <a href="#" class="link-hover__brand">
              <img class="img-fluid m-auto max-height-50" src="./assets/img/200X60/img1.png"
                alt="Image Description">
            </a>
          </div>
          <div class="js-slide">
            <a href="#" class="link-hover__brand">
              <img class="img-fluid m-auto max-height-50" src="./assets/img/200X60/img2.png"
                alt="Image Description">
            </a>
          </div>
          <div class="js-slide">
            <a href="#" class="link-hover__brand">
              <img class="img-fluid m-auto max-height-50" src="./assets/img/200X60/img3.png"
                alt="Image Description">
            </a>
          </div>
          <div class="js-slide">
            <a href="#" class="link-hover__brand">
              <img class="img-fluid m-auto max-height-50" src="./assets/img/200X60/img4.png"
                alt="Image Description">
            </a>
          </div>
          <div class="js-slide">
            <a href="#" class="link-hover__brand">
              <img class="img-fluid m-auto max-height-50" src="./assets/img/200X60/img5.png"
                alt="Image Description">
            </a>
          </div>
          <div class="js-slide">
            <a href="#" class="link-hover__brand">
              <img class="img-fluid m-auto max-height-50" src="./assets/img/200X60/img6.png"
                alt="Image Description">
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Brand Carousel -->
  </div>
</x-layouts.inner>
