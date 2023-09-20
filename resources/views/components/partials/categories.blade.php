<nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
  <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
    <ul class="navbar-nav u-header__navbar-nav">
      @foreach ($tree as $item)

        @if (empty($item['children']))
          <li class="nav-item u-header__nav-item" data-event="hover" data-position="left">

            <a href="#" class="nav-link u-header__nav-link font-weight-bold">{{ $item['name'] }}</a>
          </li>
        @else
          <!-- Nav Item MegaMenu -->
          <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp"
            data-animation-out="fadeOut" data-position="left">
            <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle font-weight-bold" href="javascript:;"
              aria-haspopup="true" aria-expanded="false">Computers & Accessories</a>

            <!-- Nav Item - Mega Menu -->
            <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
              <div class="vmm-bg">
                <img class="img-fluid" src="../../assets/img/500X400/img1.png" alt="Image Description">
              </div>
              <div class="row u-header__mega-menu-wrapper">
                <div class="col mb-3 mb-sm-0">
                  <span class="u-header__sub-menu-title">Computers & Accessories</span>
                  <ul class="u-header__sub-menu-nav-group mb-3">
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Computers & Accessories</a>
                    </li>
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Laptops, Desktops & Monitors</a>
                    </li>
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Printers & Ink</a></li>
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Networking & Internet Devices</a>
                    </li>
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Computer Accessories</a></li>
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Software</a></li>
                    <li>
                      <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start"
                        href="#">
                        <div class="">All Electronics</div>
                        <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="col mb-3 mb-sm-0">
                  <span class="u-header__sub-menu-title">Office & Stationery</span>
                  <ul class="u-header__sub-menu-nav-group">
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Office & Stationery</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Nav Item - Mega Menu -->
          </li>
          <!-- End Nav Item MegaMenu-->
        @endif
      @endforeach

    </ul>
  </div>
</nav>
