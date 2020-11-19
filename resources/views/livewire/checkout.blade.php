<div class="content-wraper mt-95">
  <div class="container-fluid">
    <!-- checkout-area start -->
    <div class="checkout-area">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 offset-xl-1 col-xl-5 col-sm-12">
              <form action="#">
                <div class="checkbox-form">
                  <h3 class="shoping-checkboxt-title">Billing Details</h3>
                  <div class="row">
                    <div class="col-lg-6">
                      <p class="single-form-row">
                        <label
                          >First name <span class="required">*</span></label
                        >
                        <input type="text" placeholder="Jane" />
                      </p>
                    </div>
                    <div class="col-lg-6">
                      <p class="single-form-row">
                        <label
                          >Last name <span class="required">*</span></label
                        >
                        <input type="text" placeholder="Smith" />
                      </p>
                    </div>
                    <div class="col-lg-6">
                      <p class="single-form-row">
                        <label
                          >Card Number
                          <span class="required">*</span></label
                        >
                        <input type="text" placeholder="5300 XXXX XXXX XXXX " />
                      </p>
                    </div>
                    <div class="col-lg-3">
                      <p class="single-form-row">
                        <label
                          >Expiry Date
                          <span class="required">*</span></label
                        >
                        <input type="text" placeholder="03/22" />
                      </p>
                    </div>
                    <div class="col-lg-3">
                      <p class="single-form-row">
                        <label
                          >CVV
                          <span class="required">*</span></label
                        >
                        <input type="text" placeholder="328" />
                      </p>
                    </div>
                    <div class="col-lg-6">
                      <p class="single-form-row">
                          <label>Street address <span class="required">*</span></label>
                          <input placeholder="Bole Subcity" type="text" name="address" placeholder="House number and street name">
                      </p>
                  </div>
                  <div class="col-lg-6">
                      <p class="single-form-row">
                          <label>Street address 2 (optional)</label>
                          <input placeholder="Gotera Condominium" type="text" name="address" placeholder="Apartment, suite, unit etc. (optional)">
                      </p>
                  </div>
                  <div class="col-lg-6">
                      <p class="single-form-row">
                          <label>Town / City <span class="required">*</span></label>
                          <input placeholder="Addis Ababa" type="text" name="address">
                      </p>
                  </div>
                  <div class="col-lg-6">
                      <p class="single-form-row">
                          <label>Country</label>
                          <input placeholder="Ethiopia" type="text" name="address">
                      </p>
                  </div>
                  <div class="col-lg-6">
                      <p class="single-form-row">
                          <label>Postcode / ZIP <span class="required">*</span></label>
                          <input placeholder="0000" type="text" name="address">
                      </p>
                  </div>
                  <div class="col-lg-6">
                      <p class="single-form-row">
                          <label>Phone</label>
                          <input placeholder="+251 922334455" type="text" name="address">
                      </p>
                  </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-6 col-xl-5 col-sm-12">
              <div class="checkout-review-order">
                <form action="#">
                  <h3 class="shoping-checkboxt-title">Your order</h3>
                  <table class="checkout-review-order-table">
                    <thead>
                      <tr>
                        <th class="t-product-name">Product</th>
                        <th class="product-total">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                      <tr class="cart_item">
                        <td class="t-product-name">
                            {{ $item->name }}
                          <strong class="product-quantity">&times; {{$item->qty}}</strong
                          >
                        </td>
                        <td class="t-product-price"><span>{{format_price($item->price)}}</span></td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr class="order-total">
                        <th>Subtotal</th>
                        <td>
                          <strong><span>
                              {{ format_price(get_cart_attr('priceTotal')) }}
                        </span></strong>
                        </td>
                      </tr>
                      <tr class="order-total">
                        <th>Discount</th>
                        <td>
                          <strong><span>
                              {{ format_price(get_cart_attr('discount')) }}
                        </span></strong>
                        </td>
                      </tr>
                      <tr class="order-total">
                        <th>Tax</th>
                        <td>
                          <strong><span>
                              {{ format_price(get_cart_attr('tax')) }}
                        </span></strong>
                        </td>
                      </tr>
                      <tr class="order-total">
                        <th>Total</th>
                        <td>
                          <strong><span>{{ format_price(get_cart_attr('total')) }}</span></strong>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="checkout-payment">
                    <button wire:click.prevent="checkoutOrders" class="button-continue-payment">
                      Continue to payment
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- checkout-area end -->
  </div>
</div>