<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bookself</title>

  <!-- Custom fonts for this template-->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    #ex4 .p1[data-count]:after{
    position:absolute;
    right:20%;
    top:8%;
    content: attr(data-count);
    font-size:60%;
    padding:.2em;
    border-radius:50%;
    line-height:1em;
    color: white;
    background:rgba(255,0,0,.85);
    text-align:center;
    min-width: 1em;
    /*font-weight:bold;*/
  }
  
  .figure {
    width: 100%;
    height: 150px;
	  overflow: hidden;
  }
  .figure img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: 50% 50%;
    transition: transform 0.25s, visibility 0.25s ease-in;
  }
  .figure:hover img {
    transform: scale(1.1);
  }
  .judul {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
  }
  
  </style>
</head>