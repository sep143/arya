
<div class="main-content">
    <div class="main-content-inner">

        <div class="breadcrumbs ace-save-state responsive" id="breadcrumbs">
            <ul class="breadcrumb pull-left">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= site_url('SearchController/msc1');?>">Back</a>
                </li>
                 <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= site_url('SearchController/chemistryMsc1All');?>">Chemistry Msc Previous Year Students</a>
                </li>
                <li>Chemistry Paper 2<sup>nd</sup> Students</li>
            </ul><!-- /.breadcrumb -->

            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Physics
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/physicsMsc1All');?>" >Physics All</a></li>
                    <li><a href="<?= site_url('SearchController/physicsMsc1P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsMsc1P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsMsc1P3');?>">Paper 3<sup>rd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsMsc1P4');?>">Paper 4<sup>th</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsMsc1P5');?>">Paper 5<sup>th</sup></a></li>
                </ul>
            </div>
            
            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Chemistry
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/chemistryMsc1All');?>">Chemistry All</a></li>
                    <li><a href="<?= site_url('SearchController/chemistryMsc1P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryMsc1P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryMsc1P3');?>">Paper 3<sup>rd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryMsc1P4');?>">Paper 4<sup>th</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryMsc1P5');?>">Paper 5<sup>th</sup></a></li>
                </ul>
            </div>
            
             <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Maths
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/mathsMsc1All');?>">Maths All</a></li>
                    <li><a href="<?= site_url('SearchController/mathsMsc1P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsMsc1P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsMsc1P3');?>">Paper 3<sup>rd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsMsc1P4');?>">Paper 4<sup>th</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsMsc1P5');?>">Paper 5<sup>th</sup></a></li>
                </ul>
            </div>
        </div>
           

        <div class="page-content">
            <div class="page-header">

                <h1>Chemistry Msc Previous Year 2nd Paper B Batch Students
                     <div class="dropdown pull-right responsive">
                        <button class="btn btn-primary dropdown-toggle btn-xs" type="button" data-toggle="dropdown">C-P-2
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="<?= site_url('BatchController/chemistryMsc1P2A'); ?>">A</a></li>
                            <li><a href="<?= site_url('BatchController/chemistryMsc1P2B'); ?>">B</a></li>
                            <li><a href="<?= site_url('BatchController/chemistryMsc1P2C'); ?>">C</a></li>
                            <li><a href="<?= site_url('BatchController/chemistryMsc1P2D'); ?>">D</a></li>
                            <li><a href="<?= site_url('BatchController/chemistryMsc1P2E'); ?>">E</a></li>
                        </ul>
                    </div>
                </h1>
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
                        <td style="width: 10px;">Batch</td>
                        <td style="width: 10px;">pay</td>
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
                                 //Batch row
                                if($row->batch==203||$row->batch==208||$row->batch==213||$row->batch==218||$row->batch==223||$row->batch==228||$row->batch==233||$row->batch==238||$row->batch==243||$row->batch==248||$row->batch==253||$row->batch==258||$row->batch==263||$row->batch==268||$row->batch==273){
                                    echo "<td>A</td>";
                                }else if($row->batch==204||$row->batch==209||$row->batch==214||$row->batch==219||$row->batch==224||$row->batch==229||$row->batch==234||$row->batch==239||$row->batch==244||$row->batch==249||$row->batch==254||$row->batch==259||$row->batch==264||$row->batch==269||$row->batch==274){
                                    echo "<td>B</td>";
                                }else if($row->batch==205||$row->batch==210||$row->batch==215||$row->batch==220||$row->batch==225||$row->batch==230||$row->batch==235||$row->batch==240||$row->batch==245||$row->batch==250||$row->batch==255||$row->batch==260||$row->batch==265||$row->batch==270||$row->batch==275){
                                    echo "<td>C</td>";
                                }else if($row->batch==206||$row->batch==211||$row->batch==216||$row->batch==221||$row->batch==226||$row->batch==231||$row->batch==236||$row->batch==241||$row->batch==246||$row->batch==251||$row->batch==256||$row->batch==261||$row->batch==266||$row->batch==271||$row->batch==276){
                                    echo "<td>D</td>";
                                }else if($row->batch==207||$row->batch==212||$row->batch==217||$row->batch==222||$row->batch==227||$row->batch==232||$row->batch==237||$row->batch==242||$row->batch==247||$row->batch==252||$row->batch==257||$row->batch==262||$row->batch==267||$row->batch==272||$row->batch==277){
                                    echo "<td>E</td>";
                                }else{
                                    echo "<td>Null</td>";
                                }
                                //payment 
                                if($row->pay_status==1){
                                    echo "<td>P</td>";
                                }else if($row->pay_status==0){
                                    echo "<td>NP</td>";
                                }else{
                                    echo "Null";
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
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9,10,11]
            }, 
   			{
                "sExtends": "xls",
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9,10,11]
            },
           
            {
                "sExtends": "pdf",
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9,10,11]
            }
        ]
                }
            });
});
</script>