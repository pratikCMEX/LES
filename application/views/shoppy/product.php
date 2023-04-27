<!-- ----hero-section--- -->
<style>
  /*PRICE RANGE SLIDER */
  .price-range-slider {
    width: 100%;
    padding: 10px 20px 15px;
    background-color: #f7f7f7;
  }

  .price-range-slider .range-value {
    margin: 0;
    display: flex;
  }

  .price-range-slider .range-value .fa-rupee-sign {
    color: var(--secondary-color);
    position: relative;
    font-size: 16px;
    top: 3px;
    position: relative;
    font-weight: 900;
    margin-right: 5px;
    top: 1px;
  }

  .price-range-slider .range-value input {
    width: 100%;
    background: none;
    color: var(--secondary-color);
    font-family: 'OpenSans-SemiBold';
    font-size: 16px;
    font-weight: initial;
    box-shadow: none;
    border: none;
    margin: 00px 0 20px 0;
  }

  .price-range-slider .range-bar {
    border: none;
    background: #000;
    height: 3px;
    width: 96%;
    margin-left: 8px;
  }

  .price-range-slider .range-bar .ui-slider-range {
    background: #1ebcb7;
  }

  .price-range-slider .range-bar .ui-slider-handle {
    border: none;
    border-radius: 25px;
    background: #fff;
    border: 2px solid #1ebcb7;
    height: 17px;
    width: 17px;
    top: -0.52em;
    cursor: pointer;
  }

  .price-range-slider .range-bar .ui-slider-handle+span {
    background: #1ebcb7;
  }
</style>

<section class="hero-section common-banner-bg login-section">
  <img src="<?= $this->theme_base_url . '/assets/img/home/banner-left-bg.png' ?>" alt="" class="left-bg">
  <img src="<?= $this->theme_base_url . '/assets/img/home/banner-right-bg.png' ?>" alt="" class="right-bg">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 xol-xl-12 xol-lg-12 text-center">
        <h1><?= $this->lang->line('SHOP') ?></h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= $this->lang->line('home') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $this->lang->line('Shop') ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<section class="Featured-Products product-listing-1 p-100">
  <div class="container">
    <div class="row">
      <div class="product-select-in">
        <!-- <h4>SHOWING 1–12 OF 21 RESULTS</h4> -->
        <div class="d-flex w-100 justify-content-end">
          <select class="form-select sorting" aria-label="Default select example">
            <option value="All">All</option>
            <option value="alphabetically">Alphabetical</option>
            <option value="high_low">Price-High to Low</option>
            <option value="low_high">Price-Low to High</option>
            <option value="discount_high_low">`%` off - High to Low</option>
            <option value="discount_low_high">`%` off - low to high</option>
          </select>

          <!-- ---filter-icon--- -->
          <a class="filter-icon filter-hide-btn lg-btn">FILTER<i class="fa fa-filter" aria-hidden="true"></i></a>

          <!-- ----mobile-filter-btn---- -->
          <a class="mobile-filter-btn"><i class="fa fa-filter" aria-hidden="true"></i></a>

          <!-- -----mobile-filter-dropdown---- -->
          <div class="mobile-filter-icon">
            <div id="mySidepanel" class="sidepanel">
              <span class="closebtn"><span>×</span></span>

              <div class="filter-part col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                <div class="product-categires-part">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Price Range
                        </button>
                      </h2>
                      <div class="slider-box">
                        <label for="priceRange">Price Range:</label>
                        <input type="text" id="priceRange_mob" readonly>
                        <div id="price-range_mob" class="slider"></div>
                      </div>
                    </div>


                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed show" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Product Categories
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="discoutn-part">
                            <ul>
                              <?php foreach ($category as $key => $value) : ?>
                                <li>
                                  <div class="form-check category_id" data-cat_id="<?= $value->id ?>">

                                    <label class="form-check-label" for="sub-Kid's"><?= $value->name ?></label>
                                  </div>
                                </li>
                              <?php endforeach ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          Brands
                        </button>
                      </h2>
                      <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="discoutn-part">
                            <ul>
                              <?php foreach ($brand as $key => $brandRecord) : ?>
                                <li>
                                  <div class="form-check">
                                    <input class="form-check-input brand" type="checkbox" name="brand" value="<?= $brandRecord->id ?>" id="sub-Nike">
                                    <label class="form-check-label" for="sub-Nike"><?= $brandRecord->name ?></label>
                                  </div>
                                </li>
                              <?php endforeach ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item sidnev-dicount-part">
                      <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                          Discounts
                        </button>
                      </h2>
                      <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div class="discoutn-part">
                            <ul>

                              <?php

                              $discountArray = ['0-5%', '5-10%', '10-15%', '15-20%', '20-25%', '25-30%', '30-35%', 'More than 35%'];
                              foreach ($discountArray as $key => $value) {

                              ?>
                                <li>
                                  <div class="discount-wrapper">
                                    <div class="form-check">
                                      <input class="form-check-input discount" type="checkbox" name="filter_discount" id="sub-10-15%">
                                      <label class="form-check-label" for="sub-10-15%"><?= $value ?></label>
                                    </div>

                                    <div class="discount-text">
                                      <div class="form-check">
                                        <h4><?= $countDiscoutWise[$key] ?></h4>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              <?php } ?>

                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="products-wrap pro-list-wrap mycustom-row">
        <!-- ---left-product-list--- -->
        <div class="show-div-wrapper">
          <div class="main-listing-wrapper" id="ajaxProduct">


          </div>
        </div>

        <!-- ----right-filter-part------ -->
        <div class="my-filter-wrapper">
          <div class="product-categires-part">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Price Range
                  </button>
                </h2>


                <div class="slider-box">
                  <label for="priceRange">Price Range:</label>
                  <input type="text" id="priceRange" readonly>
                  <div id="price-range" class="slider"></div>
                </div>


              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed show" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Product Categories
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="discoutn-part">
                      <ul>
                        <?php foreach ($category as $key => $value) : ?>
                          <li>
                            <div class="form-check category_id" data-cat_id="<?= $value->id ?>">
                              <label class="form-check-label" for="sub-Kid's"><?= $value->name ?></label>
                            </div>
                          </li>
                        <?php endforeach ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Brands
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="discoutn-part">
                      <ul>
                        <?php foreach ($brand as $key => $brandRecord) : ?>
                          <li>
                            <div class="form-check">
                              <input class="form-check-input brand" type="checkbox" name="brand" value="<?= $brandRecord->id ?>" id="sub-Nike">
                              <label class="form-check-label" for="sub-Nike"><?= $brandRecord->name ?></label>
                            </div>
                          </li>
                        <?php endforeach ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">

                    Discounts
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="discoutn-part">
                      <ul>
                        <?php

                        $discountArray = ['0-5%', '5-10%', '10-15%', '15-20%', '20-25%', '25-30%', '30-35%', 'More than 35%'];
                        foreach ($discountArray as $key => $value) {

                        ?>
                          <li>
                            <div class="discount-wrapper">
                              <div class="form-check">
                                <input class="form-check-input discount" type="checkbox" name="filter_discount" id="sub-10-15%">
                                <label class="form-check-label" for="sub-10-15%"><?= $value ?></label>
                              </div>

                              <div class="discount-text">
                                <div class="form-check">
                                  <h4><?= $countDiscoutWise[$key] ?></h4>
                                </div>
                              </div>
                            </div>
                          </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<div class="mobile-btn-overlay"></div>
<input type="hidden" name="" id="cat_id">
<input type="hidden" name="" id="sub_cat_id">
<input type="hidden" name="" id="getBycatID" value="<?= (isset($getBycatID) ?  $this->utility->safe_b64decode($getBycatID) : '') ?>">