<div class="content-wraper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12 order-1 order-lg-2">
              <!-- shop-products-wrapper start -->
              <div class="shop-products-wrapper">
                  <div class="tab-content">
                      <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                          <div class="shop-product-area">
                              <div class="row">
                                  @foreach ($products as $product)
                                    <x-product-item :product="$product" />
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- shop-products-wrapper end -->
          </div>
      </div>
  </div>
</div>