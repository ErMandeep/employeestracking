<?php include "includes/header.php"; ?>
    <div id="wrapper">
       
        <!-- Navigation -->
    
<?php include "includes/navigation.php"; ?>            
             
              
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                
                
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            &nbsp Employees 
                            <small><a href ='employees.php?source=add_employee' > <button class="btn_add" style="float:left;"><i class="fa fa-edit"></i> Add Record</button></a></small>
                        </h1>
<?php 
    if(isset($_GET['source'])){
        $source = $_GET['source'];
}
    else{
        $source = '';
    }
    switch($source){
            case 'add_employee';
            include "add_employee.php";
            break;
            case 'edit_employee';
            include "edit_employee.php";
            break;
            case '200';
            echo 'nice 200';
            break;
        default: 
            include "employee_list.php";
            break;
            
    }                    
                        
       
                        
                        
?>                        
                       
                        
                        
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

            <div class="row">
        <div class="col-lg-12">
            <a href ='employees.php?source=add_employee'> <button class="btn_add" style="float:right;"><i class="fa fa-edit"></i> Add Record</button></a> 

        </div>
        </div>
        

        </div>
        <!-- /#page-wrapper -->

</div>


<?php include "includes/footer.php"; ?>