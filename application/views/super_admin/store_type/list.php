<div class="row">
 <div class="col-12 col-sm-12 col-lg-12 text-right mb-3">
	<a class="btn btn-primary" href="<?=base_url().$this->url.'add'?>">Add</a>
</div> 
</div>
    <div class="row">
      <div class="col-12 col-sm-12 col-lg-12">
      <?php if($this->session->flashdata('myMessage') != ''){
        echo $this->session->flashdata('myMessage');
      } ?>
        <input type="hidden" name="" id="base_url" value="<?=base_url()?>">
              <div class="card">
                <div class="card-header title-search">
                  <h4>Store type</h4>
              <form class="form-inline">
                <!-- <div class="search-element"> -->
                 <!--  <input class="form-control" type="search" id="search" placeholder="Search" aria-label="Search" data-width="200" style="width: 200px;">
                  <button class="btn" type="button">
                    <i class="fas fa-search"></i>
                  </button> -->
                <!-- </div> -->
              </form>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped" id="profession">
                      <thead>
                        <tr>
                          <th>S.NO</th>
                          <th>Name</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody >
                      <?php
                        foreach ($getStore as $key => $value) { ?>
                      <tr>
                        <td><?=$key+1?></td>
                        <td><?=$value->name?></td>
                        <td>
                          <a  href="<?=base_url().$this->url.'edit/'.$this->utility->safe_b64encode($value->id)?>" class="btn btn-danger btn-action"  data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"  style="color: white"></i></a> 
                          <a  href="<?=base_url().$this->url.'delete/'.$this->utility->safe_b64encode($value->id)?>" class="btn btn-danger btn-action d-none"  data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-trash" style="color: white"></i></a> 
                      </tr> 
                       <?php } ?>
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>

           

           
    </div>
