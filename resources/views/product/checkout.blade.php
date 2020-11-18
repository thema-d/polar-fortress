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
                        <input type="text" name="First name" />
                      </p>
                    </div>
                    <div class="col-lg-6">
                      <p class="single-form-row">
                        <label
                          >Username or email
                          <span class="required">*</span></label
                        >
                        <input type="text" name="Last name " />
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <p class="single-form-row">
                        <label>Company name</label>
                        <input type="text" name="email" />
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <div class="single-form-row">
                        <label>Country <span class="required">*</span></label>
                        <div class="nice-select wide">
                          <select>
                            <option>Select Country...</option>
                            <option>Albania</option>
                            <option>Angola</option>
                            <option>Argentina</option>
                            <option>Austria</option>
                            <option>Azerbaijan</option>
                            <option>Bangladesh</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <p class="single-form-row">
                        <label
                          >Street address <span class="required">*</span></label
                        >
                        <input
                          type="text"
                          name="address"
                          placeholder="House number and street name"
                        />
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <p class="single-form-row">
                        <input
                          type="text"
                          name="address"
                          placeholder="Apartment, suite, unit etc. (optional)"
                        />
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <p class="single-form-row">
                        <label
                          >Town / City <span class="required">*</span></label
                        >
                        <input type="text" name="address" />
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <p class="single-form-row">
                        <label>State / County</label>
                        <input type="text" name="address" />
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <p class="single-form-row">
                        <label
                          >Postcode / ZIP <span class="required">*</span></label
                        >
                        <input type="text" name="address" />
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <p class="single-form-row">
                        <label>Phone</label>
                        <input type="text" name="address" />
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <p class="single-form-row">
                        <label
                          >Email address <span class="required">*</span></label
                        >
                        <input type="text" name="Email address " />
                      </p>
                    </div>
                    <div class="col-lg-12">
                      <div class="single-form-row checkout-area">
                        <label
                          ><input type="checkbox" id="chekout-box" /> Create an
                          account?</label
                        >
                        <div class="account-create single-form-row">
                          <label class="creat-pass"
                            >Create account password <span>*</span></label
                          >
                          <input type="password" class="input-text" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="single-form-row">
                        <label id="chekout-box-2"
                          ><input type="checkbox" /> Ship to a different
                          address?</label
                        >
                        <div class="ship-box-info">
                          <div class="row">
                            <div class="col-lg-6">
                              <p class="single-form-row">
                                <label
                                  >First name
                                  <span class="required">*</span></label
                                >
                                <input type="text" name="First name" />
                              </p>
                            </div>
                            <div class="col-lg-6">
                              <p class="single-form-row">
                                <label
                                  >Username or email
                                  <span class="required">*</span></label
                                >
                                <input type="text" name="Last name " />
                              </p>
                            </div>
                            <div class="col-lg-12">
                              <p class="single-form-row">
                                <label>Company name</label>
                                <input type="text" name="email" />
                              </p>
                            </div>
                            <div class="col-lg-12">
                              <div class="single-form-row">
                                <label
                                  >Country
                                  <span class="required">*</span></label
                                >
                                <div class="nice-select wide">
                                  <select>
                                    <option>Select Country...</option>
                                    <option>Albania</option>
                                    <option>Angola</option>
                                    <option>Argentina</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>Bangladesh</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <p class="single-form-row">
                                <label
                                  >Street address
                                  <span class="required">*</span></label
                                >
                                <input
                                  type="text"
                                  name="address"
                                  placeholder="House number and street name"
                                />
                              </p>
                            </div>
                            <div class="col-lg-12">
                              <p class="single-form-row">
                                <input
                                  type="text"
                                  name="address"
                                  placeholder="Apartment, suite, unit etc. (optional)"
                                />
                              </p>
                            </div>
                            <div class="col-lg-12">
                              <p class="single-form-row">
                                <label
                                  >Town / City
                                  <span class="required">*</span></label
                                >
                                <input type="text" name="address" />
                              </p>
                            </div>
                            <div class="col-lg-12">
                              <p class="single-form-row">
                                <label>State / County</label>
                                <input type="text" name="address" />
                              </p>
                            </div>
                            <div class="col-lg-12">
                              <p class="single-form-row">
                                <label
                                  >Postcode / ZIP
                                  <span class="required">*</span></label
                                >
                                <input type="text" name="address" />
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <p class="single-form-row m-0">
                        <label>Order notes</label>
                        <textarea
                          cols="5"
                          rows="2"
                          class="checkout-mess"
                          placeholder="Notes about your order, e.g. special notes for delivery."
                        ></textarea>
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
                          Natus erro<strong class="product-quantity"
                            >× 1</strong
                          >
                        </td>
                        <td class="t-product-price"><span>$97.20</span></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td><span>$97.00</span></td>
                      </tr>
                      <tr class="shipping">
                        <th>Shipping</th>
                        <td>Free shipping</td>
                      </tr>
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
