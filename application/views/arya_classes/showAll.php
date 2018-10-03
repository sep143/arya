<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">

            <div class="page-header">
                <h1>Show All Students</h1>
            </div><!-- /.page-header -->
            <?php AlertMsg(); ?>
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
                            <td style="width: 50px;">Email ID</td>
                            <td style="width: 150px;">Address</td>
                            <td style="width: 10px;">Status</td>
                            <td style="width: 10px;">Action</td>
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
                                if($row->status==0){
                                    echo "<td>Non Form</td>";
                                }
                                if($row->status==1){
                                    echo "<td>Form</td>";
                                }
                              ?>
                            <td>
                                <?php if($row->status==0){?>
                                <a class="btn btn-success btn-xs" href="<?= site_url('EntryController/deleteStudent/'.$row->id)?>" onclick="return confirm('Are You Sure')">Delete</a>
                                <?php }
                                else if($row->status==1){?>
                                <a class="btn btn-danger btn-xs" href="<?= site_url('EntryController/deleteStudent/'.$row->id)?>" onclick="return confirm('Are You Sure')">Delete</a>
                                <?php }?>
                                        </td>
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