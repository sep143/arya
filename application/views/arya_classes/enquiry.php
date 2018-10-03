<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            <div class="page-header">
                <h1>
                    Student Enquiry
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        <?= AlertMsg();?>
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="">
                   
                    <form method="post" action="<?= site_url('EntryController/addEnquiry');?>" >
                         <div class="form-group col-md-12 col-xs-12">
                        <div class="col-md-6">
                            <label>Student Name <b class="red">*</b></label>
                            <input type="text" class="form-control" name="name" required="" value="<?= set_value('name')?>">
                            <div class="red"><?= form_error('name');?></div>
                        </div>
                        <div class="col-md-6">
                            <label>Father Name</label>
                            <input type="text" class="form-control" name="father_name" value="<?= set_value('father_name')?>">
                            <div class="red"><?= form_error('father_name');?></div>
                        </div>
                        
                        <div class="col-md-6">
                            <label>Student Mobile No. <b class="red">*</b></label>
                            <input type="text" class="form-control" name="mobile" required="" maxlength="10" value="<?= set_value('mobile')?>" >
                            <div class="red"><?= form_error('mobile');?></div>
                        </div>
                        <div class="col-md-6">
                            <label>Father Mobile No.</label>
                            <input type="text" class="form-control" name="father_mobile" value="<?= set_value('father_mobile')?>" maxlength="10">
                            <div class="red"><?= form_error('father_mobile');?></div>
                        </div>
                        <div class="col-md-6">
                            <label>Whats App No.</label>
                            <input type="text" class="form-control" name="whatsApp" maxlength="10" value="<?= set_value('whatsApp')?>" >
                            <div class="red"><?= form_error('whatsApp');?></div>
                        </div>
                        <div class="col-md-6">
                            <label>Email ID</label>
                            <input type="email" class="form-control" name="email" value="<?= set_value('email')?>">
                            <div class="red"><?= form_error('email');?></div>
                        </div>
                        <div class="col-md-12">
                            <label>Address</label>
                            <textarea class="form-control" rows="5" name="address">
                                <?= set_value('address')?>
                            </textarea>
                        </div>
                             <div class="col-md-12 col-xs-12" style="margin-top: 15px;">
                             <table class="table table-bordered order-list th">
                                <thead>
                                    <tr>
                                        <td>Class <b class="red">*</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><select class="form-control" id="class_show1" name="classes" required="">
                                                <option value="">--select--</option>
                                                <?php
                                                foreach ($classes as $row):
                                                    echo "<option value='$row->id'> $row->classes</option>";
                                                endforeach;
                                                
                                                ?>
                                            </select>
                                        </td>
                                        
                                    </tr>
                                </tbody>

                            </table>
                             </div>
                             <div class="col-md-12 col-xs-12" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-Default">Reset</button>
                        </div>
                     </div>
                    </form>
                   
                </div>
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div>

