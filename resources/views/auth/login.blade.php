@extends('layout.app')

@section('content')
<div class="content-wraper mt-95">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="customer-login-register">
                  <h3>Login</h3>
                  <div class="login-Register-info">
                      <form action="#"> 
                          <p class="coupon-input form-row-first">
                              <label>Username or email <span class="required">*</span></label>
                              <input type="text" name="email">
                          </p>
                          <p class="coupon-input form-row-last">
                              <label>password <span class="required">*</span></label>
                              <input type="password" name="password">
                          </p>
                         <div class="clear"></div>
                          <p>
                              <button value="Login" name="login" class="button-login" type="submit">Login</button>
                              <label><input type="checkbox" value="1"><span>Remember me</span></label>
                              <a href="#" class="lost-password">Lost your password?</a>
                          </p>
                      </form>
                  </div>
              </div>
          </div>
          <div class="col-lg-6  col-md-6 col-sm-12">
              <div class="customer-login-register">
                  <h3>Register</h3>
                  <div class="login-Register-info">
                      <form action="#"> 
                          <p class="coupon-input form-row-first">
                              <label>Username or email <span class="required">*</span></label>
                              <input type="text" name="email">
                          </p>
                          <p class="coupon-input form-row-last">
                              <label>password <span class="required">*</span></label>
                              <input type="password" name="password">
                          </p>
                         <div class="clear"></div>
                          <p>
                              <button class="button-login" type="submit">Register</button>
                          </p>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection