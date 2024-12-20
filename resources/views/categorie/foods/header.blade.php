<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Food Delivery Service</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="{{ asset('/safari-pinned-tab.svg') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('/vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('/vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('/css/theme.min.css') }}">
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header bg-secondary">
              <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
                <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
              </ul>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body tab-content py-4">
              <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
                <div class="mb-3">
                  <label class="form-label" for="si-email">Email address</label>
                  <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                  <div class="invalid-feedback">Please provide a valid email address.</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="si-password">Password</label>
                  <div class="password-toggle">
                    <input class="form-control" type="password" id="si-password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <div class="mb-3 d-flex flex-wrap justify-content-between">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="si-remember">
                    <label class="form-check-label" for="si-remember">Remember me</label>
                  </div><a class="fs-sm" href="#">Forgot password?</a>
                </div>
                <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
              </form>
              <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                <div class="mb-3">
                  <label class="form-label" for="su-name">Full name</label>
                  <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                  <div class="invalid-feedback">Please fill in your name.</div>
                </div>
                <div class="mb-3">
                  <label for="su-email">Email address</label>
                  <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                  <div class="invalid-feedback">Please provide a valid email address.</div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="su-password">Password</label>
                  <div class="password-toggle">
                    <input class="form-control" type="password" id="su-password" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="su-password-confirm">Confirm password</label>
                  <div class="password-toggle">
                    <input class="form-control" type="password" id="su-password-confirm" required>
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                      <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <main class="page-wrapper">
    @include('shared.nav')
    <section class="bg-darker bg-size-cover bg-position-center py-5" style="background-image: url(img/food-delivery/category/pt-bg.jpg);">
        
        <div class="container py-md-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
              <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
              <li class="breadcrumb-item text-nowrap"><a href="#">All categories</a>
              </li>
              <li class="breadcrumb-item text-nowrap active" aria-current="page">Burgers &amp; Fries</li>
            </ol>
          </nav>
          <h1 class="text-light text-center text-lg-start pt-3">Burgers &amp; Fries</h1>
        </div>
      </section>
      @yield('foodpage')
   @include('shared.footer')
  
    <!-- Toolbar for handheld devices (Food delivery)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="#signin-modal" data-bs-toggle="modal"><span class="handheld-toolbar-icon"><i class="ci-user"></i></span><span class="handheld-toolbar-label">Account</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="food-delivery-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">3</span></span><span class="handheld-toolbar-label">$24.00</span></a></div>
    </div>
</div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('/vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('/js/theme.min.js') }}"></script>
  </body>
</html>