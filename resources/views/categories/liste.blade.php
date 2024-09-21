@extends('squlette')
@include('shared.nav')
@extends('sign')

<section class="bg-darker bg-size-cover bg-position-center py-5" style="background-image: url(img/food-delivery/category/pt-bg.jpg);">
  <div class="container py-md-4">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
        <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
        <li class="breadcrumb-item text-nowrap"><a href="#">All categories</a>
        </li>
      
      </ol>
    </nav>
    <h1 class="text-light text-center text-lg-start pt-3">All Categories</h1>
  </div>
</section>

<section class="container py-4 my-lg-3 py-sm-5" id="cuisine">
  <div class="row">
    <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="img/food-delivery/category/01.jpg" alt="Burgers &amp; Fries">
        <div class="card-body py-4 text-center">
          <h3 class="h5 mt-1">Burgers &amp; Fries</h3>
        </div></a></div>
    <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="img/food-delivery/category/02.jpg" alt="Noodles">
        <div class="card-body py-4 text-center">
          <h3 class="h5 mt-1">Noodles</h3>
        </div></a></div>
    <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="img/food-delivery/category/03.jpg" alt="Sushi &amp; Rolls">
        <div class="card-body py-4 text-center">
          <h3 class="h5 mt-1">Sushi &amp; Rolls</h3>
        </div></a></div>
    <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="img/food-delivery/category/04.jpg" alt="Pizza &amp; Pasta">
        <div class="card-body py-4 text-center">
          <h3 class="h5 mt-1">Pizza &amp; Pasta</h3>
        </div></a></div>
    <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="img/food-delivery/category/05.jpg" alt="Coffee &amp; Desserts">
        <div class="card-body py-4 text-center">
          <h3 class="h5 mt-1">Coffee &amp; Desserts</h3>
        </div></a></div>
    <div class="col-md-4 col-sm-6 mb-grid-gutter"><a class="card border-0 shadow" href="food-delivery-category.html"><img class="card-img-top" src="img/food-delivery/category/06.jpg" alt="Healthy &amp; Food">
        <div class="card-body py-4 text-center">
          <h3 class="h5 mt-1">Healthy &amp; Food</h3>
        </div></a></div>
  </div>
</section>


@include('shared.footer')