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
                      <div class="paginatoin-area">
                          <div class="row">
                              <div class="col-lg-6 col-md-6">
                                  <p>Showing 1-12 of 13 item(s)</p>
                              </div>
                              <div class="col-lg-6 col-md-6">
                                  <ul class="pagination-box">
                                      <li><a href="#" class="Previous"><i class="fa fa-chevron-left"></i> Previous</a>
                                      </li>
                                      <li class="active"><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li>
                                        <a href="#" class="Next"> Next <i class="fa fa-chevron-right"></i></a>
                                      </li>
                                  </ul>
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