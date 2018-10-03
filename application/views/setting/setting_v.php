
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
                <form method="post" action="<?= site_url('SettingController/classes'); ?>">
                <div class="widget-main">
                    <div class="clearfix">
                        <div class=" col-md-6">
                            <label >Class Name<i class="red">*</i></label>
                            <input type="text" name="class_name" value="<?= set_value('class_name'); ?>" class="form-control ">
                        
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
        <!--Subject -->
        <div class="space-6"></div>
         <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">
                    <i class="ace-icon fa fa-asterisk"></i>
                    Subject Add
                </h4>
            </div>
            <div class="widget-body">
                <form method="post" action="<?= site_url('SettingController/subject');?>">
                <div class="widget-main">
                    <div class="clearfix">
                        <div class=" col-md-6">
                            <label >Class Name<i class="red">*</i></label>
                            <select class="form-control" name="course_id">
                                <option>--select--</option>
                                <?php
                                    foreach ($result as $key){
                                        echo "<option value=$key->id> $key->classes </option>";  
                                    }
                                ?>
                            </select>
                            <label >Subject Name<i class="red">*</i></label>
                            <input type="text" name="subject_name" value="<?= set_value('subject_name'); ?>" class="form-control ">
                        </div>
                        <div class="col-md-6" style="margin-top: 88px;">
                            <button type="reset" class="btn btn-info btn-xs"><i class="ace-icon fa fa-times">&nbsp; Cancel</i></button>
                            <button type="submit" class="btn btn-success btn-xs"><i class="ace-icon fa fa-check">&nbsp;Submit</i></button>

                        </div>
                    </div><hr>
                </div>
                </form>
            </div>
        </div>
        
        <!-- Paper -->
        <div class="space-6"></div>
         <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">
                    <i class="ace-icon fa fa-asterisk"></i>
                    Paper Add
                </h4>
            </div>
            <div class="widget-body">
                <form method="post" action="<?= site_url('SettingController/Addpaper');?>">
                <div class="widget-main">
                    <div class="clearfix">
                        <div class=" col-md-6">
                            <label >Class Name<i class="red">*</i></label>
                            <select class="form-control" name="course_id" id="class_id">
                                <option>--select--</option>
                                <?php
                                    foreach ($result as $key){
                                        echo "<option value=$key->id> $key->classes </option>";  
                                    }
                                ?>
                            </select>
                            <label >Subject Name<i class="red">*</i></label>
        <!-- Use ajax -->   <select class="form-control" name="subject_id" id="subjectResult"> 
                                <option>--select--</option>
                            </select>
                            <label >Paper<i class="red">*</i></label>
                            <input type="text" name="paper" class="form-control">
                        </div>
                        <div class="col-md-6" style="margin-top: 150px;">
                            <button type="reset" class="btn btn-info btn-xs"><i class="ace-icon fa fa-times">&nbsp; Cancel</i></button>
                            <button type="submit" class="btn btn-success btn-xs"><i class="ace-icon fa fa-check">&nbsp;Submit</i></button>

                        </div>
                    </div><hr>
                </div>
                </form>
            </div>
        </div> <!-- Paper Div-->
        
        <!-- Batch Div Start -->
        <div class="space-6"></div>
         <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">
                    <i class="ace-icon fa fa-asterisk"></i>
                    Batch Add
                </h4>
            </div>
            <div class="widget-body">
                <form method="post" action="<?= site_url('SettingController/Addbatch');?>">
                <div class="widget-main">
                    <div class="clearfix">
                        <div class=" col-md-6">
                            <label >Class Name<i class="red">*</i></label>
                            <select class="form-control" name="course_id" id="class_id2">
                                <option>--select--</option>
                                <?php
                                    foreach ($result as $key){
                                        echo "<option value=$key->id> $key->classes </option>";  
                                    }
                                ?>
                            </select>
                            <label >Subject Name<i class="red">*</i></label>
            <!-- Use ajax -->   <select class="form-control" name="subject_id" id="subjectResult2"> 
                                    <option>--select--</option>
                                </select>
                            <label >Paper<i class="red"></i></label>
                                <select class="form-control" name="paper_id" id="paperResult">
                                    <option>--select--</option>
                                </select>
                            <label >Batch<i class="red"></i></label>
                            <input type="text" name="batch" class="form-control">
                        </div>
                        <div class="col-md-6" style="margin-top: 210px;">
                            <button type="reset" class="btn btn-info btn-xs"><i class="ace-icon fa fa-times">&nbsp; Cancel</i></button>
                            <button type="submit" class="btn btn-success btn-xs"><i class="ace-icon fa fa-check">&nbsp;Submit</i></button>

                        </div>
                    </div><hr>
                </div>
                </form>
            </div>
        </div> <!-- Batch Div-->
        
        <div>
            <a class="btn btn-success" href="<?= site_url('SettingController/paper');?>">Add Paper</a>
        </div>
    </div> <!-- Setting page in main div left side-->

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
                    <form action="#" method="post" class="form-horizontal" role="form" autocomplete="off" onsubmit="return validateForm()">
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
        </div>  <!--Password div right side top-->
        
            <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">
                    <i class="ace-icon fa fa-user-secret"></i>
                    Class Details
                </h4>
            </div>
            <div class="widget-body">
                <div class="">
                    <form method="post" action="<?= site_url('SettingController/Addbatch');?>">
                <div class="widget-main">
                    <div class="clearfix">
                        <div class=" col-md-12">
                            <label >Class Name<i class="red">*</i></label>
                            <select class="form-control" name="course_id" id="class_show">
                                <option>--select--</option>
                                <?php
                                    foreach ($result as $key){
                                        echo "<option value=$key->id> $key->classes </option>";  
                                    }
                                ?>
                            </select>
                            <label >Subject Name<i class="red">*</i></label>
            <!-- Use ajax -->   <select class="form-control" name="subject_id" id="subjectResult_show"> 
                                    <option>--select--</option>
                                </select>
                            <label >Paper<i class="red"></i></label>
                                <select class="form-control" name="paper_id" id="paperResult_show">
                                    <option>--select--</option>
                                </select>
                            <label >Batch<i class="red"></i></label>
                                <select class="form-control" name="batch" id="batchResult_show">
                                    <option>--select--</option>
                                </select>
                        </div>
                        
                    </div><hr>
                </div>
                </form>
                </div>
            </div>
        </div><!-- show class subject and paper div-->
    </div>
   
</div><!-- Main div-->
<!-- Class Select then open subject-->
<script>
    $("#class_id").on('change',function(){
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/classid');?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#subjectResult").html(data);
            }
        });
    });
</script>

<!-- Subject Select then open paper-->
<script>
    $("#class_id2").on('change',function(){
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/classid');?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#subjectResult2").html(data);
            }
        });
    });
    
    $("#subjectResult2").on('change',function(){
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/subjectid');?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#paperResult").html(data);
            }
        });
    });
</script>

<!-- select then show details-->
<script>
    $("#class_show").on('change',function(){
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/classid');?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#subjectResult_show").html(data);
            }
        });
    });
    
    $("#subjectResult_show").on('change',function(){
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/subjectid');?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#paperResult_show").html(data);
            }
        });
    });
    
    $("#paperResult_show").on('change',function(){
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/paperid');?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#batchResult_show").html(data);
            }
        });
    });
</script>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>