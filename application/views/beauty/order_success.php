<section class="p-100 bg-cream">
  <div class="container">
  <?php if($status == 1){ ?>
  <!-- The Modal -->
    <div id="order_success" class="modal">
        <div class="container"> 
          <div class="modal-content">
            <span class="close"><i class="fa-regular fa-circle-xmark"></i></span>
            <div class="login-page">
              <div class="container">
                <img src="<?=$this->theme_base_url?>/assets/images/login-center-border-img.png" alt="" class="login-center-border-img">
                  <div class="center-img">
                      <img src="<?=$this->theme_base_url?>/assets/images/login-center-img.png" alt="">
                  </div>
                  <h2><?=$this->lang->line('Thanks for shopping')?>.</h2>
                  <h3><?=$this->lang->line('Order placed successfully')?></h3>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                  <h5 id="orderId"><?=$this->lang->line('Your Order No')?> : <?=$order_number?></h5>
                  <div class="continue-btn">
                    <a href="<?=base_url().'home'?>"><?=$this->lang->line('continue shopping')?></a>
                  </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
  <?php } ?>
  <?php if($status == '0'){ ?>
    <!-- The Modal -->
    <!-- =============Cancel order popup=========== -->
    <div id="myMopayment_faildal" class="modal">
      <div class="container">
        <div class="modal-content">
          <span class="close"><i class="fa-regular fa-circle-xmark"></i></span>
          <div class="login-page">
            <div class="container">
              <img src="<?=$this->theme_base_url?>/assets/images/login-center-border-img.png" alt="" class="login-center-border-img">
              <div class="center-img">
                <img src="<?=$this->theme_base_url?>/assets/images/login-center-img.png" alt="">
              </div>
              <h2><?=$this->lang->line('Payment Failed')?></h2>
              <!-- <h3>Sorry, Your Payment has been Canceled</h3> -->
              <p><?=$message?></p>
              
              <div class="continue-btn">
                <a href="<?=base_url().'home'?>">Try Again</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <?php } ?>
    
    </div>
</section>

 <input type="hidden" id="base_url" value="<?=base_url()?>">

 