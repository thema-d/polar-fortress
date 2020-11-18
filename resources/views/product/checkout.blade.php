@extends('layout.app') @section('bread_crumb')
<ul class="breadcrumb-list">
  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
  <li class="breadcrumb-item active">Checkout</li>
</ul>
@endsection @section('content')
<!-- content-wraper start -->
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
                      <tr class="cart_item">
                        <td class="t-product-name">
                          Brand Name FREE RN 2018
                          <strong class="product-quantity">&times; 1</strong
                          >
                        </td>
                        <td class="t-product-price"><span>$97.20</span></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr class="order-total">
                        <th>Total</th>
                        <td>
                          <strong><span>$97.00</span></strong>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="checkout-payment">
                    <div class="payment_methods">
                      <p>
                        <label
                          >PayPal Express Checkout
                          <a href="#"
                            ><img
                              src="img/icon/pp-acceptance-small.png"
                              alt="" /></a
                        ></label>
                      </p>
                      <p>
                        Pay via PayPal; you can pay with your credit card if you
                        don’t have a PayPal account.
                      </p>
                    </div>
                    <button class="button-continue-payment" type="submit">
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
<!-- content-wraper end -->
@endsection
