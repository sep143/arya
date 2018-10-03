
<?php
/*
  $res_id = $_POST['res_id'];
  $taxdata = $conn->prepare("select * from tax_master");
  $taxdata->execute();
  $taxdata = $taxdata->fetchall(PDO::FETCH_OBJ);
  //Room Category
  $roomcatdata = $conn->prepare("select * from rooms_category");
  $roomcatdata->execute();
  $roomcatdata = $roomcatdata->fetchall(PDO::FETCH_OBJ);
  //Plan Master
  $plandata = $conn->prepare("select * from plan_master");
  $plandata->execute();
  $plandata = $plandata->fetchall(PDO::FETCH_OBJ);
 */
?>


<table style="width:100%" align="center" class="table table-bordered order-list th"  id="myTable"  >
    <thead>
        <tr>
            <th>S.NO</th>
            <th >Room Category<span class="required">*</span></th>
            <th >Room No.<span class="required">*</span></th>
            <th >Rate<span class="required">*</span></th>
            <th>Plan</th>
            <td>Tax Mode</td>
            <td>Tax %</td>
            <th><button type="button" id="addrow" class="btn btn-info btn-xs"><i class="fa fa-fw fa-plus"></i></button></th>
        </tr>
    </thead>
    
    <tr>
        <td>1</td>
        <td><select name="room_cat[]" class="form-control common showclass" id="roomtype_" required disabled="disabled">
                <option value="">Select Room Category</option>
                
            </select><input type="hidden" class="common" name="copyroom_cat[]" value="" id="copyroomtype_" required/></td>
        <td><select type="text" name="room_no[]" id="roomno_" class="form-control common showclass" required disabled="disabled">
                <option value="">Select Room No</option>
                <option selected="selected"></option>
            </select><input type="hidden" name="copyroom_no[]" value="" class="common" id="copyroomno_" required /></td>
        <td><input type="text" name="rate[]" class="form-control common ratenum" value="" id="rate_" required>
            <input type="hidden" name="ids[]" class="form-control" value="" ></td>
        <td><select type="text" name="plan[]" class="form-control"  >
                <option value="">Select Plan</option>
               </select></td>
        <td><select name="tax_mode[]"  class="form-control">
                <option value="0" >Inclusive</option>
                <option value="1"  >Exclusive</option>
            </select>
        </td>
        <td><select name="tax_per[]" class="form-control">
                <option>0</option>
                
            </select></td>
        <td><button type="button" id="ibtnDel1" class="btn btn-danger btn-xs" onclick="deletroom();"><i class="fa fa-fw fa-minus"></i></button></td>
    </tr>
    
        <tr>
            <td>1</td>
            <td><input type="hidden" name="ids[]" class="form-control" value="novalue" ><select name="room_cat[]" class="form-control common showclass" id="roomtype_" required>
                    <option value="">Select Room Category</option>
   
                </select><input type="hidden" class="common" name="copyroom_cat[]" id="copyroomtype_" required/></td>
            <td><select type="text" name="room_no[]"  id="roomno_" class="form-control common showclass" required>
                    <option value="">Select Room No</option>
                </select><input type="text" name="copyroom_no[]" class="common form-control" id="copyroomno_" style="display:none" /></td>
            <td><input type="text" name="rate[]" class="form-control common ratenum" id="rate_" required="required">
                <input type="hidden"  id="insertid_" /></td>
            <td><select type="text" name="plan[]" class="form-control"  >
                    <option value="">Select Plan</option>
    </select></td>
            <td><select name="tax_mode[]"  class="form-control">
                    <option value="0" selected>Inclusive</option>
                    <option value="1">Exclusive</option>
                </select>
            </td>
            <td><select name="tax_per[]" class="form-control">
                    <option>0</option>
        
                </select></td>
            <td><button type="button" id="ibtnDel" class="btn btn-danger btn-xs" onClick="deleteroom(11);"><i class="fa fa-fw fa-minus"></i></button></td>
        </tr>
   
    <script>
        $(document).ready(function() {
            var i =<?php echo $i; ?>;
            var j =<?php echo $j; ?>;
            var counter1 = 0;
            $("#addrow").on("click", function() {
                var counter = $('#myTable tr').length - 10;
                var newRow = $("<tr>");
                var cols = "";
                cols += '<td>' + i + '</td>';
                cols += '<td><input type="hidden" name="ids[]" class="form-control" value="novalue" ><select type="text" name="room_cat[]" class="form-control common showclass" id=roomtype_' + j + ' required><option value="">Select Room Category</option><?php foreach ($roomcatdata as $catrow): echo "<option value=$catrow->id>$catrow->room_type</option>";
endforeach; ?>
                        < /select><input type="hidden" name="copyroom_cat[]" id=copyroomtype_'+j+' class="form-control common" required ></td > ';
                cols += '<td><select name="room_no[]" class="form-control common showclass" id=roomno_' + j + ' required><option value="">Select Room No</option></select><input type="hidden"  name="copyroom_no[]" id=copyroomno_' + j + ' class="form-control common" required ><input type="hidden"  id="insertid_' + j + '" /></td>';
                cols += '<td><input type="text" name="rate[]" class="form-control common ratenum" id=rate_' + j + ' required="required"></td>';
                cols += '<td><select type="text" name="plan[]" class="form-control" ><option value="">Select Plan</option><?php foreach ($plandata as $planrow):
    echo "<option >$planrow->plan_name</option>";
endforeach;
?></select></td>';
                cols += '<td><select name="tax_mode[]"  class="form-control"><option value="0" >Inclusive</option><option value="1">Exclusive</option></select></td>';
                cols += '<td><select name="tax_per[]" class="form-control"><option>0</option><?php foreach ($taxdata as $taxrow):
    echo"<option>$taxrow->tax</option>";
endforeach;
?></select></td>';
                cols += '<td><button type="button" id="ibtnDel" class="btn btn-danger btn-xs" onclick="deleteroom(' + j + ')"><i class="fa fa-fw fa-minus"></i></button></td>';
                i++;
                j++;
                newRow.append(cols);
                $("table.order-list").append(newRow);
                $('select[id^="roomtype_"]').on('change', function()
                {
                    var id = $(this).attr('id').slice(-2);
                    var room_id = $(this).val();
                    var resid = '<?php echo $res_id; ?>';
                    var checkin = $("#checkin").val();
                    var checkout = $("#checkout").val();
                    //var selectroom = $('select[name="room_no[]"]').map(function(){return $(this).val();}).get();
                    $.ajax
                            ({
                                url: "get-room-rate-ajax.php",
                                dataType: "json",
                                type: 'POST',
                                data: {'room_id': room_id, 'checkin': checkin, 'checkout': checkout},
                                success: function(data)
                                {
                                    //$("#rate_"+id).val(data);
                                    rate = data["rate"], $("#rate_" + id).val(rate), nums = data["nums"]
                                    if (nums <= 0)
                                    {
                                        alert("No Room Available for this Category");
                                        $("#rate_" + id).val('');
                                        $("#roomtype_" + id).val('');
                                    }
                                }
                            });
                    $.ajax
                            ({
                                url: "get-room-no-ajax.php",
                                type: 'POST',
                                data: {'resid': resid, 'room_id': room_id, 'checkin': checkin, 'checkout': checkout},
                                success: function(data)
                                {
                                    //alert(data);
                                    //$("#demo").html(data);
                                    $("#roomno_" + id).html(data);
                                }
                            });
                    return false;
                });
                $('select[id^="roomno_"]').on('change', function()
                {
                    var id = $(this).attr('id').slice(-2);
                    var roomtype = $("#roomtype_" + id).val();
                    $("#copyroomtype_" + id).val(roomtype);
                    var roomno = $("#roomno_" + id).val();
                    $("#copyroomno_" + id).val(roomno);
                    $("#roomno_" + id).attr('disabled', true);
                    $("#roomtype_" + id).attr('disabled', true);
                });//For Rate
                $(document).ready(function() {
                    $(".ratenum").keydown(function(event) {
                        // Allow only backspace and delete
                        if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 190 || event.keyCode == 37 || event.keyCode == 39 || event.keyCode == 110) {
                            // let it happen, don't do anything
                        }
                        else {
                            // Ensure that it is a number and stop the keypress
                            if ((event.keyCode < 95 || event.keyCode > 105) && (event.keyCode < 48 || event.keyCode > 57)) {
                                event.preventDefault();
                            }
                        }
                    });
                });
                $('select[id^="roomno_"]').on('change', function()
                {
                    var res_id =<?php echo $res_id; ?>;
                    var checkin = $("#checkin").val();
                    var checkout = $("#checkout").val();
                    var roomno = $(this).val();
                    var id = $(this).attr('id').slice(-2);
                    var roomtype = $("#roomtype_" + id).val();
                    $.ajax
                            ({
                                url: "pre_insert_res.php",
                                type: 'POST',
                                data: {'roomno': roomno, 'roomtype': roomtype, 'res_id': res_id, 'checkin': checkin, 'checkout': checkout},
                                success: function(data)
                                {
                                    $("#insertid_" + id).val(data);
                                }
                            });
                    return false;
                });
                counter1++;
            });
            $("table.order-list").on("click", "#ibtnDel", function(event) {
                i--;
                $(this).closest("tr").remove();
                calculateGrandTotal();
            });
        });
    </script>
</table>

<!------------------------------------------>
<script>
    $('select[id^="roomno_"]').on('change', function()
    {
        var res_id =<?php echo $res_id; ?>;
        var checkin = $("#checkin").val();
        var checkout = $("#checkout").val();
        var roomno = $(this).val();
        var id = $(this).attr('id').slice(-2);
        var roomtype = $("#roomtype_" + id).val();
        $.ajax
                ({
                    url: "pre_insert_res.php",
                    type: 'POST',
                    data: {'roomno': roomno, 'roomtype': roomtype, 'res_id': res_id, 'checkin': checkin, 'checkout': checkout},
                    success: function(data)
                    {
                        $("#insertid_" + id).val(data);
                    }
                });
        return false;
    });
    function deleteroom(id)
    {
        var id = id;
        var insertid = $("#insertid_" + id).val();
        $.ajax
                ({
                    url: "delete_pre_insert_res.php",
                    type: 'POST',
                    data: {'insertid': insertid},
                    success: function(data)
                    {
                    }
                });
        return false;
    }
</script>
