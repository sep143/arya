<?php 
    echo "<option value='' required=''>--select--</option>";
    foreach ($result as $row):
        
        echo "<option value='$row->id'>$row->subject</option>";
    endforeach;
?>
