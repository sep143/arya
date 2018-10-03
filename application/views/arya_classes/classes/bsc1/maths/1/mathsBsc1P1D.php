
<div class="main-content">
    <div class="main-content-inner">

        <div class="breadcrumbs ace-save-state responsive" id="breadcrumbs">
            <ul class="breadcrumb pull-left">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= site_url('SearchController/bsc1');?>">Back</a>
                </li>
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= site_url('SearchController/mathsBsc1All');?>">Maths Bsc 1<sup>st</sup> Year Students</a>
                </li>
                <li>Maths Paper 1<sup>st</sup> Students</li>
            </ul><!-- /.breadcrumb -->

            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Physics
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/physicsBsc1All');?>" >Physics All</a></li>
                    <li><a href="<?= site_url('SearchController/physicsBsc1P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsBsc1P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsBsc1P3');?>">Paper 3<sup>rd</sup></a></li>
                </ul>
            </div>
            
            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Chemistry
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/chemistryBsc1All');?>">Chemistry All</a></li>
                    <li><a href="<?= site_url('SearchController/chemistryBsc1P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryBsc1P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryBsc1P3');?>">Paper 3<sup>rd</sup></a></li>
                </ul>
            </div>
            
             <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Maths
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/mathsBsc1All');?>">Maths All</a></li>
                    <li><a href="<?= site_url('SearchController/mathsBsc1P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsBsc1P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsBsc1P3');?>">Paper 3<sup>rd</sup></a></li>
                </ul>
            </div>
        </div>
           

        <div class="page-content">
            <div class="page-header">

                <h1>Bsc 1 Year Maths 1st Paper D Batch Students
                    <div class="dropdown pull-right responsive">
                        <button class="btn btn-primary dropdown-toggle btn-xs" type="button" data-toggle="dropdown">M-P-1
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="<?= site_url('BatchController/mathsBsc1P1A'); ?>">A</a></li>
                            <li><a href="<?= site_url('BatchController/mathsBsc1P1B'); ?>">B</a></li>
                            <li><a href="<?= site_url('BatchController/mathsBsc1P1C'); ?>">C</a></li>
                            <li><a href="<?= site_url('BatchController/mathsBsc1P1D'); ?>">D</a></li>
                            <li><a href="<?= site_url('BatchController/mathsBsc1P1E'); ?>">E</a></li>
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
                                if($row->batch==68||$row->batch==73||$row->batch==78||$row->batch==83||$row->batch==88||$row->batch==93||$row->batch==98||$row->batch==103||$row->batch==108){
                                    echo "<td>A</td>";
                                }else if($row->batch==69||$row->batch==74||$row->batch==79||$row->batch==84||$row->batch==89||$row->batch==94||$row->batch==99||$row->batch==104||$row->batch==109){
                                    echo "<td>B</td>";
                                }else if($row->batch==70||$row->batch==75||$row->batch==80||$row->batch==85||$row->batch==90||$row->batch==95||$row->batch==100||$row->batch==105||$row->batch==110){
                                    echo "<td>C</td>";
                                }else if($row->batch==71||$row->batch==76||$row->batch==81||$row->batch==86||$row->batch==91||$row->batch==96||$row->batch==101||$row->batch==106||$row->batch==111){
                                    echo "<td>D</td>";
                                }else if($row->batch==72||$row->batch==77||$row->batch==82||$row->batch==87||$row->batch==92||$row->batch==97||$row->batch==102||$row->batch==107||$row->batch==112){
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