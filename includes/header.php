<?php ob_start(); ?>
<?php include_once "config/db.php"; ?>
<?php include_once "function.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employee Tracking</title>


    
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Datatables css -->
    <!-- <link href="DataTables/datatables.css" rel="stylesheet"> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
   

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

    <!-- <script type="text/javascript" charset="utf8" src="DataTables/datatables.js"></script> -->

<!-- 
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script> -->


     

    <!-- <link href="DataTables/datatables.js" rel="stylesheet"> -->




    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   -->
           <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
         <!--   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  
           <script src="https://code.jquery.com/jquery-3.3.1.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />  
 -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> -->
<style>
.btn_view {
    background-color: green;
    border: none;
    color: white;
    padding: 8px 10px;
    font-size: 8px;
    cursor: pointer;
    }
    
    .btn_edit {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 8px 10px;
    font-size: 8px;
    cursor: pointer;
    }

    .btn_add {
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 8px 10px;
    font-size: 20px;
    cursor: pointer;
    }
    
    .btn_delete {
    background-color: Red;
    border: none;
    color: white;
    padding: 8px 10px;
    font-size: 8px;
    cursor: pointer;
}

/* Darker background on mouse-over */
.btn_delete:hover {
    background-color: DarkRed;
}
.btn_edit:hover {
    background-color: RoyalBlue;
}
.btn_view:hover {
    background-color: Darkgreen;
}
</style>



<!--- confirm delete in sweet alert --->

<script>
    $(document).ready(function(){
        
        readProducts(); /* it will load products when document loads */
        
        $(document).on('click', '#delete_product', function(e){
            
            var productId = $(this).data('id');
            SwalDelete(productId);
            e.preventDefault();
        });
        
    });
    
    function SwalDelete(productId){
        
        swal({
            title: 'Are you sure?',
            text: "It will be deleted permanently!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            showLoaderOnConfirm: true,
              
            preConfirm: function() {
              return new Promise(function(resolve) {
                   
                 $.ajax({
                    url: 'delete.php',
                    type: 'POST',
                    data: 'delete='+productId,
                    dataType: 'json'
                 })
                 .done(function(response){
                    swal('Deleted!', response.message, response.status);
                    readProducts();
                 })
                 .fail(function(){
                    swal('Oops...', 'Something went wrong with ajax !', 'error');
                 });
              });
            },
            allowOutsideClick: false              
        }); 
        
    }
    
    function readProducts(){
        $('#load-products').load('read.php');   
    }
    
</script>

</head>

<body>
