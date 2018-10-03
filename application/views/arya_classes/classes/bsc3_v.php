
<div class="main-content">
    <div class="main-content-inner">

        <div class="breadcrumbs ace-save-state responsive" id="breadcrumbs">
            <ul class="breadcrumb pull-left">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Dashboard</a>
                </li>
                <li>Bsc 3<sup>rd</sup> Year Students</li>
            </ul><!-- /.breadcrumb -->

            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Physics
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/physicsBsc3All');?>" >Physics All</a></li>
                    <li><a href="<?= site_url('SearchController/physicsBsc3P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsBsc3P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsBsc3P3');?>">Paper 3<sup>rd</sup></a></li>
                </ul>
            </div>
            
            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Chemistry
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/chemistryBsc3All');?>">Chemistry All</a></li>
                    <li><a href="<?= site_url('SearchController/chemistryBsc3P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryBsc3P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryBsc3P3');?>">Paper 3<sup>rd</sup></a></li>
                </ul>
            </div>
            
             <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Maths
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/mathsBsc3All');?>">Maths All</a></li>
                    <li><a href="<?= site_url('SearchController/mathsBsc3P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsBsc3P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsBsc3P3');?>">Paper 3<sup>rd</sup></a></li>
                </ul>
            </div>
        </div>


        <div class="page-content">
            <div class="page-header">

                <h1>Bsc 3rd Year Students</h1>
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
                                if ($row->subject == 16) {
                                    echo "<td>Physics</td>";
                                }
                                else if ($row->subject == 17) {
                                    echo "<td>Chemistry</td>";
                                }
                                else if ($row->subject == 18) {
                                    echo "<td>Maths</td>";
                                }else{
                                    echo "<td>Null</td>";
                                }
                                //paper row
                                if(($row->paper ==33||$row->paper ==36||$row->paper ==39)){
                                    echo "<td>Paper I</td>";
                                }else if (($row->paper ==34||$row->paper ==37||$row->paper ==40)) {
                                    echo "<td>Paper II</td>";
                                }else if(($row->paper ==35||$row->paper ==38||$row->paper ==41)){
                                    echo "<td>Paper III</td>";
                                } else{
                                    echo "<td>Null</td>";
                                }
                                
                                 //Batch row
                                if($row->batch==158||$row->batch==163||$row->batch==168||$row->batch==173||$row->batch==178||$row->batch==183||$row->batch==188||$row->batch==193||$row->batch==198){
                                    echo "<td>A</td>";
                                }else if($row->batch==159||$row->batch==164||$row->batch==169||$row->batch==174||$row->batch==179||$row->batch==184||$row->batch==189||$row->batch==194||$row->batch==199){
                                    echo "<td>B</td>";
                                }else if($row->batch==160||$row->batch==165||$row->batch==170||$row->batch==175||$row->batch==180||$row->batch==185||$row->batch==190||$row->batch==195||$row->batch==200){
                                    echo "<td>C</td>";
                                }else if($row->batch==161||$row->batch==166||$row->batch==171||$row->batch==176||$row->batch==181||$row->batch==186||$row->batch==191||$row->batch==196||$row->batch==201){
                                    echo "<td>D</td>";
                                }else if($row->batch==162||$row->batch==167||$row->batch==172||$row->batch==177||$row->batch==182||$row->batch==187||$row->batch==192||$row->batch==197||$row->batch==202){
                                    echo "<td>E</td>";
                                }else{
                                    echo "<td>Null</td>";
                                }
                                //payments
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