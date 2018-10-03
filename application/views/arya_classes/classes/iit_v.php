
<div class="main-content">
    <div class="main-content-inner">

        <div class="breadcrumbs ace-save-state responsive" id="breadcrumbs">
            <ul class="breadcrumb pull-left">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Dashboard</a>
                </li>
                <li>IIT Student</li>
                
            </ul><!-- /.breadcrumb -->

            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Physics
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/PnonPayIIT');?>" >Non Payment</a></li>
                    <li><a href="<?= site_url('SearchController/PpayIIT');?>">Payment</a></li>
                    <li><a href="<?= site_url('SearchController/physicsIIT');?>">All</a></li>
                </ul>
            </div>
            
            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Chemistry
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/CnonPayIIT');?>">Non Payment</a></li>
                    <li><a href="<?= site_url('SearchController/CpayIIT');?>">Payment</a></li>
                    <li><a href="<?= site_url('SearchController/chemistryIIT');?>">All</a></li>
                </ul>
            </div>
            
             <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Maths
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/MnonPayIIT');?>">Non Payment</a></li>
                    <li><a href="<?= site_url('SearchController/MpayIIT');?>">Payment</a></li>
                    <li><a href="<?= site_url('SearchController/mathsIIT');?>">All</a></li>
                </ul>
            </div>
        </div>


        <div class="page-content">
            <div class="page-header">

                <h1>IIT Students</h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="">
                    <table class="table table-bordered table-hover table-responsive" id="dataTables">
                        <thead>
                        <td style="width: 5px;">S.No.</td>
                        <td style="width: 5px;">ID</td>
                        <td style="width: 5px;">Form ID</td>
                        <td style="width: 100px;">Name</td>
                        <td style="width: 100px;">Father Name</td>
                        <td style="width: 50px;">Mobile No.</td>
                        <td style="width: 50px;">WhatsApp No.</td>
                        <td style="width: 50px;">Father Mo.</td>
                        <td style="width: 100px;">Email ID</td>
                        <td style="width: 150px;">Address</td>
                        <td style="width: 10px;">Subject</td>
                        <td style="width: 10px;">Paper</td>
                        <td style="width: 10px;">Batch</td>
                        <td style="width: 10px;">Pay</td>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($result as $row) {
                                echo "<tr>";
                                echo "<td>$i</td>";
                                echo "<td>$row->student_id</td>";
                                echo "<td>$row->form_id</td>";
                                echo "<td>$row->name</td>";
                                echo "<td>$row->father_name</td>";
                                echo "<td>$row->mobile</td>";
                                echo "<td>$row->whatsApp</td>";
                                echo "<td>$row->father_mobile</td>";
                                echo "<td>$row->email</td>";
                                echo "<td>$row->address</td>";
                                //subject row
                                if ($row->subject == 22) {
                                    echo "<td>Physics</td>";
                                }
                                else if ($row->subject == 23) {
                                    echo "<td>Chemistry</td>";
                                }
                                else if ($row->subject == 24) {
                                    echo "<td>Maths</td>";
                                }else{
                                    echo "<td>Null</td>";
                                }
                                //paper row
                                if($row->paper == 72){
                                    echo "<td>Physics 1</td>";
                                }else if ($row->paper == 73) {
                                    echo "<td>Chemistry 1</td>";
                                }else if($row->paper == 74){
                                    echo "<td>Maths 1</td>";
                                } else{
                                    echo "<td>Null</td>";
                                }
                                
                                  //Batch row
                                if($row->batch==38||$row->batch==43||$row->batch==48){
                                    echo "<td>A</td>";
                                }else if($row->batch==39||$row->batch==44||$row->batch==49){
                                    echo "<td>B</td>";
                                }else if($row->batch==40||$row->batch==45||$row->batch==50){
                                    echo "<td>C</td>";
                                }else if($row->batch==41||$row->batch==46||$row->batch==51){
                                    echo "<td>D</td>";
                                }else if($row->batch==42||$row->batch==47||$row->batch==52){
                                    echo "<td>E</td>";
                                }else{
                                    echo "<td>Null</td>";
                                }
                                //payment 
                                if($row->pay_status == 1){
                                    echo "<td>P</td>";
                                }else if($row->pay_status == 0){
                                    echo "<td>NP</td>";
                                }
                                echo "</tr>";
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div>

<?php datatable(); ?>
<script>
$(document).ready(function() {
            $('#dataTables').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "<?php echo base_url(); ?>theme/dataTables/swf/copy_csv_xls_pdf.swf",
                    "aButtons": [
            {
               "sExtends": "copy",
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9,10,11,12,13]
            }, 
   			{
                "sExtends": "xls",
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9,10,11,12,13]
            },
           
            {
                "sExtends": "pdf",
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9,10,11,12,13]
            }
        ]
                }
            });
});
</script>