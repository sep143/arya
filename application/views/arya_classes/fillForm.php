<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            <div class="page-header">
                <h1>
                    Fill Form Student
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        <?= AlertMsg();?>
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="">
                   
                    <form method="post" action="<?= site_url('EntryController/updateForm');?>" >
                         <div class="form-group col-md-12 col-xs-12">
                             <input type="hidden" name="id" value="<?= $row->id?>">
                             <input type="hidden" name="status" value="1">
                        <div class="col-md-12">
                            <label>Form ID<span class="red"><b>*</b></span></label>
                            <input type="text" class="form-control red" name="form_id" required="" value="<?= set_value('form_id',$row->form_id); ?>">
                            <div class="red"><?= form_error('form_id');?></div>
                        </div>
                        <div class="col-md-6">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="name" required="" value="<?= set_value('name',$row->name); ?>">
                            <div class="red"><?= form_error('name');?></div>
                        </div>
                        <div class="col-md-6">
                            <label>Father Name</label>
                            <input type="text" class="form-control" name="father_name" value="<?= set_value('father_name',$row->father_name)?>">
                            <div class="red"><?= form_error('father_name');?></div>
                        </div>
                        <div class="col-md-6">
                            <label>Student Mobile No.</label>
                            <input type="text" class="form-control" name="mobile" required="" maxlength="10" value="<?= set_value('mobile',$row->mobile)?>">
                            <div class="red"><?= form_error('mobile');?></div>
                        </div>
                        <div class="col-md-6">
                            <label>Father Mobile No.</label>
                            <input type="text" class="form-control" name="fmobile" required="" maxlength="10" value="<?= set_value('fmobile',$row->father_mobile)?>">
                            <div class="red"><?= form_error('mobile');?></div>
                        </div>
                        <div class="col-md-6">
                            <label>Whats App No.</label>
                            <input type="text" class="form-control" name="whatsApp" maxlength="10" value="<?= set_value('whatsApp',$row->whatsApp)?>">
                            <div class="red"><?= form_error('whatsApp');?></div>
                        </div>
                        <div class="col-md-6">
                            <label>Email ID</label>
                            <input type="email" class="form-control" name="email" value="<?= set_value('email',$row->email)?>">
                            <div class="red"><?= form_error('email');?></div>
                        </div>
                        <div class="col-md-12">
                            <label>Address</label>
                            <textarea class="form-control" rows="5" name="address">
                                <?= set_value('address',$row->address)?>
                            </textarea>
                        </div>
                        
                         
                             
                             <div class="col-sm-12" style="margin-top: 20px;">
                           
                            <table class="table table-bordered order-list th"  id="myTable"">
                                <thead>
                                    <tr>
                                        <td>Class</td>
                                        <td>Subject</td>
                                        <td>Paper</td>
                                        <td>Batch</td>
                                        <td style="width: 90px;">Bill No.</td>
                                        <td style="width: 150px;">Payment</td>
                                        
                                        <td><button type="button" id="addrow" class="btn btn-info btn-sm"><i class="fa fa-plus"></i></button></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><select class="form-control" id="class_show1" name="classes[]" required="">
                                                <option value="">--select--</option>
                                                <?php
                                                foreach ($classes as $row):
                                                    echo "<option value=$row->id> $row->classes</option>";
                                                endforeach;
                                                
                                                ?>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" id="subjectResult_show1" name="subject[]" required="">
                                                <option value="">--select--</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" id="paperResult_show1" name="paper[]" required="">
                                                <option value="">--select--</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" id="batchResult_show1" name="batch[]" required="">
                                                <option value="">--select--</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" name="bill[]" class="form-control">
                                        </td>
                                        <td>
                                            <select class="form-control" name="pay[]" id="">
                                                <option value="0">Non Payment</option>
                                                <option value="1">Payment</option>
                                            </select>
                                        </td>
                                        <td></td>
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


<script>
	$(document).ready(function () {
		var i = 2;
		var counter1 = 0;
		$("#addrow").on("click", function () {
			var counter = $('#myTable tr').length - 10;
			var newRow = $("<tr>");
			var cols = "";
			cols += '<td><select class="form-control" id="class_show'+i+'" name="classes[]"> <option value="{null}">--select--</option><?php foreach ($classes as $row): ?> <option value="<?= $row->id ?>"> <?= $row->classes ?> </option> <?php ;  endforeach;?></select></td>';
			cols += '<td><select class="form-control " id="subjectResult_show'+i+'" name="subject[]"> <option value="{null}">--select--</option></select></td>';
                        cols += '<td><select class="form-control " id="paperResult_show'+i+'" name="paper[]"><option value="{null}">--select--</option></select></td>';
                        cols += '<td><select class="form-control" id="batchResult_show'+i+'" name="batch[]"><option value="{null}">--select--</option></select></td>';
                        cols += '<td><input type="text" name="bill[]" class="form-control"></td>';
                        cols += '<td><select class="form-control" name="pay[]" ><option value="0">Non Payment</option><option value="1">Payment</option></select></td>';
                        
			cols += '<td><button type="button" id="ibtnDel" class="btn btn-danger btn-sm"><i class="fa fa-minus"></i></button></i></td>';
			i++;
                        newRow.append(cols);
			$("table.order-list").append(newRow);
			counter1++;
        
        $('select[id^="class_show"]').on('change',function(){
        var id=$(this).attr('id').slice(-1);
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/classid'); ?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#subjectResult_show"+id).html(data);
            }
        });
    });
    $('select[id^="subjectResult_show"]').on('change',function(){
    var id=$(this).attr('id').slice(-1);
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/subjectid'); ?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#paperResult_show"+id).html(data);
            }
        });
    });
     $('select[id^="paperResult_show"]').on('change',function(){
     var id=$(this).attr('id').slice(-1);
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/paperid'); ?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#batchResult_show"+id).html(data);
            }
        });
    });
			
		});
                
		$("table.order-list").on("click", "#ibtnDel", function (event) {
			i--;
			$(this).closest("tr").remove();

		});
                
                
        
	});
</script>

<!-- select then show details -->
<script>
    $('select[id^="class_show"]').on('change',function(){
        var id=$(this).attr('id').slice(-1);
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/classid');?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#subjectResult_show"+id).html(data);
            }
        });
    });
    $('select[id^="subjectResult_show"]').on('change',function(){
    var id=$(this).attr('id').slice(-1);
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/subjectid');?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#paperResult_show"+id).html(data);
            }
        });
    });
     $('select[id^="paperResult_show"]').on('change',function(){
     var id=$(this).attr('id').slice(-1);
        var searchvalue=$(this).val();
        $.ajax({
            url:'<?= site_url('SettingController/paperid');?>',
            type:'post',
            data:{'searchvalue':searchvalue},
            success: function (data){
                $("#batchResult_show"+id).html(data);
            }
        });
    });
</script>  
