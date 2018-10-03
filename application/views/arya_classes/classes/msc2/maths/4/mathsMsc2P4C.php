
<div class="main-content">
    <div class="main-content-inner">

       <div class="breadcrumbs ace-save-state responsive" id="breadcrumbs">
            <ul class="breadcrumb pull-left">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= site_url('SearchController/msc2');?>">Back</a>
                </li>
                 <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= site_url('SearchController/mathsMsc2All');?>">Maths Msc Final Year Students</a>
                </li>
                <li>Maths Msc Final Year 4th Paper Students</li>
            </ul><!-- /.breadcrumb -->

            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Physics
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/physicsMsc2All');?>" >Physics All</a></li>
                    <li><a href="<?= site_url('SearchController/physicsMsc2P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsMsc2P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsMsc2P3');?>">Paper 3<sup>rd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsMsc2P4');?>">Paper 4<sup>th</sup></a></li>
                    <li><a href="<?= site_url('SearchController/physicsMsc2P5');?>">Paper 5<sup>th</sup></a></li>
                </ul>
            </div>
            
            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Chemistry
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/chemistryMsc2All');?>">Chemistry All</a></li>
                    <li><a href="<?= site_url('SearchController/chemistryMsc2P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryMsc2P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryMsc2P3');?>">Paper 3<sup>rd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryMsc2P4');?>">Paper 4<sup>th</sup></a></li>
                    <li><a href="<?= site_url('SearchController/chemistryMsc2P5');?>">Paper 5<sup>th</sup></a></li>
                </ul>
            </div>
            
             <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Maths
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/mathsMsc2All');?>">Maths All</a></li>
                    <li><a href="<?= site_url('SearchController/mathsMsc2P1');?>">Paper 1<sup>st</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsMsc2P2');?>">Paper 2<sup>nd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsMsc2P3');?>">Paper 3<sup>rd</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsMsc2P4');?>">Paper 4<sup>th</sup></a></li>
                    <li><a href="<?= site_url('SearchController/mathsMsc2P5');?>">Paper 5<sup>th</sup></a></li>
                </ul>
            </div>
        </div>
           

        <div class="page-content">
            <div class="page-header">

                <h1>Maths Msc Final Year 4th Paper C Batch Students
                    <div class="dropdown pull-right responsive">
                        <button class="btn btn-primary dropdown-toggle btn-xs" type="button" data-toggle="dropdown">M-P-4
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="<?= site_url('BatchController/mathsMsc2P4A'); ?>">A</a></li>
                            <li><a href="<?= site_url('BatchController/mathsMsc2P4B'); ?>">B</a></li>
                            <li><a href="<?= site_url('BatchController/mathsMsc2P4C'); ?>">C</a></li>
                            <li><a href="<?= site_url('BatchController/mathsMsc2P4D'); ?>">D</a></li>
                            <li><a href="<?= site_url('BatchController/mathsMsc2P4E'); ?>">E</a></li>
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
                                if($row->batch==278||$row->batch==283||$row->batch==288||$row->batch==293||$row->batch==298||$row->batch==303||$row->batch==308||$row->batch==313||$row->batch==318||$row->batch==323||$row->batch==333||$row->batch==338||$row->batch==343||$row->batch==348||$row->batch==353){
                                    echo "<td>A</td>";
                                }else if($row->batch==279||$row->batch==284||$row->batch==289||$row->batch==294||$row->batch==299||$row->batch==304||$row->batch==309||$row->batch==314||$row->batch==319||$row->batch==324||$row->batch==334||$row->batch==339||$row->batch==344||$row->batch==349||$row->batch==354){
                                    echo "<td>B</td>";
                                }else if($row->batch==280||$row->batch==285||$row->batch==290||$row->batch==295||$row->batch==300||$row->batch==305||$row->batch==310||$row->batch==315||$row->batch==320||$row->batch==325||$row->batch==335||$row->batch==340||$row->batch==345||$row->batch==350||$row->batch==355){
                                    echo "<td>C</td>";
                                }else if($row->batch==281||$row->batch==286||$row->batch==291||$row->batch==296||$row->batch==301||$row->batch==306||$row->batch==311||$row->batch==316||$row->batch==321||$row->batch==326||$row->batch==336||$row->batch==341||$row->batch==346||$row->batch==351||$row->batch==356){
                                    echo "<td>D</td>";
                                }else if($row->batch==282||$row->batch==287||$row->batch==292||$row->batch==297||$row->batch==302||$row->batch==307||$row->batch==312||$row->batch==317||$row->batch==322||$row->batch==327||$row->batch==337||$row->batch==342||$row->batch==347||$row->batch==352||$row->batch==357){
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