<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">

            <div class="page-header">
                <h1>
                    Student Search Result
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Search to Form ID & Computer ID
                    </small>
                </h1>
            </div><!-- /.page-header -->
            <div class="space-20"></div>
            <div class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <label class="pull-right">Student ID</label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <input type="text" id="studentID" placeholder="Enter Student Form ID & ID & Name" class="form-control pull-left">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <button class="btn btn-info btn-xs" onclick="searchcall()">Submit</button>
                    </div>
                </div>
            </div><!-- /.row -->
 
        </div><!-- /.page-content -->
        <div id="studentResult"></div>
    </div>
</div>

 <script>
function searchcall(){
    var searchvalue=$("#studentID").val();
    $.ajax({
        url:'<?= site_url('EntryController/search')?>',
        type:'POST',
        data: {'searchvalue':searchvalue},
        success: function (data) {
            $("#studentResult").html(data);
        }
    });
}
</script>