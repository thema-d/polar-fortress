@extends('layout.app')

@section('bread_crumb')
<ul class="breadcrumb-list">
  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
  <li class="breadcrumb-item active">Login</li>
</ul>
@endsection
@section('content')
<div class="content-wraper mt-95">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-6 col-sm-12">
              <div class="customer-login-register">
                  <h3>Login to your account</h3>
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
      </div>
  </div>
</div>
@endsection