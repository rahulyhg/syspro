
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
             <i class="fa fa-user"></i> <?php echo lang('accountant'); ?>
         </header>
         <div class="panel-body">
            <div class="adv-table editable-table ">
                <div class="clearfix no-print">
                    <a data-toggle="modal" href="#myModal">
                        <div class="btn-group">
                            <button id="" class="btn green">
                              <i class="fa fa-plus-circle"></i>  <?php echo lang('add_accountant'); ?> 
                          </button>
                      </div>
                  </a>
                  <button class="export no-print" onclick="javascript:window.print();"><?php echo lang('print'); ?></button>  
              </div>
              <div class="space15"></div>
              <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                    <tr>
                        <th><?php echo lang('image'); ?></th>
                        <th><?php echo lang('name'); ?></th>
                        <th><?php echo lang('email'); ?></th>
                        <th><?php echo lang('address'); ?></th>
                        <th><?php echo lang('phone'); ?></th>
                        <th class="no-print"><?php echo lang('options'); ?></th>
                    </tr>
                </thead>
                <tbody>

                    <style>

                    .img_url{
                        height:20px;
                        width:20px;
                        background-size: contain; 
                        max-height:20px;
                        border-radius: 100px;
                    }

                </style>

                <?php foreach ($accountants as $accountant) { ?>
                <tr class="">
                    <td style="width:10%;"><img style="width:95%;" src="<?php echo $accountant->img_url; ?>"></td>
                    <td> <?php echo $accountant->name; ?></td>
                    <td><?php echo $accountant->email; ?></td>
                    <td class="center"><?php echo $accountant->address; ?></td>
                    <td><?php echo $accountant->phone; ?></td>
                    <td class="no-print">
                        <button type="button" class="btn btn-info btn-xs btn_width editbutton" title="<?php echo lang('edit'); ?>" data-toggle="modal" data-id="<?php echo $accountant->id; ?>"><i class="fa fa-edit"> </i></button>   
                        <a class="btn btn-info btn-xs btn_width delete_button" title="<?php echo lang('delete'); ?>" href="accountant/delete?id=<?php echo $accountant->id; ?>" onclick="return confirm('Tem certeza de que deseja excluir este item?');"><i class="fa fa-trash-o"> </i></a>
                    </td>
                </tr>
                <?php } ?>




            </tbody>
        </table>
    </div>
</div>
</section>
<!-- page end-->
</section>
</section>
<!--main content end-->
<!--footer start-->




<!-- Add Accountant Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> <?php echo lang('add_accountant'); ?></h4>
            </div>
            <div class="modal-body">
                <form role="form" action="accountant/addNew" method="post" enctype="multipart/form-data">
                    <div class="form-group">


                        <label for="exampleInputEmail1"><?php echo lang('name'); ?></label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value=''>

                    </div>
                    <div class="form-group">


                        <label for="exampleInputEmail1"><?php echo lang('password'); ?></label>
                        <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('email'); ?></label>
                        <input type="text" class="form-control" name="email" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('address'); ?></label>
                        <input type="text" class="form-control" name="address" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <script type="text/javascript">
                        stop = '';
                        function mascara( campo ) {
                            campo.value = campo.value.replace( /[^\d]/g, '' )
                            .replace( /^(\d\d)(\d)/, '($1) $2' )
                            .replace( /(\d{5})(\d)/, '$1-$2' );
                            if ( campo.value.length > 15 ) campo.value = stop;
                            else stop = campo.value;    
                        }
                    </script>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('phone'); ?></label>
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1" value='' placeholder="" onkeydown="mascara( this )" onkeyup="mascara( this )">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('image'); ?></label>
                        <input type="file" name="img_url">
                    </div>

                    <input type="hidden" name="id" value=''>


                    <button type="submit" name="submit" class="btn btn-info"><?php echo lang('submit'); ?></button>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Add Accountant Modal-->







<!-- Edit Event Modal-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> <?php echo lang('edit_accountant'); ?></h4>
            </div>
            <div class="modal-body">
                <form role="form" id="editAccountantForm" action="accountant/addNew" method="post" enctype="multipart/form-data">
                    <div class="form-group">


                        <label for="exampleInputEmail1"><?php echo lang('name'); ?></label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value='' placeholder="">

                    </div>
                    <div class="form-group">


                        <label for="exampleInputEmail1"><?php echo lang('password'); ?></label>
                        <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="********">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('email'); ?></label>
                        <input type="text" class="form-control" name="email" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('address'); ?></label>
                        <input type="text" class="form-control" name="address" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('phone'); ?></label>
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo lang('image'); ?></label>
                        <input type="file" name="img_url">
                    </div>

                    <input type="hidden" name="id" value=''>


                    <button type="submit" name="submit" class="btn btn-info"><?php echo lang('submit'); ?></button>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Edit Event Modal-->

<script src="common/js/codearistos.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".editbutton").click(function (e) {
            e.preventDefault(e);
                                                // Get the record's ID via attribute  
                                                var iid = $(this).attr('data-id');
                                                $('#editAccountantForm').trigger("reset");
                                                
                                                $.ajax({
                                                    url: 'accountant/editAccountantByJason?id=' + iid,
                                                    method: 'GET',
                                                    data: '',
                                                    dataType: 'json',
                                                }).success(function (response) {
                                                    // Populate the form fields with the data returned from server
                                                    $('#editAccountantForm').find('[name="id"]').val(response.accountant.id).end()
                                                    $('#editAccountantForm').find('[name="name"]').val(response.accountant.name).end()
                                                    $('#editAccountantForm').find('[name="password"]').val(response.accountant.password).end()
                                                    $('#editAccountantForm').find('[name="email"]').val(response.accountant.email).end()
                                                    $('#editAccountantForm').find('[name="address"]').val(response.accountant.address).end()
                                                    $('#editAccountantForm').find('[name="phone"]').val(response.accountant.phone).end()
                                                    $('#myModal2').modal('show');
                                                });
                                            });
    });
</script>
<script>
    $(document).ready(function () {
        $(".flashmessage").delay(3000).fadeOut(100);
    });
</script>
