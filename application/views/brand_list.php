<?php include('header.php');?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb">
                    <li class="active"><a href=""><i class="fa fa-home"></i> <a href="<?php echo base_url().'admin/index'; ?>">Home</a> / Brand</a></li>
                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
        <div id="msg">
            <?php if ($this->session->flashdata('msg') && $this->session->flashdata('msg') != '') { ?>
                <div class="alert alert-success fade in">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('msg');; ?>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <section class="panel">
                    <header class="panel-heading"> Brand</header>
                    <div class="panel-body">
                        <div class="adv-table">
                            <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="panel-body padding-zero" style="float: right">
                                    <a href="<?php echo base_url() . 'brand/brand_profile'; ?>" class="btn btn-primary">Add Brand</a>
                                    <a href="#" id="delete_user" class="btn btn-danger">Delete Brand</a>
                                </div>
                                <table class="display table table-bordered table-striped dataTable" id="example_brand"
                                       aria-describedby="example_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Rendering engine: activate to sort column ascending"
                                            style="width: 100px;"><input type="checkbox" class="checkboxMain">
                                        </th>
                                        
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 200px;">Brand Name
                                        </th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 200px;">Category Name
                                        </th>
                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example"
                                            rowspan="1" colspan="1"
                                            aria-label="Rendering engine: activate to sort column ascending"
                                            style="width: 100px;">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <!-- <tbody role="alert" aria-live="polite" aria-relevant="all">
                                    <?php foreach ($brand_result as $result){ 
                                         $category_id = explode(',',$result->category_id);
                                         $catname = '';
                                       
                                            foreach ($category_id as $key => $value) {
                                                  $cat_qu = $this->db->query("SELECT name as category_name FROM category WHERE id IN ('$value')");
                                                    $cat_result = $cat_qu->result();
                                                $catname .= $cat_result[0]->category_name.' , ';
                                            }
                                        $catname = rtrim($catname," , ");
                                        
                                    ?>
                                        <tr class="gradeX odd">
                                            <td class="hidden-phone">
                                                <?php if ($result->id) { ?>
                                                    <input type="checkbox" name="delete[]" id='iId' value="<?php echo $result->id; ?>" class="checkbox_user">
                                                <?php } ?>
                                            </td>                                            
                                            <td class="hidden-phone"><?php echo $result->name; ?></td>
                                            <td class="hidden-phone"><?php echo $catname; ?></td>
                                            <td>
                                               
                                                <a href="<?php echo base_url() . 'brand/brand_profile?id=' . $this->utility->encode($result->id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                 <a href="javascript:;" onclick="single_delete(<?php echo $result->id; ?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody> -->
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<!--main content end-->
<script src="<?php echo base_url(); ?>public/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

    setTimeout(function () { $('#msg').hide(); }, 4000);

    /*Single Delete Script*/
 function single_delete(value) {

       
                var id = value;
                $.ajax({
                    url: '<?php echo base_url().'brand/check_brand'; ?>' ,
                    dataType:'json',
                    data: {
                        id: id
                    },
                    success: function (data) {

                       if (data.status == 1) {
                           
                                brand_delete(id);

                        }else if(data.status == 2){
                            bootbox.alert("Brand is not deleted.. Please delete product.", function() {
                                // window.location.reload(true);
                            });
                        }
                        else {
                            alert('Failed to delete selected sote.');
                        }
                    },
                    error: function () {
                        alert('Failed to delete selected brand.');
                    }
                });
           
    }






    function brand_delete(value) {

        bootbox.confirm("Are you sure you want to delete ?" , function (confirmed) {
            if (confirmed == true) {
                var id = value;
                $.ajax({
                    url: '<?php echo base_url().'brand/single_delete_brand'; ?>' ,
                    data: {
                        id: id
                    },
                    success: function (data) {

                       if (data.status == 1) {
                            bootbox.alert("Brand has been deleted successfully.", function() {
                                window.location.reload(true);
                            });
                        }
                        else {
                            alert('Failed to delete selected sote.');
                        }
                    },
                    error: function () {
                        alert('Failed to delete selected brand.');
                    }
                });
            }
            else
            {
                window.location.reload(true);
            }
        });
    }

    $('#delete_user').click(function() {

        if($('.checkbox_user:checked').length == 0) {
            //alert("Select one record"); return false;
            bootbox.alert('Please select at least one record to delete');
            return;
        }
      

                var ids = [];
                $('.checkbox_user:checked').each(function() {
                    ids.push($(this).val());
                });
                $.ajax({
                    url: '<?php echo base_url().'brand/multi_delete_brand'; ?>',
                    dataType:'json',
                    data: { ids: ids.toString() },
                    success: function(data) {


                          var a = data.names;
                        if(data.status == 1) {


                            bootbox.confirm("Are you sure you want to delete ?" , function (confirmed) {
                                    if (confirmed == true) {

                                        $.ajax({
                                            url: '<?php echo base_url().'brand/multi_deleted_brand'; ?>',
                                            dataType:'json',
                                            data: { ids: ids.toString() },
                                            success: function(data) {

                                                bootbox.alert("Brand has been deleted successfully.", function() {
                                                    window.location.reload(true);
                                                });

                                            }
                                        })    
                                    }
                             });

                            
                        }else if(data.status == 2){
                            bootbox.alert("The brand '"+a+"', is maped with product. Please deselect it and try again.", function() {
                            });
                        }
                        else {
                            bootbox.alert('Failed to delete the selected records.');
                        }
                    },
                    error: function() {
                        bootbox.alert('Failed to delete the selected records.');
                    }
           
         
    });
    })

    $(document).ready(function(){
        $('.checkboxMain').on('click',function(){
            if(this.checked){
                $('.checkbox_user').each(function(){
                    this.checked = true;
                });
            }else{
                $('.checkbox_user').each(function(){
                    this.checked = false;
                });
            }
        });

        $(document).on('click','.checkbox_user',function() {
            if ($('.checkbox_user:checked').length == $('.checkbox_user').length) {
                $('.checkboxMain').prop('checked', true);
            } else {
                $('.checkboxMain').prop('checked', false);
            }
        });
    });

</script>
<?php include('footer.php'); ?>