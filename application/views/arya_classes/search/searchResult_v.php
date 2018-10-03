<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            <div class="page-header">
                <h1>User Detail</h1>
                
            </div><!--page Header-->
           
            <div class="row">
               <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>S.No.</td>
                            <td>ID</td>
                            <td>Form ID</td>
                            <td>Name</td>
                            <td>Father Name</td>
                            <td>Mobile</td>
                            <td>Father Mo.</td>
                            <td>E-Mail</td>
                            <td>Status</td>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($result as $row) {
                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>$row->id</td>";
                            echo "<td>$row->form_id</td>";
                            echo "<td>$row->name</td>";
                            echo "<td>$row->father_name</td>";
                            echo "<td>$row->mobile</td>";
                            echo "<td>$row->father_mobile</td>";
                            echo "<td>$row->email</td>";
                        ?>    
                        <td><a class="btn btn-info btn-xs" href="<?= site_url('EntryController/studentEdit/'.$row->id);?>">Edit</a></td>
                      <?php      
                        echo "</tr>";
                        $i++;
                    }
                    ?>
                </tbody>
                </table>
            </div>
        </div><!--Page Content-->
    </div>
</div>