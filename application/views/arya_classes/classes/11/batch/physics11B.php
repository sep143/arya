
<div class="main-content">
    <div class="main-content-inner">

        <div class="breadcrumbs ace-save-state responsive" id="breadcrumbs">
            <ul class="breadcrumb pull-left">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= site_url('SearchController/eleven');?>">Back</a>
                </li>
                <li>
                    <a href="#">Physics All</a>
                </li>
            </ul><!-- /.breadcrumb -->

            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Physics
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/PnonPay');?>" >Non Payment</a></li>
                    <li><a href="<?= site_url('SearchController/Ppay');?>">Payment</a></li>
                    <li><a href="<?= site_url('SearchController/physics');?>">All</a></li>
                </ul>
            </div>
            
            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Chemistry
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/CnonPay');?>">Non Payment</a></li>
                    <li><a href="<?= site_url('SearchController/Cpay');?>">Payment</a></li>
                    <li><a href="<?= site_url('SearchController/chemistry');?>">All</a></li>
                </ul>
            </div>
            
             <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Maths
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/MnonPay');?>">Non Payment</a></li>
                    <li><a href="<?= site_url('SearchController/Mpay');?>">Payment</a></li>
                    <li><a href="<?= site_url('SearchController/maths');?>">All</a></li>
                </ul>
            </div>
        </div>
           

        <div class="page-content">
            <div class="page-header">

                <h1>Physics 11th B Batch Students
            <div class="dropdown pull-right responsive">
                    <button class="btn btn-primary dropdown-toggle btn-xs" type="button" data-toggle="dropdown">Batch
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('BatchController/physics11A');?>">A</a></li>
                    <li><a href="<?= site_url('BatchController/physics11B');?>">B</a></li>
                    <li><a href="<?= site_url('BatchController/physics11C');?>">C</a></li>
                    <li><a href="<?= site_url('BatchController/physics11D');?>">D</a></li>
                    <li><a href="<?= site_url('BatchController/physics11E');?>">E</a></li>
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
                                if($row->batch==8||$row->batch==13||$row->batch==18){
                                    echo "<td>A</td>";
                                }else if($row->batch==9||$row->batch==14||$row->batch==19){
                                    echo "<td>B</td>";
                                }else if($row->batch==10||$row->batch==15||$row->batch==20){
                                    echo "<td>C</td>";
                                }else if($row->batch==11||$row->batch==16||$row->batch==21){
                                    echo "<td>D</td>";
                                }else if($row->batch==12||$row->batch==17||$row->batch==22){
                                    echo "<td>E</td>";
                                }else{
                                    echo "<td>Null</td>";
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
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9,10]
            }, 
   			{
                "sExtends": "xls",
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9,10]
            },
           
            {
                "sExtends": "pdf",
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9,10]
            }
        ]
                }
            });
});
</script>