Payment<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-money"></i>  <?php echo lang('payment_procedures'); ?>
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table "> 
                    <div class="clearfix no-print">
                        <a href="finance/addPaymentCategoryView">
                            <div class="btn-group">
                                <button id="" class="btn green">
                                    <i class="fa fa-plus-circle"></i> <?php echo lang('create_payment_procedure'); ?>
                                </button>
                            </div>
                        </a>
                        <button class="export no-print" onclick="javascript:window.print();">Print</button>  
                    </div>
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th><?php echo lang('id'); ?></th>
                                <th><?php echo lang('description'); ?></th>
                                <th><?php echo lang('code_procedure'); ?></th>
                                <th><?php echo lang('type'); ?></th>
                                <th><?php echo lang('price'); ?> ( <?php echo $settings->currency; ?> )</th>
                                <th><?php echo lang('doctors_commission'); ?></th>
                                <?php if ($this->ion_auth->in_group(array('admin', 'Accountant'))) { ?>
                                <th class="no-print"><?php echo lang('options'); ?></th>
                                <?php } ?>
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

                        <?php foreach ($categories as $category) { ?>
                        <tr class="">
                            <td><?php echo $category->id; ?></td>
                            <td><?php echo $category->category; ?></td>   
                            <td> <?php echo $category->description; ?></td>
                            <td> <?php
                            if ($category->type == 'unimed')
                            {

                                echo lang('unimed_plan');

                            } else if ($category->type == 'bradesco') 
                            {

                                echo lang('bradesco_plan');

                            } else if ($category->type == 'diagnostic') 
                            {

                                echo lang('diagnostic_test');

                            } else if ($category->type == 'allianz')
                            {

                                echo lang('allianz_plan');

                            } else if ($category->type == 'amil')
                            {

                                echo lang('amil_plan');

                            } else if ($category->type == 'sus')
                            {

                                echo lang('health_unic_system');

                            } else {
                                echo lang('');
                            }


                            ?>
                        </td>
                        <td> <?php echo $category->c_price; ?></td>
                        <td> <?php echo $category->d_commission; ?> %</td>
                        <?php if ($this->ion_auth->in_group(array('admin', 'Accountant'))) { ?>
                        <td class="no-print">
                            <a class="btn btn-info btn-xs editbutton" title="<?php echo lang('edit'); ?>" href="finance/editPaymentCategory?id=<?php echo $category->id; ?>"><i class="fa fa-edit"> </i></a>
                            <a class="btn btn-info btn-xs delete_button" title="<?php echo lang('delete'); ?>" href="finance/deletePaymentCategory?id=<?php echo $category->id; ?>" onclick="return confirm('Tem certeza de que deseja excluir este item?');"><i class="fa fa-trash-o"></i> </a>
                        </td>
                        <?php } ?>
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
