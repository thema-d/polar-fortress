@extends('layout.app')

@section('content')
<!-- content-wraper start -->
<div class="content-wraper mt-95">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="row single-product-area">
          <div class="col-xl-4 col-lg-6 offset-xl-1 col-md-5 col-sm-12">
            <div class="single-product-tab">
              <div class="zoomWrapper">
                <div id="img-1" class="zoomWrapper single-zoom">
                  <a href="#">
                    <img
                      id="zoom1"
                      src="{{ $product->images['large'][0]}}"
                      data-zoom-image="{{ $product->images['large'][0]}}"
                      alt="big-1"
                    />
                  </a>
                </div>
                <div class="single-zoom-thumb">
                  <ul
                    class="s-tab-zoom single-product-active owl-carousel"
                    id="gallery_01"
                  >
                    @foreach ($product->images['large'] as $image)
                      <li>
                        <a
                          href="#"
                          class="elevatezoom-gallery @if($loop->index == 0) active @endif"
                          data-update=""
                          data-image="{{ $image }}"
                          data-zoom-image="{{ $image }}"
                        ><img src="{{ $image }}" alt="zo-th-1"
                        /></a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-7 col-lg-6 col-md-7 col-sm-12">
            <!-- product-thumbnail-content start -->
            <div class="quick-view-content">
              <div class="product-info">
                <h2>{{ $product->name }}</h2>
                <div class="rating-box">
                  <ul class="rating">
                    @foreach(range(1,5) as $rate)
                      @if($rate <= $product->rating)
                      <li><i class="fa fa-star"></i></li>
                      @else
                      <li class="no-star"><i class="fa fa-star"></i></li>
                      @endif
                    @endforeach
                  </ul>
                </div>
                <div class="price-box">
                  <span class="new-price">{{ formatPrice($product->discounted_price) }}</span>
                  @if($product->discount)
                  <span class="old-price">{{ formatPrice($product->price)}}</span>
                  @endif
                </div>
                <p>
                  {{ $product->description }}
                </p>
                <div class="modal-color">
                  <h4>Color</h4>
                  <div class="color-list">
                    <ul>
                      <li><a href="#" class="paste"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="quick-add-to-cart">
                  <form class="modal-cart">
                    <div class="quantity">
                      <label>Quantity</label>
                      <div class="cart-plus-minus">
                        <input
                          class="cart-plus-minus-box"
                          type="text"
                          value="0"
                        />
                      </div>
                    </div>
                    <button class="add-to-cart" type="submit">
                      Add to cart
                    </button>
                  </form>
                </div>
                <div class="instock">
                  <p>In stock</p>
                </div>
                <div class="social-sharing">
                  <h3>Share</h3>
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- product-thumbnail-content end -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content-wraper end -->
<!-- product-area start -->
<div class="product-area ptb-95">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="section-title-3">
          <h2>Same Category:</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <x-product-item :product="$product" />
    </div>
  </div>
</div>
<!-- product-area end -->
@endsection
