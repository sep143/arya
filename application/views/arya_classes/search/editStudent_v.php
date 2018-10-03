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
                   
                    <form method="post" action="<?= site_url('EntryController/studentDataUpdate/');?>" >
                         <div class="form-group col-md-12 col-xs-12">
                             <input type="hidden" name="id" value="<?= $row->id; ?>">
                             <input type="hidden" name="status" value="1">
                        <div class="col-md-12">
                            <label>Form ID<span class="red"><b>*</b></span></label>
                            <input type="text" class="form-control red" name="form_id" required="" value="<?= set_value('form_id',$row->form_id); ?>" disabled="">
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
                            <textarea class="form-control" rows="3" name="address">
                                <?= set_value('address',$row->address)?>
                            </textarea>
                        </div>
                           <div class="col-sm-12" style="margin-top: 20px;">
                             <div class="col-sm-12 col-lg-12 col-md-12 col-xs-12">
                                 <div>
                                     
                                     <table class="table table-bordered table-striped table-responsive" id="dataTable2">
                                         <thead>
                                             <tr>
                                                 <td></td>
                                                 <td>Class</td>
                                                 <td>Subject</td>
                                                 <td>Paper</td>
                                                 <td>Batch</td>
                                                 <td style="width: 50px;">Bill No.</td>
                                                 <td style="width: 50px;">Payment</td>
                                                 <td>Action</td>
                                             </tr>
                                         </thead>
                                         <?php if($student){ ?>
                                         <tbody>
                                             <?php
                                             $i=1;
                                             foreach ($student as $rr):
                                                 echo "<tr>";
                                             ?>
                                         <td> <input type="hidden" value="<?= $rr->id; ?>" name="subjectID[]"> </td>
                                             <?php
                                             //Class 
                                                 if($rr->class==1){
                                                     echo "<td>11</td>";
                                                 }else if($rr->class==2){
                                                     echo "<td>12</td>";
                                                 }else if($rr->class==3){
                                                    echo "<td>Bsc 1 Year</td>";
                                                 }else if($rr->class==4){
                                                     echo "<td>Bsc 2 Year</td>";
                                                 }else if($rr->class==5){
                                                     echo "<td>Bsc 3 Year</td>";
                                                 }else if($rr->class==6){
                                                     echo "<td>Msc Pre</td>";
                                                 }else if($rr->class==7){
                                                     echo "<td>Msc Final</td>";
                                                 }else if($rr->class==8){
                                                     echo "<td>IIT-JAM</td>";
                                                 }else if($rr->class==9){
                                                     echo "<td>NET-JRF</td>";
                                                 }
                                                 else{
                                                     echo "<td>Null</td>";
                                                 }
                                            //subject row
                                                    if ($rr->subject == 1) {
                                                        echo "<td>Physics</td>";
                                                    }
                                                    else if ($rr->subject == 2) {
                                                        echo "<td>Chemistry</td>";
                                                    }
                                                    else if ($rr->subject == 3) {
                                                        echo "<td>Maths</td>";
                                                    }
                                                    else if ($rr->subject == 4) {
                                                        echo "<td>Physics</td>";
                                                    }
                                                    else if ($rr->subject == 5) {
                                                        echo "<td>Chemistry</td>";
                                                    }
                                                    else if ($rr->subject == 6) {
                                                        echo "<td>Maths</td>";
                                                    }
                                                    else if ($rr->subject == 10) {
                                                        echo "<td>Physics</td>";
                                                    }
                                                    else if ($rr->subject == 11) {
                                                        echo "<td>Chemistry</td>";
                                                    }
                                                    else if ($rr->subject == 12) {
                                                        echo "<td>Maths</td>";
                                                    }else if ($rr->subject == 13) {
                                                        echo "<td>Physics</td>";
                                                    }
                                                    else if ($rr->subject == 14) {
                                                        echo "<td>Chemistry</td>";
                                                    }
                                                    else if ($rr->subject == 15) {
                                                        echo "<td>Maths</td>";
                                                    }else if ($rr->subject == 16) {
                                                        echo "<td>Physics</td>";
                                                    }
                                                    else if ($rr->subject == 17) {
                                                        echo "<td>Chemistry</td>";
                                                    }
                                                    else if ($rr->subject == 18) {
                                                        echo "<td>Maths</td>";
                                                    }else if ($rr->subject == 7) {
                                                        echo "<td>Physics</td>";
                                                    }
                                                    else if ($rr->subject == 8) {
                                                        echo "<td>Chemistry</td>";
                                                    }
                                                    else if ($rr->subject == 9) {
                                                        echo "<td>Maths</td>";
                                                    }else if ($rr->subject == 19) {
                                                        echo "<td>Physics</td>";
                                                    }
                                                    else if ($rr->subject == 20) {
                                                        echo "<td>Chemistry</td>";
                                                    }
                                                    else if ($rr->subject == 21) {
                                                        echo "<td>Maths</td>";
                                                    }else if ($rr->subject == 22) {
                                                        echo "<td>Physics</td>";
                                                    }
                                                    else if ($rr->subject == 23) {
                                                        echo "<td>Chemistry</td>";
                                                    }
                                                    else if ($rr->subject == 24) {
                                                        echo "<td>Maths</td>";
                                                    }else if ($rr->subject == 25) {
                                                        echo "<td>Physics</td>";
                                                    }
                                                    else if ($rr->subject == 26) {
                                                        echo "<td>Chemistry</td>";
                                                    }
                                                    else if ($rr->subject == 27) {
                                                        echo "<td>Maths</td>";
                                                    }
                                                    else{
                                                        echo "<td>Null</td>";
                                                    }
                                            //paper 
                                                 //paper in 11+12+iit+net
                                                if($rr->paper == 9||$rr->paper==12||$rr->paper==72||$rr->paper==75){
                                                    echo "<td>Physics 1</td>";
                                                }else if ($rr->paper == 10||$rr->paper==13||$rr->paper==73||$rr->paper==76) {
                                                    echo "<td>Chemistry 1</td>";
                                                }else if($rr->paper == 11||$rr->paper==14||$rr->paper==74||$rr->paper==77){
                                                    echo "<td>Maths 1</td>";
                                                }
                                               //paper in bsc 1+2+3
                                                else if(($rr->paper ==15||$rr->paper ==18||$rr->paper ==21||$rr->paper ==24||$rr->paper ==27||$rr->paper ==30||$rr->paper ==33||$rr->paper ==36||$rr->paper ==39)){
                                                    echo "<td>Paper I</td>";
                                                }else if (($rr->paper ==16||$rr->paper ==19||$rr->paper ==22||$rr->paper ==25||$rr->paper ==28||$rr->paper ==31||$rr->paper ==34||$rr->paper ==37||$rr->paper ==40)) {
                                                    echo "<td>Paper II</td>";
                                                }else if(($rr->paper ==17||$rr->paper ==20||$rr->paper ==23||$rr->paper ==26||$rr->paper ==29||$rr->paper ==32||$rr->paper ==35||$rr->paper ==38||$rr->paper ==41)){
                                                    echo "<td>Paper III</td>";
                                                } 
                                              //paper in msc 1+2
                                                else if(($rr->paper ==42||$rr->paper ==47||$rr->paper ==52||$rr->paper ==57||$rr->paper ==62||$rr->paper ==67)){
                                                    echo "<td>Paper I</td>";
                                                }else if (($rr->paper ==43||$rr->paper ==48||$rr->paper ==53||$rr->paper ==58||$rr->paper ==63||$rr->paper ==68)) {
                                                    echo "<td>Paper II</td>";
                                                }else if(($rr->paper ==44||$rr->paper ==49||$rr->paper ==54||$rr->paper ==59||$rr->paper ==64||$rr->paper ==69)){
                                                    echo "<td>Paper III</td>";
                                                }
                                                else if(($rr->paper ==45||$rr->paper ==50||$rr->paper ==55||$rr->paper ==60||$rr->paper ==65||$rr->paper ==70)){
                                                    echo "<td>Paper IV</td>";
                                                }
                                                else if(($rr->paper ==46||$rr->paper ==51||$rr->paper ==56||$rr->paper ==61||$rr->paper ==66||$rr->paper ==71)){
                                                    echo "<td>Paper V</td>";
                                                }
                                                else{
                                                    echo "<td>Null</td>";
                                                }
                                                //Batch
                                //11+12+iit+net
                                if($rr->batch==8||$rr->batch==13||$rr->batch==18||$rr->batch==23||$rr->batch==28||$rr->batch==33||$rr->batch==38||$rr->batch==43||$rr->batch==48||$rr->batch==53||$rr->batch==58||$rr->batch==63){
                                    echo "<td>A</td>";
                                }else if($rr->batch==9||$rr->batch==14||$rr->batch==19||$rr->batch==24||$rr->batch==29||$rr->batch==34||$rr->batch==39||$rr->batch==44||$rr->batch==49||$rr->batch==54||$rr->batch==59||$rr->batch==64){
                                    echo "<td>B</td>";
                                }else if($rr->batch==10||$rr->batch==15||$rr->batch==20||$rr->batch==25||$rr->batch==30||$rr->batch==35||$rr->batch==40||$rr->batch==45||$rr->batch==50||$rr->batch==55||$rr->batch==60||$rr->batch==65){
                                    echo "<td>C</td>";
                                }else if($rr->batch==11||$rr->batch==16||$rr->batch==21||$rr->batch==26||$rr->batch==31||$rr->batch==36||$rr->batch==41||$rr->batch==46||$rr->batch==51||$rr->batch==56||$rr->batch==61||$rr->batch==66){
                                    echo "<td>D</td>";
                                }else if($rr->batch==12||$rr->batch==17||$rr->batch==22||$rr->batch==27||$rr->batch==32||$rr->batch==37||$rr->batch==42||$rr->batch==47||$rr->batch==52||$rr->batch==57||$rr->batch==62||$rr->batch==67){
                                    echo "<td>E</td>";
                                }
                                //bsc 1 year batch
                                else if($rr->batch==68||$rr->batch==73||$rr->batch==78||$rr->batch==83||$rr->batch==88||$rr->batch==93||$rr->batch==98||$rr->batch==103||$rr->batch==108){
                                    echo "<td>A</td>";
                                }else if($rr->batch==69||$rr->batch==74||$rr->batch==79||$rr->batch==84||$rr->batch==89||$rr->batch==94||$rr->batch==99||$rr->batch==104||$rr->batch==109){
                                    echo "<td>B</td>";
                                }else if($rr->batch==70||$rr->batch==75||$rr->batch==80||$rr->batch==85||$rr->batch==90||$rr->batch==95||$rr->batch==100||$rr->batch==105||$rr->batch==110){
                                    echo "<td>C</td>";
                                }else if($rr->batch==71||$rr->batch==76||$rr->batch==81||$rr->batch==86||$rr->batch==91||$rr->batch==96||$rr->batch==101||$rr->batch==106||$rr->batch==111){
                                    echo "<td>D</td>";
                                }else if($rr->batch==72||$rr->batch==77||$rr->batch==82||$rr->batch==87||$rr->batch==92||$rr->batch==97||$rr->batch==102||$rr->batch==107||$rr->batch==112){
                                    echo "<td>E</td>";
                                }
                                //bsc 2 year batch
                                else if($rr->batch==113||$rr->batch==118||$rr->batch==123||$rr->batch==128||$rr->batch==133||$rr->batch==138||$rr->batch==143||$rr->batch==148||$rr->batch==153){
                                    echo "<td>A</td>";
                                }else if($rr->batch==114||$rr->batch==119||$rr->batch==124||$rr->batch==129||$rr->batch==134||$rr->batch==139||$rr->batch==144||$rr->batch==149||$rr->batch==154){
                                    echo "<td>B</td>";
                                }else if($rr->batch==115||$rr->batch==120||$rr->batch==125||$rr->batch==130||$rr->batch==135||$rr->batch==140||$rr->batch==145||$rr->batch==150||$rr->batch==155){
                                    echo "<td>C</td>";
                                }else if($rr->batch==116||$rr->batch==121||$rr->batch==126||$rr->batch==131||$rr->batch==136||$rr->batch==141||$rr->batch==146||$rr->batch==151||$rr->batch==156){
                                    echo "<td>D</td>";
                                }else if($rr->batch==117||$rr->batch==122||$rr->batch==127||$rr->batch==132||$rr->batch==137||$rr->batch==142||$rr->batch==147||$rr->batch==152||$rr->batch==157){
                                    echo "<td>E</td>";
                                }
                                //bsc 3 year
                                else  if($rr->batch==158||$rr->batch==163||$rr->batch==168||$rr->batch==173||$rr->batch==178||$rr->batch==183||$rr->batch==188||$rr->batch==193||$rr->batch==198){
                                    echo "<td>A</td>";
                                }else if($rr->batch==159||$rr->batch==164||$rr->batch==169||$rr->batch==174||$rr->batch==179||$rr->batch==184||$rr->batch==189||$rr->batch==194||$rr->batch==199){
                                    echo "<td>B</td>";
                                }else if($rr->batch==160||$rr->batch==165||$rr->batch==170||$rr->batch==175||$rr->batch==180||$rr->batch==185||$rr->batch==190||$rr->batch==195||$rr->batch==200){
                                    echo "<td>C</td>";
                                }else if($rr->batch==161||$rr->batch==166||$rr->batch==171||$rr->batch==176||$rr->batch==181||$rr->batch==186||$rr->batch==191||$rr->batch==196||$rr->batch==201){
                                    echo "<td>D</td>";
                                }else if($rr->batch==162||$rr->batch==167||$rr->batch==172||$rr->batch==177||$rr->batch==182||$rr->batch==187||$rr->batch==192||$rr->batch==197||$rr->batch==202){
                                    echo "<td>E</td>";
                                }
                                //msc pre batch
                                else if($rr->batch==203||$rr->batch==208||$rr->batch==213||$rr->batch==218||$rr->batch==223||$rr->batch==228||$rr->batch==233||$rr->batch==238||$rr->batch==243||$rr->batch==248||$rr->batch==253||$rr->batch==258||$rr->batch==263||$rr->batch==268||$rr->batch==273){
                                    echo "<td>A</td>";
                                }else if($rr->batch==204||$rr->batch==209||$rr->batch==214||$rr->batch==219||$rr->batch==224||$rr->batch==229||$rr->batch==234||$rr->batch==239||$rr->batch==244||$rr->batch==249||$rr->batch==254||$rr->batch==259||$rr->batch==264||$rr->batch==269||$rr->batch==274){
                                    echo "<td>B</td>";
                                }else if($rr->batch==205||$rr->batch==210||$rr->batch==215||$rr->batch==220||$rr->batch==225||$rr->batch==230||$rr->batch==235||$rr->batch==240||$rr->batch==245||$rr->batch==250||$rr->batch==255||$rr->batch==260||$rr->batch==265||$rr->batch==270||$rr->batch==275){
                                    echo "<td>C</td>";
                                }else if($rr->batch==206||$rr->batch==211||$rr->batch==216||$rr->batch==221||$rr->batch==226||$rr->batch==231||$rr->batch==236||$rr->batch==241||$rr->batch==246||$rr->batch==251||$rr->batch==256||$rr->batch==261||$rr->batch==266||$rr->batch==271||$rr->batch==276){
                                    echo "<td>D</td>";
                                }else if($rr->batch==207||$rr->batch==212||$rr->batch==217||$rr->batch==222||$rr->batch==227||$rr->batch==232||$rr->batch==237||$rr->batch==242||$rr->batch==247||$rr->batch==252||$rr->batch==257||$rr->batch==262||$rr->batch==267||$rr->batch==272||$rr->batch==277){
                                    echo "<td>E</td>";
                                }
                                //msc final batch
                                else if($rr->batch==278||$rr->batch==283||$rr->batch==288||$rr->batch==293||$rr->batch==298||$rr->batch==303||$rr->batch==308||$rr->batch==313||$rr->batch==318||$rr->batch==323||$rr->batch==333||$rr->batch==338||$rr->batch==343||$rr->batch==348||$rr->batch==353){
                                    echo "<td>A</td>";
                                }else if($rr->batch==279||$rr->batch==284||$rr->batch==289||$rr->batch==294||$rr->batch==299||$rr->batch==304||$rr->batch==309||$rr->batch==314||$rr->batch==319||$rr->batch==324||$rr->batch==334||$rr->batch==339||$rr->batch==344||$rr->batch==349||$rr->batch==354){
                                    echo "<td>B</td>";
                                }else if($rr->batch==280||$rr->batch==285||$rr->batch==290||$rr->batch==295||$rr->batch==300||$rr->batch==305||$rr->batch==310||$rr->batch==315||$rr->batch==320||$rr->batch==325||$rr->batch==335||$rr->batch==340||$rr->batch==345||$rr->batch==350||$rr->batch==355){
                                    echo "<td>C</td>";
                                }else if($rr->batch==281||$rr->batch==286||$rr->batch==291||$rr->batch==296||$rr->batch==301||$rr->batch==306||$rr->batch==311||$rr->batch==316||$rr->batch==321||$rr->batch==326||$rr->batch==336||$rr->batch==341||$rr->batch==346||$rr->batch==351||$rr->batch==356){
                                    echo "<td>D</td>";
                                }else if($rr->batch==282||$rr->batch==287||$rr->batch==292||$rr->batch==297||$rr->batch==302||$rr->batch==307||$rr->batch==312||$rr->batch==317||$rr->batch==322||$rr->batch==327||$rr->batch==337||$rr->batch==342||$rr->batch==347||$rr->batch==352||$rr->batch==357){
                                    echo "<td>E</td>";
                                }
                                else{
                                    echo "<td>Null</td>";
                                }
                                ?>
                                         
                                         <td><input type="text" class="" value="<?= set_value('bill2[]',$rr->bill) ;?>" name="bill2[]"></td>
                                         <td>
                                             <input type="text" class="" value="<?= set_value('pay2[]',$rr->pay_status) ;?>" name="pay2[]">
                                         </td>
                                         <td><button type="button" name="delete" id="<?= $rr->id ?>"  class="btn btn-warning btn-xs delete">Delete</button></td>
                                       <!--  <td><a class="btn btn-danger btn-xs" href="<?= site_url('EntryController/deletePaper/'.$rr->id)?>" onclick="return confirm('Are You Sure')">Delete</a></td> -->
                                             <?php
                                                echo "</tr>";
                                                 $i++;
                                             endforeach;
                                             ?>
                                         </tbody>
                                     </table>
                                     <?php }?>
                                 </div>
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
                                   <!--Select then open row and select option available-->
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
      
        $(document).on('click','.delete', function(){
            var user_id = $(this).attr('id');
            if(confirm("Are You Sure went to delete subject"))
            {
                $.ajax({
                    url:'<?= site_url('EntryController/deletePaper/'); ?>',
                    method:'POST',
                    data:{user_id:user_id},
                    success:function(data){
                        alert('Successfully Done');
                        //dataTable2.ajax.reload(data);
                        location.reload(data);
                    }
                });
            }else{
                return false;
            }
        });
    </script>

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
