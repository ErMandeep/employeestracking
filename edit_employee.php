 <?php

    if(isset($_GET['p_id'])){
    
        $the_employee_id = $_GET['p_id'];

    }



    $query = "SELECT * FROM employees WHERE employee_id=$the_employee_id";
    $select_employee_by_id = mysqli_query($connection, $query);  
    while($row = mysqli_fetch_assoc($select_employee_by_id)){
    
    // $post_id = $row['id'];
    $employee_name = $row['employee_name'];    
    $employee_email = $row['employee_email'];    
    $employee_phone = $row['employee_phone'];   
    // $client_id = $row['client_id'];   
    $employee_address = $row['employee_address'];    
    $employee_city = $row['employee_city'];    
    // $post_content = $row['post_content'];    
    // $post_tags = $row['post_tags'];    
    // $post_comment_count = $row['post_comment_count'];    
    // $post_date = $row['post_date'];     
    }

   // update client data

     if(isset($_POST['update_empolyee'])){

         
         // $post_id = $row['id'];
         $employee_name = $_POST['employee_name'];
         $employee_email = $_POST['employee_email'];
         // $client_id = $_POST['client_id'];
         $employee_phone = $_POST['employee_phone'];
         $employee_address = $_POST['employee_address'];
         // // $post_image = $_FILES['image']['name'] ;
         // // $post_image_temp = $_FILES['image']['tmp_name'] ;
         $employee_city = $_POST['employee_city'];
         // $post_tags = $_POST['post_tags'];
         
      //    move_uploaded_file($post_image_temp, "../images/$post_image");
         
      //    if(empty($post_image)){
      //        $query = "SELECT * FROM posts WHERE post_id={$the_post_id} ";
      //   $select_image = mysqli_query($connection, $query); 
            
            
      // while($row = mysqli_fetch_assoc($select_image)){
      //     $post_image = $row['post_image'];
      // }
      //    }
         
         
         
         $query = "UPDATE employees SET ";
         $query .= "employee_name = '{$employee_name}', "; 
         $query .= "employee_email = '{$employee_email}', ";
         // $query .= "client_id = '{$client_id}', "; 
         // $query .= "post_date = now(), "; 
         $query .= "employee_phone = '{$employee_phone}', "; 
         $query .= "employee_address = '{$employee_address}', "; 
         $query .= "employee_city = '{$employee_city}' "; 
         // $query .= "post_content = '{$post_content}', "; 
         // $query .= "post_image = '{$post_image}' "; 
         $query .= "WHERE employee_id = {$the_employee_id} "; 
         // echo $query ;
         $update_empolyee = mysqli_query($connection, $query);
         
         confirmQuery($update_empolyee);
         
         
    }
        
?>
      
               
               
                
       
           <form action="" method="post" enctype="multipart/form-data" class="">
    <div class="form-group">
        <lable class="title"><b>Employee Name</b></lable>
        <input type="text" class="form-control" name="employee_name" value="<?php echo $employee_name; ?>">
    </div>
    
    
    
    <!-- <div class="form-group">
        <select name="post_category" id="post_category" class="">
        
        
       
 <?php

      // $query = "SELECT * FROM clients";
      // $select_categories = mysqli_query($connection, $query); 
            
            // confirmQuery($select_categories);
            
      // while($row = mysqli_fetch_assoc($select_categories)){
      // $client_id = $row['client_id'];
      // $cat_title = $row['cat_title'];
      // echo "<option value='{$cat_id}'>{$cat_title}</option>";
          
// }         
            
           
            
?> 

            
            
        <!-- </select>
    </div> --> 
    
    
    
    <div class="form-group">
        <lable class="title">Employee Email</lable>
        <input type="text" class="form-control" name="employee_email" value="<?php echo $employee_email; ?>">
    </div>
    
    
    
    <div class="form-group">
        <lable class="post_status">Employee Phone</lable>
        <input type="text" class="form-control" name="employee_phone" value="<?php echo $employee_phone; ?>">
    </div>
    
    
    
    <!-- <div class="form-group">
    <input type= "file" name= "image" >    
        <img src="../images/<?php echo $post_image; ?> "  width="100">
    </div> -->
    
    
    
    <div class="form-group">
        <lable class="post_tags">Employee Address</lable>
        <input type="text" class="form-control" name="employee_address" value="<?php echo $employee_address; ?>" alt="">
    </div>
    
    
<div class="form-group">
        <lable class="post_tags">Employee City</lable>
        <input type="text" class="form-control" name="employee_city" value="<?php echo $employee_city; ?>" alt="">
    </div>

     
    
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_empolyee" value="Update Details">
    </div>
    
</form> 
