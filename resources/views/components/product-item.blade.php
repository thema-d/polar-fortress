<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-40">
  <!-- single-product-wrap start -->
  <div class="single-product-wrap">
    <div class="product-image">
      <a href="{{route('product.show', ['product' => $product->id ])}}">
        <img class="primary-image" src="{{ $product->images['medium'][0] }}" alt="" />
        <img class="secondary-image" src="{{ $product->images['medium'][1] }}" alt="" />
      </a>
      @if($product->discount) <div class="label-product">-{{$product->discount}}% off</div> @endif
    </div>
    <div class="product_desc">
      <div class="product_desc_info">
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
        <h4>
          <a class="product_name" href="{{route('product.show', ['product' => $product->id ])}}">Air Jordan XI Retro</a>
        </h4>
        <div class="manufacturer">
          <a href="{{route('product.show', ['product' => $product->id ])}}">Fashion Manufacturer</a>
        </div>
        <div class="price-box">
          <span class="new-price">{{ $formatPrice($product->discounted_price) }}</span>
          @if($product->discount)
          <span class="old-price">{{$formatPrice($product->price)}}</span>
          @endif
        </div>
      </div>
      <div class="add-actions">
        <ul class="add-actions-link">
          <li class="add-cart">
            <a href="#"><i class="ion-android-cart"></i> Add to cart</a>
          </li>
          <li>
            <a
              class="quick-view"
              data-toggle="modal"
              data-target="#exampleModalCenter"
              href="#"
              ><i class="ion-android-open"></i
            ></a>
          </li>
          <li>
            <a class="links-details" href="{{route('product.show', ['product' => $product->id ])}}"
              ><i class="ion-clipboard"></i
            ></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- single-product-wrap end -->
</div>
