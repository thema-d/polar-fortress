<div class="shopping-cart-box">
  <ul>
    <li>
      <a href="#">
        <span class="item-cart-inner">
          @if($items->count())<span class="item-cont">{{ $items->count() }}</span>@endif
          My Cart
        </span>
        <div class="item-total">{{ format_price(get_cart_attr('total')) }}</div>
      </a>
      <ul class="shopping-cart-wrapper">
        @foreach($items as $item)
        <li>
          <div class="shoping-product-details">
            <h3><a href="#">{{ $item->name }}</a></h3>
            <div class="price-box">
              <span>{{ format_price($item->price) }}</span>
            </div>
            <div class="sizeandcolor">
              <span>Size: {{ $item->model->size }}</span>
              <span>Color: {{ ucfirst($item->model->color) }}</span>
            </div>
            <div class="remove">
              <button wire:click="removeItemFromCart('{{$item->rowId}}')" title="Remove">
                <i class="ion-android-delete"></i>
              </button>
            </div>
          </div>
        </li>
        @endforeach
        <li>
          <div class="cart-subtotals">
            <h5>Subtotal<span class="float-right">{{ format_price(get_cart_attr('priceTotal')) }}</span></h5>
            <h5>Discount<span class="float-right">{{ format_price(get_cart_attr('discount')) }}</span></h5>
            <h5>Tax<span class="float-right">{{ format_price(get_cart_attr('tax')) }}</span></h5>
            <h5>Total<span class="float-right">{{ format_price(get_cart_attr('total')) }}</span></h5>
          </div>
        </li>
        <li class="shoping-cart-btn">
          <a class="checkout-btn" href="/checkout">checkout</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
