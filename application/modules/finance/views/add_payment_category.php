<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                <?php
                if (!empty($category->id))
                    echo '<i class="fa fa-edit"></i> ' . lang('edit_payment_category');
                else
                    echo '<i class="fa fa-plus-circle"></i> ' . lang('create_payment_procedure');
                ?>
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">

                        <div class="col-lg-12">
                            <section class="panel">
                                <div class="panel-body">
                                    <?php echo validation_errors(); ?>
                                    <form role="form" action="finance/addPaymentCategory" method="post" enctype="multipart/form-data">
                                        <div class="form-group"> 
                                            <label for="exampleInputEmail1"><?php echo lang('code_procedure'); ?></label>
                                            <input type="text" class="form-control" name="category" id="exampleInputEmail1" value='<?php
                                            if (!empty($setval)) {
                                                echo set_value('category');
                                            }
                                            if (!empty($category->category)) {
                                                echo $category->category;
                                            }
                                            ?>' placeholder="">    
                                        </div> 

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('description'); ?></label>
                                            <input type="text" class="form-control" name="description" id="exampleInputEmail1" value='<?php
                                            if (!empty($setval)) {
                                                echo set_value('description');
                                            }
                                            if (!empty($category->description)) {
                                                echo $category->description;
                                            }
                                            ?>' placeholder="">
                                        </div>
                                        

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('type'); ?></label>
                                            <select class="form-control m-bot15" name="type" value=''>    
                                                <option value="unimed" <?php
                                                if (!empty($setval)) {
                                                    if (set_value('type') == 'unimed') {
                                                        echo 'selected';
                                                    }
                                                }
                                                if (!empty($category->type)) {
                                                    if ($category->type == 'unimed') {
                                                        echo 'selected';
                                                    }
                                                }
                                                ?> > <?php echo lang('unimed_plan'); ?> </option>

                                                <option value="bradesco" <?php
                                                if (!empty($setval)) {
                                                    if (set_value('type') == 'bradesco') {
                                                        echo 'selected';
                                                    }
                                                }
                                                if (!empty($category->type)) {
                                                    if ($category->type == 'bradesco') {
                                                        echo 'selected';
                                                    }
                                                }
                                                ?> > <?php echo lang('bradesco_plan'); ?> </option>

                                                <option value="allianz" <?php
                                                if (!empty($setval)) {
                                                    if (set_value('type') == 'allianz') {
                                                        echo 'selected';
                                                    }
                                                }
                                                if (!empty($category->type)) {
                                                    if ($category->type == 'allianz') {
                                                        echo 'selected';
                                                    }
                                                }
                                                ?> > <?php echo lang('allianz_plan'); ?> </option>

                                                <option value="amil" <?php
                                                if (!empty($setval)) {
                                                    if (set_value('type') == 'amil') {
                                                        echo 'selected';
                                                    }
                                                }
                                                if (!empty($category->type)) {
                                                    if ($category->type == 'amil') {
                                                        echo 'selected';
                                                    }
                                                }
                                                ?> > <?php echo lang('amil_plan'); ?> </option>

                                                <option value="sus" <?php
                                                if (!empty($setval)) {
                                                    if (set_value('type') == 'sus') {
                                                        echo 'selected';
                                                    }
                                                }
                                                if (!empty($category->type)) {
                                                    if ($category->type == 'sus') {
                                                        echo 'selected';
                                                    }
                                                }
                                                ?> > <?php echo lang('health_unic_system'); ?> </option>  

                                                <option value="" <?php
                                                if (!empty($setval)) {
                                                    if (set_value('type') == '') {
                                                        echo 'selected';
                                                    }
                                                }
                                                if (!empty($category->type)) {
                                                    if ($category->type == '') {
                                                        echo 'selected';
                                                    }
                                                }
                                                ?> > <?php echo lang(''); ?> </option>  
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('category'); ?> <?php echo lang('price'); ?></label>
                                            <input type="text" class="form-control" name="c_price" id="exampleInputEmail1" value='<?php
                                            if (!empty($setval)) {
                                                echo set_value('c_price');
                                            }
                                            if (!empty($category->c_price)) {
                                                echo $category->c_price;
                                            }
                                            ?>' placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo lang('doctors_commission'); ?> <?php echo lang('rate'); ?> (%)</label>
                                            <input type="text" class="form-control" name="d_commission" id="exampleInputEmail1" value='<?php
                                            if (!empty($setval)) {
                                                echo set_value('d_commission');
                                            }
                                            if (!empty($category->d_commission)) {
                                                echo $category->d_commission;
                                            }
                                            ?>' placeholder="">
                                        </div>

                                        <input type="hidden" name="id" value='<?php
                                        if (!empty($category->id)) {
                                            echo $category->id;
                                        }
                                        ?>'>
                                        <button type="submit" name="submit" class="btn btn-info"><?php echo lang('submit'); ?></button>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->
