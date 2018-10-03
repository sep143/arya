<div class="main-content">
    <div class="main-content-inner">
        <div class="page-content">

            <div class="page-header">
                <h1>
                    WelCome to Arya Class Student Record Software
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <div class="col-sm-5">
                            <div class="widget-box">
                                <div class="widget-header widget-header-flat widget-header-small">
                                    <h5 class="widget-title">
                                        <i class="ace-icon fa fa-signal"></i>
                                        Student Record
                                    </h5>

                                    <div class="widget-toolbar no-border">
                                        <div class="inline dropdown-hover">
                                            <button class="btn btn-minier btn-primary">
                                                Dashboard
                                                <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                                                <li class="active">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                                                        This Value
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main">
                                        <div id="piechart-placeholder"></div>

                                        <div class="hr hr8 hr-double"></div>

                                        <div class="clearfix">
                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="ace-icon fa fa-total fa-2x blue"></i>
                                                    &nbsp; Total
                                                </span>
                                                <h4 class="bigger pull-right">
                                                    <?php
                                                    $i = 1;
                                                    foreach ($total as $row):
                                                        $i++;
                                                    endforeach;
                                                    $show = ($i - 1);
                                                    echo "$show";
                                                    ?>
                                                </h4>
                                            </div>

                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="ace-icon fa fa-total fa-2x purple"></i>
                                                    &nbsp; Non-Form
                                                </span>
                                                <h4 class="bigger pull-right">
                                                    <?php
                                                    $i = 1;
                                                    foreach ($np as $row):
                                                        $i++;
                                                    endforeach;
                                                    $show = ($i - 1);
                                                    echo "$show";
                                                    ?>
                                                </h4>
                                            </div>

                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="ace-icon fa fa-total fa-2x red"></i>
                                                    &nbsp; Form
                                                </span>
                                                <h4 class="bigger pull-right">
                                                    <?php
                                                    $i = 1;
                                                    foreach ($p as $row):
                                                        $i++;
                                                    endforeach;
                                                    $show = ($i - 1);
                                                    echo "$show";
                                                    ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div><!-- /.widget-main -->
                                </div><!-- /.widget-body -->
                            </div><!-- /.widget-box -->
                        </div><!-- /.col -->

                    </div>
                </div>
                <div class="space-20"></div>

                <div class="col-lg-12 col-md-12" style="margin-top: 50px;">
                    <label class="col-lg-12 col-md-12">Enter ID OR System ID Then Check Date</label>
                    
                        <div class="col-lg-8 col-md-8 form-group">
                            <input type="text" class="form-control" name="searchID" id="searchID" placeholder="Enter ID & Enter Name">
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <button class="btn btn-info btn-xs" onclick="searchID()">Submit</button>

                        </div>
                    
                </div>
            </div><!-- /.row -->
             <div id="studentResult"></div>
        </div><!-- /.page-content -->
    </div>
</div>
<script>
function searchID(){
    var searchvalue=$("#searchID").val();
    $.ajax({
        url:'<?= site_url('LoginController/search')?>',
        type:'POST',
        data: {'searchvalue':searchvalue},
        success: function (data) {
            $("#studentResult").html(data);
        }
    });
}
</script>