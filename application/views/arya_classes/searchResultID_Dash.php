<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">
            <div class="page-header">
                <h1>Show Date</h1>
                
            </div><!--page Header-->
           
            <div class="row">
               <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                           
                            <td>S. No.</td>
                            <td>ID</td>
                            <td>Form ID</td>
                            <td>Name</td>
                            <td>Form Date</td>
                            <td>Form Update</td>
                            <td>Subject Date</td>
                            
                        </tr>
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
                         ?>
                    <td><?php 
                        if($row->formDate){
                            echo date('d-m-Y', strtotime($row->formDate));
                        } ?></td>
                    <td><?php 
                        if($row->UpdateFormDate){echo date('d-m-Y', strtotime($row->UpdateFormDate)); } ?></td>
                    <td><?php 
                        if($row->update){echo date('d-m-Y', strtotime($row->update)); } ?></td>
                            
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