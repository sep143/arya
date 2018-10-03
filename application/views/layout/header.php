<?php
if (empty($this->session->userdata['mylog']['log_id']))
    redirect(site_url('LoginController/index'));

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Arya Classes</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?= base_url(); ?>theme/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>theme/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="<?= base_url(); ?>theme/assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?= base_url(); ?>theme/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="<?= base_url(); ?>theme/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="<?= base_url(); ?>theme/assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>theme/assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?= base_url(); ?>theme/assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?= base_url(); ?>theme/assets/js/ace-extra.min.js"></script>
        <script src="<?= base_url(); ?>theme/assets/js/jquery-2.2.1-New.js"></script> 
        
        <script
            src="https://code.jquery.com/jquery-2.2.1.js"
            integrity="sha256-eNcUzO3jsv0XlJLveFEkbB8bA7/CroNpNVk3XpmnwHc="
        crossorigin="anonymous"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="<?= base_url(); ?>theme/assets/js/html5shiv.min.js"></script>
        <script src="<?= base_url(); ?>theme/assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default          ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <i class="fa fa-leaf"></i>
                            Arya Classes
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">

                        <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="<?= base_url(); ?>theme/images/logoNew.PNG" alt="Arya" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                    
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                                <li>
                                    <a href="<?= site_url('SettingController');?>">
                                        <i class="ace-icon fa fa-cogs"></i>
                                        Setting
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?= site_url('LoginController/logout');?>">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.navbar-container -->
        </div>
        <div class="space-10"></div>
        <div class="main-container ace-save-state " id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container')
                } catch (e) {
                }
            </script>

            <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
                <script type="text/javascript">
                    try {
                        ace.settings.loadState('sidebar')
                    } catch (e) {
                    }
                </script>
                <ul class="nav nav-list">
                    <li class="<?php if ($this->uri->segment(2) == 'dashboard') echo"active"; ?>">
                        <a href="<?= site_url('LoginController/dashboard');?>">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li  class="<?php if($this->uri->segment(1)=='EntryController') echo "active";?>">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text"> Arya Classes </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">

                            <li class="">
                                <a href="<?= site_url('EntryController/enquiry/');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Add Enquiry
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?= site_url('EntryController/showStudent');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    All Students
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?= site_url('EntryController/form');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Show Form
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?= site_url('EntryController/nonForm');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Non Form
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-book"></i>
                            <span class="menu-text"> Class </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="<?= site_url('SearchController/eleven');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    11<sup>th</sup>
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?= site_url('SearchController/twelve');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    12<sup>th</sup>
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-book"></i>
                            <span class="menu-text"> UG </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="<?= site_url('SearchController/bsc1');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Bsc I<sup>st</sup>
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?= site_url('SearchController/bsc2');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Bsc II<sup>nd</sup>
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?= site_url('SearchController/bsc3');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Bsc III<sup>rd</sup>
                                </a>

                                <b class="arrow"></b>
                            </li>

                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-book"></i>
                            <span class="menu-text"> PG </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="<?= site_url('SearchController/msc1');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Msc Pre Year
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?= site_url('SearchController/msc2');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Msc Final Year
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="glyphicon glyphicon-education" style="font-size:20px;"></i>
                            <span class="menu-text"> Other Course </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu">
                            <li class="">
                                <a href="<?= site_url('SearchController/iit');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    IIT-JAM
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?= site_url('SearchController/net');?>">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    NET-JRF
                                </a>

                                <b class="arrow"></b>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="">
                        <a href="<?= site_url('EntryController/searchID');?>" class="">
                            <i class="menu-icon fa fa-search"></i>
                            <span class="menu-text"> Search </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        
                    </li>
                    
                </ul>
                      
                </ul><!-- /.nav-list -->
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div> 