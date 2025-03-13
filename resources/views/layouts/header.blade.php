<header class="{{ ($active != "home") ? 'header-v4' : '' }}">

  <style>
    .main-menu .badge {
      position: absolute;
      top: -10px;
      right: -10px;
      background-color: #717fe0;
      color: white;
      border-radius: 50%;
      padding: 5px 10px;
      font-size: 12px;
    }
  </style>

  <!-- Header desktop -->
  <div class="container-menu-desktop">
    <!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25 text-decoration-none">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25 text-decoration-none">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25 text-decoration-none">
							USD
						</a>
					</div>
				</div>
			</div>

    <div class="wrap-menu-desktop">
      <nav class="limiter-menu-desktop container">
        
        <!-- Logo desktop -->		
        <a href="home" class="logo" style="height: 28px;">
          <img src="/images/icons/logo-01.png" alt="IMG-LOGO" >
        </a>

        <!-- Menu desktop -->
        <div class="menu-desktop">
          <ul class="main-menu">
            <li class="{{ ($active === "home") ? 'active-menu' : '' }}">
              <a class="text-decoration-none" href="/">Home</a>
            </li>

            <li class="{{ ($active === "product") ? 'active-menu' : '' }} {{ ($active === "product-detail") ? 'active-menu' : '' }}">
              <a class="text-decoration-none" href="/product">Shop</a>
            </li>

            <li class="label1 {{ ($active === "features") ? 'active-menu' : '' }} {{ ($active === "category") ? 'active-menu' : '' }}"" data-label1="hot">
              <a class="text-decoration-none" href="/features">Features</a>
            </li>

            <li class="{{ ($active === "shopping-cart") ? 'active-menu' : '' }}">
              <a class="text-decoration-none" href="/shopping-cart">Shopping Cart</a>
            </li>

            <li class="{{ ($active === "blog") ? 'active-menu' : '' }} {{ ($active === "blog-detail") ? 'active-menu' : '' }}">
              <a class="text-decoration-none" href="/blog">Blog</a>
            </li>

            <li class="{{ ($active === "about") ? 'active-menu' : '' }}">
              <a class="text-decoration-none" href="/about">About</a>
            </li>

            <li class="{{ ($active === "contact") ? 'active-menu' : '' }}">
              <a class="text-decoration-none" href="/contact">Contact</a>
            </li>
          </ul>
        </div>	

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m">
          <ul class="main-menu">
            <li class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
              <i class="zmdi zmdi-search"></i>
            </li>

            <li>
              @auth
                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart">
                  <i class="zmdi zmdi-shopping-cart fs-26"></i>
                  <span class="badge">3</span>
                </a>
              @else
                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-cart">
                  <i class="zmdi zmdi-shopping-cart fs-26"></i>
                </a>
              @endauth
            </li>

            <li>
              @auth
                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                  <i class="zmdi zmdi-favorite-outline fs-26"></i>
                  <span class="badge">3</span>
                </a>
              @else
                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                  <i class="zmdi zmdi-favorite-outline fs-26"></i>
                </a>
              @endauth
            </li>

            <li>
              @auth
              <a href="/account" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                <i class="zmdi zmdi-account fs-26"></i>
              </a>
              <ul class="sub-menu">
                <li><a href="/account">Profile</a></li>
                <li><a href="/setting">Setting</a></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <a><button class="hov-cl1" type="submit">Log-out</button></a>
                  </form>
                </li>
              </ul>
              @else
              <a href="/login" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                <i class="zmdi zmdi-account fs-26"></i>
              </a>
              <ul class="sub-menu">
                <li><a href="/login">Log-in</a></li>
              </ul>
              @endauth
            </li>
          </ul>
        </div>
      </nav>
    </div>	
  </div>

  <!-- Header Mobile -->
  <div class="wrap-header-mobile">
    <!-- Logo moblie -->		
    <div class="logo-mobile">
      <a href="/"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
    </div>

    <!-- Icon header -->
    <div class="wrap-icon-header flex-w flex-r-m m-r-15">
      <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
        <i class="zmdi zmdi-search"></i>
      </div>

      <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
        <i class="zmdi zmdi-shopping-cart"></i>
      </div>

      <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
        <i class="zmdi zmdi-favorite-outline"></i>
      </a>
    </div>

    <!-- Button show menu -->
    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </div>
  </div>


  <!-- Menu Mobile -->
  <div class="menu-mobile">
    <ul class="topbar-mobile">
      <li>
        <div class="left-top-bar">
          Free shipping for standard order over $100
        </div>
      </li>

      <li>
        <div class="right-top-bar flex-w h-full">
          <a href="#" class="flex-c-m p-lr-10 trans-04">
            Help & FAQs
          </a>

          <a href="/login" class="flex-c-m p-lr-10 trans-04">
            My Account
          </a>

          <a href="#" class="flex-c-m p-lr-10 trans-04">
            EN
          </a>

          <a href="#" class="flex-c-m p-lr-10 trans-04">
            USD
          </a>
        </div>
      </li>
    </ul>

    <ul class="main-menu-m" style="background-color: #222;">
      <li>
        <a href="/">Home</a>
        <span class="arrow-main-menu-m">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
        </span>
      </li>

      <li>
        <a href="/product">Shop</a>
      </li>

      <li>
        <a href="/features" class="label1 rs1" data-label1="hot">Features</a>
      </li>

      <li>
        <a href="/shoping-cart">Features</a>
      </li>

      <li>
        <a href="/blog">Blog</a>
      </li>

      <li>
        <a href="/about">About</a>
      </li>

      <li>
        <a href="/contact">Contact</a>
      </li>
    </ul>
  </div>

  <!-- Modal Search -->
  <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
    <div class="container-search-header">
      <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
        <img src="images/icons/icon-close2.png" alt="CLOSE">
      </button>

      <form class="wrap-search-header flex-w p-l-15">
        <button class="flex-c-m trans-04">
          <i class="zmdi zmdi-search"></i>
        </button>
        <input class="plh3" type="text" name="search" placeholder="Search...">
      </form>
    </div>
  </div>
</header>