<div class="content-wraper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3 order-2 order-lg-1">
              <!--sidebar-categores-box start  -->
              <div class="sidebar-categores-box mt-95">
                  <div class="sidebar-title">
                      <h2>Filter By</h2>
                  </div>
                  <!-- btn-clear-all start -->
                  <button class="btn-clear-all">Clear all</button>
                  <!-- btn-clear-all end -->
                  <!-- filter-sub-area start -->
                  <div class="filter-sub-area">
                      <h5 class="filter-sub-titel">Price</h5>
                      <div class="price-checkbox">
                          <form action="#">
                              <ul> 
                                  <li><input type="radio" name="price-filter" checked=""><a href="#">$10.00 - $11.00 (1)</a></li>
                                  <li><input type="radio" name="price-filter"><a href="#">$14.00 - $15.00 (2)</a></li>
                                  <li><input type="radio" name="price-filter"><a href="#">$16.00 - $17.00 (2)</a></li>
                                  <li><input type="radio" name="price-filter"><a href="#">$18.00 - $19.00 (1)</a></li>
                                  <li><input type="radio" name="price-filter"><a href="#"> $24.00 - $28.00 (5)</a></li>
                                  <li><input type="radio" name="price-filter"><a href="#"> $30.00 - $32.00 (1)</a></li>
                                  <li><input type="radio" name="price-filter"><a href="#"> $50.00 - $53.00 (2) </a></li>
                              </ul>
                          </form>
                      </div>
                  </div>
                  <!-- filter-sub-area end -->
                  <!-- filter-sub-area start -->
                  <div class="filter-sub-area">
                      <h5 class="filter-sub-titel">Size</h5>
                      <div class="size-checkbox">
                          <form action="#">
                              <ul>
                                  <li><input type="checkbox" name="product-size"><a href="#">S (1)</a></li>
                                  <li><input type="checkbox" name="product-size"><a href="#">M (4)</a></li>
                                  <li><input type="checkbox" name="product-size"><a href="#">L (2)</a></li>
                              </ul>
                          </form>
                      </div>
                  </div>
                  <!-- filter-sub-area end -->
                  <!-- filter-sub-area start -->
                  <div class="filter-sub-area">
                      <h5 class="filter-sub-titel">Color</h5>
                      <div class="color-categoriy">
                          <form action="#">
                              <ul>
                                  <li><span class="white"></span><a href="#">White (1)</a></li>
                                  <li><span class="black"></span><a href="#">Black (1)</a></li>
                                  <li><span class="Orange"></span><a href="#">Orange (3) </a></li>
                                  <li><span class="Blue"></span><a href="#">Blue  (2) </a></li>
                              </ul>
                          </form>
                      </div>
                  </div>
                  <!-- filter-sub-area end -->
              </div>
              <!--sidebar-categores-box end  -->
          </div>
          <div class="col-lg-9 order-1 order-lg-2">
              <!-- shop-top-bar start -->
              <div class="shop-top-bar mt-95">
                  <div class="shop-bar-inner">
                      <div class="toolbar-amount">
                          <span>Showing 1 to 9 of 15</span>
                      </div>
                  </div>
                  <!-- product-select-box start -->
                  <div class="product-select-box">
                      <div class="product-short">
                          <p>Sort By:</p>
                          <select class="nice-select">
                              <option value="trending">Relevance</option>
                              <option value="sales">Name (A - Z)</option>
                              <option value="sales">Name (Z - A)</option>
                              <option value="rating">Price (Low &gt; High)</option>
                              <option value="date">Rating (Lowest)</option>
                          </select>
                      </div>
                  </div>
                  <!-- product-select-box end -->
              </div>
              <!-- shop-top-bar end -->
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