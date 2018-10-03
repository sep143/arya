<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">

            <div class="dropdown pull-right responsive">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Enquiry
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="<?= site_url('SearchController/nonformFill/1');?>" >11<sup>th</sup></a></li>
                    <li><a href="<?= site_url('SearchController/nonformFill/2');?>">12<sup>th</sup></a></li>
                    <li><a href="<?= site_url('SearchController/nonformFill/3');?>">BSC 1<sup>st</sup> Year</a></li>
                    <li><a href="<?= site_url('SearchController/nonformFill/4');?>">BSC 2<sup>nd</sup> Year</a></li>
                    <li><a href="<?= site_url('SearchController/nonformFill/5');?>">BSC 3<sup>rd</sup> Year</a></li>
                    <li><a href="<?= site_url('SearchController/nonformFill/6');?>">Msc Pre</a></li>
                    <li><a href="<?= site_url('SearchController/nonformFill/7');?>">Msc Final</a></li>
                    <li><a href="<?= site_url('SearchController/nonformFill/8');?>">IIT JAM</a></li>
                    <li><a href="<?= site_url('SearchController/nonformFill/9');?>">NET JRF</a></li>
                </ul>
            </div>
            <div class="page-header">
                <h1>Non Form Students</h1>
                 <?= AlertMsg();?>
                
            </div><!-- /.page-header -->
            
            <div class="row">
                <div class="">
                    <table class="table table-bordered table-hover" id="dataTables">
                        <thead>
                            <td style="width: 5px;">S.No.</td>
                            <td style="width: 5px;">ID</td>
                            <td style="width: 100px;">Name</td>
                            <td style="width: 100px;">Father Name</td>
                            <td style="width: 50px;">Mobile No.</td>
                            <td style="width: 50px;">WhatsApp No.</td>
                            <td style="width: 50px;">Father Mo.</td>
                            <td style="width: 100px;">Email ID</td>
                            <td style="width: 150px;">Address</td>
                             <td style="width: 50px;">Class</td>
                            <td style="width: 50px;">Action</td>
                            
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            foreach ($result as $row){
                                echo "<tr>";
                                echo "<td>$i</td>";
                                echo "<td>$row->id</td>";
                                echo "<td>$row->name</td>";
                                echo "<td>$row->father_name</td>";
                                echo "<td>$row->mobile</td>";
                                echo "<td>$row->whatsApp</td>";
                                echo "<td>$row->father_mobile</td>";
                                echo "<td>$row->email</td>";
                                echo "<td>$row->address</td>";
                            ?>
                          <td>
                            <?php
                            if($row->class_id==1){
                                echo "11";
                            }
                            if($row->class_id==2){
                                echo "12";
                            }
                            if($row->class_id==3){
                                echo "BSC 1 Year";
                            }
                            if($row->class_id==4){
                                echo "BSC 2 Year";
                            }
                            if($row->class_id==5){
                                echo "BSC 3 Year";
                            }
                            if($row->class_id==6){
                                echo "Msc Pre";
                            }
                            if($row->class_id==7){
                                echo "Msc Final";
                            }
                            if($row->class_id==8){
                                echo "IIT-JAM";
                            }
                            if($row->class_id==9){
                                echo "NET-JRF";
                            }
                            ?>
                        </td>
                        <td><a href=" <?= site_url('EntryController/fillForm/'.$row->id);?>" class="btn btn-info btn-xs">Form</a></td>
                            <?php
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
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9]
            }, 
   			{
                "sExtends": "xls",
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9]
            },
           
            {
                "sExtends": "pdf",
                "mColumns": [0, 1, 2, 3, 4,5,6,7,8,9]
            }
        ]
                }
            });
});
</script>