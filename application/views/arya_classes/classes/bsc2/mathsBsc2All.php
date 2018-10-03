
<div class="main-content">
    <div class="main-content-inner">

        <div class="breadcrumbs ace-save-state responsive" id="breadcrumbs">
            <ul class="breadcrumb pull-left">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= site_url('SearchController/bsc2');?>">Back</a>
                </li>
                
                <li>Maths Bsc 2<sup>nd</sup> Year Students</li>
            </ul><!-- /.breadcrumb -->

            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Physics
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/physicsBsc2All');?>" >Physics All</a></li>
                    <li><a href="<?= site_url('SearchController/physicsBsc2P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsBsc2P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsBsc2P3');?>">Paper 3<sup>rd</sup></a></li>
                </ul>
            </div>
            
            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Chemistry
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/chemistryBsc2All');?>">Chemistry All</a></li>
                    <li><a href="<?= site_url('SearchController/chemistryBsc2P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryBsc2P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryBsc2P3');?>">Paper 3<sup>rd</sup></a></li>
                </ul>
            </div>
            
             <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Maths
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/mathsBsc2All');?>">Maths All</a></li>
                    <li><a href="<?= site_url('SearchController/mathsBsc2P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsBsc2P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsBsc2P3');?>">Paper 3<sup>rd</sup></a></li>
                </ul>
            </div>
        </div>
           

        <div class="page-content">
            <div class="page-header">

                <h1>Bsc 2 Year Maths Students</h1>
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
                                if($row->batch==113||$row->batch==118||$row->batch==123||$row->batch==128||$row->batch==133||$row->batch==138||$row->batch==143||$row->batch==148||$row->batch==153){
                                    echo "<td>A</td>";
                                }else if($row->batch==114||$row->batch==119||$row->batch==124||$row->batch==129||$row->batch==134||$row->batch==139||$row->batch==144||$row->batch==149||$row->batch==154){
                                    echo "<td>B</td>";
                                }else if($row->batch==115||$row->batch==120||$row->batch==125||$row->batch==130||$row->batch==135||$row->batch==140||$row->batch==145||$row->batch==150||$row->batch==155){
                                    echo "<td>C</td>";
                                }else if($row->batch==116||$row->batch==121||$row->batch==126||$row->batch==131||$row->batch==136||$row->batch==141||$row->batch==146||$row->batch==151||$row->batch==156){
                                    echo "<td>D</td>";
                                }else if($row->batch==117||$row->batch==122||$row->batch==127||$row->batch==132||$row->batch==137||$row->batch==142||$row->batch==147||$row->batch==152||$row->batch==157){
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