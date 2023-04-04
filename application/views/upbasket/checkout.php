 <!-- ----hero-section--- -->
 <section class="hero-section listing-hero-sec">
    <div class="container">
      <!-- <h2>Home /<span>Checkout</span></h2> -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=base_url().'home'?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- ------------shop-cart------------ -->
  <section class="checkout-process-section">
    <img src="<?=$this->theme_base_url?>/assets/images/checkout-top-right-img.svg" alt="" class="checkout-top-right-img">
    <img src="<?=$this->theme_base_url?>/assets/images/checkout-mid-left-img.svg" alt="" class="checkout-mid-left-img">
    <img src="<?=$this->theme_base_url?>/assets/images/checkout-bottom-right-img.svg" alt="" class="checkout-bottom-right-img">
    <div class="container">
      <h2 class="title"><?=$this->lang->line('checkout')?> <span><?=$this->lang->line('Process')?></span></h2>
      <!-- <p class="pera">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p> -->

      <div class="row">
        <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
           <div class="fill-detali-part">

            <!-- ----------accordian-part------ -->
            <div class="accordion-items">

              <div class="main-accordion">
              <div class="accordion-heading">Contact Informaions</div>
              <div class="accordion-content  accordion-content-1">
                  <form action="">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email Address<span>*</span></label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="mikehussy@gmail.com">
                    </div>
                    <div class="mb-3">
                      <label for="number" class="form-label">Mobile Number<span>*</span></label>
                      <input type="text" class="form-control" id="phonenumber" placeholder="+91 99989 99899">
                    </div>
                  </form>
              </div>
            </div>
             
            <div class="main-accordion">
              <div class="accordion-heading">Delivery Method</div>
              <div class="accordion-content ">
                <div class="accordion-content-2">
                <div class="form-check radio-outer-line">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    <span><i class="fa-solid fa-truck"></i></span>Ship
                  </label>
                </div>
                <div class="form-check radio-outer-line">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    <span><i class="fa-solid fa-store"></i></span>Pick up
                  </label>
                </div>
                </div>
              </div>
              </div>
            
              <div class="main-accordion">
              <div class="accordion-heading">Shipping address</div>
              <div class="accordion-content accordion-content-3">
                <div class="row">

                  <div class="col-lg-6">
                    <label for="fname" class="form-label">First Name<span>*</span></label>
                    <input type="text" class="form-control" id="fname" aria-describedby="fname" placeholder="Mike">
                  </div>

                  <div class="col-lg-6">
                    <label for="lname" class="form-label">Last Name<span>*</span></label>
                    <input type="email" class="form-control" id="lname" aria-describedby="lname" placeholder="Hussy">
                  </div>

                  <div class="col-lg-12">
                    <label for="text" class="form-label">Country / Region<span>*</span></label>
                    <input type="text" class="form-control" id="text" aria-describedby="text" placeholder="+91 99989 99899">
                  </div>

                  <div class="col-lg-12">
                    <label for="add" class="form-label">Street address<span>*</span></label>
                    <input type="text" class="form-control" id="add" aria-describedby="add" placeholder="Address">
                  </div>

                  <div class="col-lg-12">
                    <input type="text" class="form-control" id="add" aria-describedby="add" placeholder="Apartment, suite, etc.">
                  </div>

                  <div class="col-lg-6">
                    <div class="select-box">
                      <label for="city" class="form-label">Town / City<span>*</span></label>
                    <select class="form-select" aria-label="city">
                      <option selected>Ahmedabad</option>
                      <option value="1">Surt</option>
                      <option value="2">Baroda</option>
                      <option value="3">Ohter</option>
                    </select>
                  </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="select-box">
                      <label for="state" class="form-label">State<span>*</span></label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Gujarat</option>
                      <option value="1">Surt</option>
                      <option value="2">Baroda</option>
                      <option value="3">Ohter</option>
                    </select>
                  </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="select-box">
                      <label for="state" class="form-label">State<span>*</span></label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Gujarat</option>
                      <option value="1">Surt</option>
                      <option value="2">Baroda</option>
                      <option value="3">Ohter</option>
                    </select>
                  </div>
                  </div>

                  <div class="col-lg-6">
                    <label for="zipcode" class="form-label">ZIP Code<span>*</span></label>
                    <input type="text" class="form-control" id="add" aria-describedby="zipcode" placeholder="380050">
                  </div>
                  <div class="save-btn">
                     <a href="#">save</a>
                  </div>

                </div>
              </div>
              </div>

              <div class="main-accordion">
                <div class="accordion-heading">Delivery Schedule</div>
                <div class="accordion-content  accordion-content-4">
                  <div class="dates-day-wrapper">
                    <div class="owl-3 owl-carousel owl-theme">

                  <div class="date-checkd">
                  <input class="checked-div" type="radio" name="radioname" value="one_value">
                  <div class="dates-wrapper">
                      <h4>Tus</h4>
                      <p>Nov 08</p>
                  </div>
                  </div>
                 
                  
                  <div class="date-checkd">
                    <input class="checked-div" type="radio" name="radioname" value="one_value">
                  <div class="dates-wrapper">
                      <h4>Wed</h4>
                      <p>Nov 09</p>
                  </div>
                  </div>
                
                  
                  <div class="date-checkd">
                    <input class="checked-div" type="radio" name="radioname" value="one_value">
                  <div class="dates-wrapper">
                      <h4>thu</h4>
                      <p>Nov 10</p>
                  </div>
                  </div>
                 

                  <div class="date-checkd">
                    <input class="checked-div" type="radio" name="radioname" value="one_value">
                  <div class="dates-wrapper">
                      <h4>fri</h4>
                      <p>Nov 11</p>
                  </div>
                  </div>
               
                  <div class="date-checkd">
                    <input class="checked-div" type="radio" name="radioname" value="one_value">
                  <div class="dates-wrapper">
                      <h4>sat</h4>
                      <p>Nov 12</p>
                  </div>
                  </div>
                  

                  <div class="date-checkd">
                    <input class="checked-div" type="radio" name="radioname" value="one_value">
                  <div class="dates-wrapper">
                      <h4>sun</h4>
                      <p>Nov 13</p>
                  </div>
                  </div>
             
                  <div class="date-checkd">
                    <input class="checked-div" type="radio" name="radioname" value="one_value">
                  <div class="dates-wrapper">
                      <h4>mon</h4>
                      <p>Nov 13</p>
                  </div>
                  </div>
           
                  
                </div>
                </div>
                  
                  <div class="time-wrapper">  
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Default-1" id="Default-1">
                      <label class="form-check-label" for="Default-1">
                        9am to 10am
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Default-1" id="Default-2">
                      <label class="form-check-label" for="Default-2">
                        11am to 2pm
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Default-1" id="Default-3">
                      <label class="form-check-label" for="Default-3">
                        3pm to 5pm
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="Default-1" id="Default-4">
                      <label class="form-check-label" for="Default-4">
                        6pm to 8pm
                      </label>
                    </div>
                  </div>
                  
                     
                </div>
              </div>

              <div class="main-accordion">
                <div class="accordion-heading">Payment Option</div>
                <div class="accordion-content">
                  <div class="accordion-content-2 accordion-5">
                  <div class="form-check radio-outer-line">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="Credit/Debit Card">
                    <label class="form-check-label" for="Credit/Debit Card">
                      Credit/Debit Card
                    </label>
                  </div>
                  <div class="form-check radio-outer-line">
                    <input class="form-check-input" type="radio" name="flexRadioDefault2" id="Cash On Delivery" checked>
                    <label class="form-check-label" for="Cash On Delivery">
                      Cash On Delivery
                    </label>
                  </div>
                  </div>
                </div>
              </div>

            </div>
           </div>
        </div>

        
        <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
           <div class="checkout-order-detils">
               <div class="mydiv-wrapper">
                  <div class="mydiv-header">
                      <h3>Your Orders</h3>
                  </div>
                  <?php foreach ($mycart as $key => $value) { ?>
                  <div class="order-wrapper">
                     <div class="order-wrapper-img">
                        <a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value->product_id).'/'.$this->utility->safe_b64encode($value->product_weight_id)?>"><img src="<?=base_url().'public/images/'.$this->folder.'product_image/'.$value->image?>" alt=""></a>
                     </div> 
                     <div class="order-wrapper-text">
                        <h4><a href="<?=base_url().'products/productDetails/'.$this->utility->safe_b64encode($value->product_id).'/'.$this->utility->safe_b64encode($value->product_weight_id)?>"><?=$value->product_name?></a></h4>
                        <h5><?=$value->weight_no.' '.$value->weight_name?></h5>
                        <h3><?=$this->siteCurrency . number_format((float)$value->discount_price,'2','.','')?></h3>
                     </div> 
                  </div>
                  <?php } ?>
                  <!-- <div class="order-wrapper">
                     <div class="order-wrapper-img">
                      <a href="./product-details.html"><img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-2.png" alt=""></a>
                     </div> 
                     <div class="order-wrapper-text">
                        <h4><a href="./product-details.html">Saffron (Kesar)</a></h4>
                        <h5>500 Gms</h5>
                        <h3>₹398.00</h3>
                     </div> 
                  </div>
                  <div class="order-wrapper">
                     <div class="order-wrapper-img">
                      <a href="./product-details.html"><img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-3.png" alt=""></a>
                     </div> 
                     <div class="order-wrapper-text">
                        <h4><a href="./product-details.html">Pistachio (Pista)</a></h4>
                        <h5>500 Gms</h5>
                        <h3>₹398.00</h3>
                     </div> 
                  </div>
                  <div class="order-wrapper">
                     <div class="order-wrapper-img">
                      <a href="./product-details.html"><img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-4.png" alt=""></a>
                     </div> 
                     <div class="order-wrapper-text">
                        <h4><a href="./product-details.html">Pistachio (Pista)</a></h4>
                        <h5>500 Gms</h5>
                        <h3>₹398.00</h3>
                     </div> 
                  </div>
                  <div class="order-wrapper">
                     <div class="order-wrapper-img">
                      <a href="./product-details.html"><img src="<?=$this->theme_base_url?>/assets/images/feature-prodct-5.png" alt=""></a>
                     </div> 
                     <div class="order-wrapper-text">
                        <h4><a href="./product-details.html">Pistachio (Pista)</a></h4>
                        <h5>500 Gms</h5>
                        <h3>₹398.00</h3>
                     </div> 
                  </div> -->
               </div>

               <div class="coupon-code-wrapper">
                  <h3><span><i class="fa fa-tag" aria-hidden="true"></i></span>Have a coupon?<a href="">Click here to enter your code</a></h3>
               </div>

               <div class="have-code-part">
                <div class="input-group mb-3">
                  <label for="text">If you have a coupon code, please apply it below.</label><br>
                  <input type="text" class="form-control" placeholder="Coupon Code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text" id="basic-addon2">Apply</span>
                </div>
               </div>

               <div class="cart-totals-part">
                <table >
                  <thead class="head-title">
                    <tr>
                      <th colspan="2">Cart totals</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="cart-total-text-1">Subtotal</td>
                      <td class="cart-total-text-2">₹398.00</td>
                    </tr>
                    <tr>
                      <td class="cart-total-text-1">Delivery Charges</td>
                      <td class="cart-total-text-2">₹50.00</td>
                    </tr>
                    <tr>
                      <td class="cart-total-text-1">Delivery Charges</td>
                      <td class="cart-total-text-2">₹1134.00</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <a href="#" class="place-order-btn" id="myBtn" data-toggle="modal">Place order</a>

            <div class="our-secure-product">
                <div class="secure-product-wrapper">
                     <div class="icon">
                        <a href="#"><img src="<?=$this->theme_base_url?>/assets/images/ShieldCheck.svg" alt=""></a>
                     </div>
                     <div class="text">
                       <h3>100% Genuine Products</h3>
                     </div>
                </div>
                <div class="secure-product-wrapper">
                     <div class="icon">
                        <a href="#"><img src="<?=$this->theme_base_url?>/assets/images/Medal.svg" alt=""></a>
                     </div>
                     <div class="text">
                       <h3>Secure Payments</h3>
                     </div>
                </div>
            </div>
           </div>
        </div>
      </div>
    </div> 
  </section>

  <!-- =============place order popup=========== -->
  <div id="myModal" class="modal">
   <div class="container"> 
    <div class="modal-content">
      <span class="close"><i class="fa-regular fa-circle-xmark"></i></span>
      <div class="login-page">
        <div class="container">
          <img src="<?=$this->theme_base_url?>/assets/images/login-center-border-img.png" alt="" class="login-center-border-img">
            <div class="center-img">
                <img src="<?=$this->theme_base_url?>/assets/images/login-center-img.png" alt="">
            </div>
            <h2>Thank you.</h2>
            <h3>Your order has been received</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <h5>Your order number is <span>3598767</span></h5>

            <div class="continue-btn">
               <a href="./index.html">Continue Shopping</a>
            </div>
        </div>
      </div>
    </div>
   </div> 
  </div>