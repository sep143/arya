
<div class="col-md-10 ">
    <h3 style="margin-left: 20px;">Arya Classes Admin Panel</h3> 
    <?= AlertMsg();?>
    <div class="col-md-8 ">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">
                    <i class="ace-icon fa fa-asterisk"></i>
                    Class / Course Add
                </h4>
            </div>
            <div class="widget-body">
                <form method="post" action="#">
                <div class="widget-main">
                    <div class="clearfix">
                        <div class=" col-md-6">
                            <label >Class Name<i class="red">*</i></label>
                            <select class="form-control">
                                <?php
                                    foreach ($result as $row):
                                        if($row->class_id==1){
                                        echo "<option>11</option>";
                                        }
                                        if($row->class_id==2){
                                        echo "<option>12</option>";
                                        }
                                    endforeach;
                                ?>
                            </select>
                            <div class="space-6"></div>
                            <select class="form-control">
                                <?php
                                    foreach ($result as $row){
                                        echo "<option>$row->id</option>";
                                    }
                                ?>
                            </select>
                        
                        </div>
                        <div class="col-md-6" style="margin-top: 27px;">
                            <button type="reset" class="btn btn-info btn-xs"><i class="ace-icon fa fa-times">&nbsp; Cancel</i></button>
                            <button type="submit" class="btn btn-success btn-xs"><i class="ace-icon fa fa-check">&nbsp;Submit</i></button>

                        </div>
                    </div><hr>
                </div>
            </form>
            </div>
        </div>
      
    </div><!--First div of admin Setting-->

    <div class="col-lg-4">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">
                    <i class="ace-icon fa fa-user-secret"></i>
                    Change Password
                </h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <form action="<?php echo site_url('admin/Adminlog/ChangePassword'); ?>" method="post" class="form-horizontal" role="form" autocomplete="off" onsubmit="return validateForm()">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="form-field-1">Password <span class="red">*</span></label>
                                <input type="password" name="password" id="new_password" value="<?= set_value('password'); ?>" class="form-control" placeholder="Password">
                                <div class="error"><?= form_error('password'); ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="form-field-1">Confirm Password <span class="red">*</span></label>
                                <input type="password" name="confirm_password" id="confirm_password" value="<?= set_value('confirm_password'); ?>" class="form-control" placeholder="Confirm Password">
                                <div class="error pass_error"> <?php echo form_error('confirm_password'); ?></div>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-sm" data-dismiss="modal">
                                <i class="ace-icon fa fa-times"></i>
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-sm btn-primary">
                                <i class="ace-icon fa fa-check"></i>
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--Password div right side top-->
    <div style="padding: 90px;"></div>
    <div class="col-lg-4 pull-right">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">
                    <i class="ace-icon fa fa-clipboard"></i>
                    Logo Change
                </h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="clearfix">
                        <div class="control-group">
                            <div class="bootstrap-colorpicker">
                                <form method="post" action="#">
                                    <div class="form-group">
                                        <div class="">
                                            <input type="file" name="logo" class="form-control" accept="image/*" onchange="loadFile(event)">
                                            <div><!--error show to --></div>
                                        </div>

                                        <div style="" class=" pull-right">
                                            <button type="reset" class="btn btn-info btn-xs"><i class="ace-icon fa fa-times">&nbsp; Cancel</i></button>
                                            <button type="reset" class="btn btn-success btn-xs"><i class="ace-icon fa fa-check">&nbsp; Submit</i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- Logo div right side password under-->
</div><!-- Main div-->
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>