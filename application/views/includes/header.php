<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard | Order Fast</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link href="<?php echo base_url('assets/css/ionicons.min.css');  ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/AdminLTE.min.css');  ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/skin-blue.min.css');  ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    <!-- CSS -->
    <link href="<?php echo base_url('assets/css/style.css');  ?>" rel="stylesheet">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="">
     <?php $this->load->view('includes/menu'); ?>
     
       <div class="control-sidebar-bg"></div>
    </div>
     
     <?php $this->load->view('includes/sidebar-left'); ?>
     
     