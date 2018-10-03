<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function AlertMsg() {
    $ci = & get_instance();
    if ($ci->session->flashdata('success_msg')) {
        ?>
        <div class="alert alert-success"><?= $ci->session->flashdata('success_msg'); ?></div>
        <?php
    }
    if ($ci->session->flashdata('danger_msg')) {
        ?>
        <div class="alert alert-danger"><?= $ci->session->flashdata('danger_msg'); ?></div>
        <?php
    }
}

function datatable() {
    ?>
    <link href="<?php echo base_url(); ?>theme/dataTables/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme/dataTables/css/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme/dataTables/css/dataTables.tableTools.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>theme/dataTables/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>theme/dataTables/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>theme/dataTables/js/dataTables.responsive.js"></script>
    <script src="<?php echo base_url(); ?>theme/dataTables/js/dataTables.tableTools.min.js"></script>
    <?php
}
