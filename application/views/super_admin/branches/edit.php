  <style type="text/css">
    span.error{
      color: red;
    }
    @media (max-width: 575px){
     .basic-form .button-group a{
      margin-bottom: 8px !important;
    }
  }
</style>
<section class="new-customer background-blue-grey">
  <?php if($this->session->flashdata('myMessage') != ''){
    echo $this->session->flashdata('myMessage');
  } ?>
  <div class="container">
    <div class="row">
      <form id="editProfession" method="POST" action="<?=$FormAction?>" class="new-cust-form basic-form">
        <div class="invoice-title border-grey ">
          <h3 ><span><i class="far fa-file-alt"></i></span> Edit Branch</h3>
        </div>

        <div class="form-group mt-5">
          <label for="email" class="col-sm-2 col-form-label pl-0">Email</label>
          <div class="row">
            <div class="col-sm-9">
              <input type="text" name="email" class="form-control" placeholder="Email" value="<?=$editData[0]->email?>">
            </div>
          </div>
        </div>
       <!--  <div class="form-group">
          <label for="approved">selfPickupOpenClosingTiming</label>
          <div class="row">
            <div class="col-sm-9">
             <textarea><?=$editData[0]->selfPickupOpenClosingTiming?></textarea>
            </div>
          </div>
        </div> -->
        <div class="form-group">
          <label for="approved" class="col-sm-2 col-form-label pl-0">Store type</label>
          <div class="row">
            <div class="col-sm-9">
             <select class="form-control" name="store_type">
              <option value="">Select Store Type</option>
              <option value="grocery" <?=($editData[0]->store_type=='grocery') ? 'SELECTED' : '' ?>>Grocery</option>
              <option value="apparels&garments" <?=($editData[0]->store_type=='apparels&garments') ? 'SELECTED' : '' ?>>Apparels&Garments</option>
              <option value="furniture" <?=($editData[0]->store_type=='furniture') ? 'SELECTED' : '' ?>>Furniture</option>
              <option value="gift" <?=($editData[0]->store_type=='gift') ? 'SELECTED' : '' ?>>Gift</option>
              <option value="cake&bakery" <?=($editData[0]->store_type=='cake&bakery') ? 'SELECTED' : '' ?>>Cake&Bakery</option>
              <option value="kitchen" <?=($editData[0]->store_type=='kitchen') ? 'SELECTED' : '' ?>>Kitchen</option>
              <option value="jewellery" <?=($editData[0]->store_type=='jewellery') ? 'SELECTED' : '' ?>>Jewellery</option>
            </select>
          </div>
        </div>
      </div>
       <!--  <div class="form-group">
          <label for="webTitle" class="col-sm-2 col-form-label pl-0">Web Title</label>
          <div class="row">
            <div class="col-sm-9">
              <input type="text" name="webTitle" class="form-control" placeholder="webTitle" value="">
            </div>
          </div>
        </div> -->
        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_version">DeliveryBy </label>
              <div class="row">
                <div class="col-sm-9">
                  <select class="form-control" name="delivery_by">
                    <option value="0" <?=($editData[0]->delivery_by=='0') ? 'SELECTED' : '' ?>>Staff</option>
                    <option value="1" <?=($editData[0]->delivery_by=='1') ? 'SELECTED' : '' ?>>Delivery boy</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_version">selfPickUp</label>
              <div class="row">
                <div class="col-sm-9">
                  <select class="form-control" name="selfPickUp">
                    <option value="0" <?=($editData[0]->selfPickUp=='0') ? 'SELECTED' : '' ?>>Disable</option>
                    <option value="1" <?=($editData[0]->selfPickUp=='1') ? 'SELECTED' : '' ?>>Enabled</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_isforce">isOnlinePayment</label>
              <div class="row">
                <div class="col-sm-9">
                  <select class="form-control" name="isOnlinePayment">
                    <option value="0" <?=($editData[0]->isOnlinePayment=='0') ? 'SELECTED' : '' ?>>Disable</option>
                    <option value="1" <?=($editData[0]->isOnlinePayment=='1') ? 'SELECTED' : '' ?>>Enabled</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_isforce" >isCOD</label>
              <div class="row">
                <div class="col-sm-9">
                  <select class="form-control" name="isCOD">
                    <option value="0" <?=($editData[0]->isCOD=='0') ? 'SELECTED' : '' ?>>Disable</option>
                    <option value="1" <?=($editData[0]->isCOD=='1') ? 'SELECTED' : '' ?>>Enabled</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="android_version">Whatsapp</label>
              <div class="row">
                <div class="col-sm-9">
                  <select class="form-control" name="whatsappFlag">
                    <option value="0" <?=($editData[0]->whatsappFlag=='0') ? 'SELECTED' : '' ?>>Disable</option>
                    <option value="1" <?=($editData[0]->whatsappFlag=='1') ? 'SELECTED' : '' ?>>Enalble</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-3">
            <div class="form-group">
              <label for="ios_isforce">Display Dilivery Date&time</label>
              <div class="row">
                <div class="col-sm-9">
                  <select class="form-control" name="delivery_time_date">
                    <option value="0" <?=($editData[0]->delivery_time_date=='0') ? 'SELECTED' : '' ?>>Disable</option>
                    <option value="1" <?=($editData[0]->delivery_time_date=='1') ? 'SELECTED' : '' ?>>Enabled</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="button-group">
          <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-new">Save </button>
          <a href="<?=base_url().$this->url?>" style="display: inline-block;" class="btn btn-new">Cancle</a>
        </div>
      </div>
    </form>
  </div>
</div>

</section>
