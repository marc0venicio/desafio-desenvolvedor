@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card">
                        <div class="card-image-wrapper">
                            <img src="https://via.placeholder.com/450x150/FFFFFF" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Números de clientes</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-image-wrapper">
                            <img src="https://via.placeholder.com/450x150/FFFFFF" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Números de pedidos</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-image-wrapper">
                            <img src="https://via.placeholder.com/450x150/FFFFFF" class="card-img-top img-fluid" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Números de produtos cadastrados</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            </div>
            <h2 class="text-center my-4">Nossos Produtos cadastrados</h2>
        </div>

    </div>
    <div class="container d-flex justify-content-center">
        <figure class="card-ecommerce card-product-grid card-lg mx-4" > <a href="#" class="img-wrap" data-abc="true"> <img
                    src="https://via.placeholder.com/450x150/FFFFFF"> </a>
            <figcaption class="info-wrap">
                <div class="row">
                    <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true">Dell Xtreme 270</a> <span
                            class="rated">Laptops</span> </div>
                    <div class="col-md-3 col-xs-3">
                        <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="rated">Rated 4.0/5</span>
                        </div>
                    </div>
                </div>
            </figcaption>
            <div class="bottom-wrap-payment">
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true">$3,999</a> <span
                                class="rated">VISA Platinum</span> </div>
                        <div class="col-md-3 col-xs-3">
                            <div class="rating text-right"> #### 8787 </div>
                        </div>
                    </div>
                </figcaption>
            </div>
            <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
                <div class="price-wrap"> <a href="#" class="btn btn-warning float-left" data-abc="true"> Cancel </a> </div>
            </div>
        </figure>
        <figure class="card-ecommerce card-product-grid card-lg"> <a href="#" class="img-wrap" data-abc="true"> <img
          src="https://via.placeholder.com/450x150/FFFFFF"> </a>
  <figcaption class="info-wrap">
      <div class="row">
          <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true">Dell Xtreme 270</a> <span
                  class="rated">Laptops</span> </div>
          <div class="col-md-3 col-xs-3">
              <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                      class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="rated">Rated 4.0/5</span>
              </div>
          </div>
      </div>
  </figcaption>
  <div class="bottom-wrap-payment">
      <figcaption class="info-wrap">
          <div class="row">
              <div class="col-md-9 col-xs-9"> <a href="#" class="title" data-abc="true">$3,999</a> <span
                      class="rated">VISA Platinum</span> </div>
              <div class="col-md-3 col-xs-3">
                  <div class="rating text-right"> #### 8787 </div>
              </div>
          </div>
      </figcaption>
  </div>
  <div class="bottom-wrap"> <a href="#" class="btn btn-primary float-right" data-abc="true"> Buy now </a>
      <div class="price-wrap"> <a href="#" class="btn btn-warning float-left" data-abc="true"> Cancel </a> </div>
  </div>
</figure>
    </div>
    
@endsection
