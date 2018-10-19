<?php
    if(isset($_POST['add_employee']))
    {
        // echo"<pre>"; print_r($_POST); echo"</pre>"; 
        // $clientID = $_POST['clientID'];
        $employeeName = $_POST['employeeName'];
        $employeePhone = $_POST['employeePhone'];
        $employeeEmail = $_POST['employeeEmail'];
        // $post_category_id = $_POST['post_category_id'];
        $employeeAddress = $_POST['employeeAddress'];
        
        // $post_image = $_FILES['image']['name'];
        // $post_image_tmp = $_FILES['image']['tmp_name'];
        
        $employeeCountry = $_POST['employeeCountry'];
        $employeeState = $_POST['employeeState'];
        $employeeCity = $_POST['employeeCity'];

        // $createdBy = $_POST['createdBy'];
        
        
        // $post_content = $_POST['post_content'];
        // $post_date = date('d-m-y');
        // $post_comment_count = 4;
        
        // move_uploaded_file($post_image_tmp, "../images/$post_image" );

        // $usercheck = $email;

        // $usercheck = "SELECT * FROM employee WHERE employeeEmail = '$usercheck' ";

        // $result = mysqli_query($usercheck, $connection )
        // if (mysqli_num_rows($add_client_query) > 0 ){
        //     echo 'email already exists !';
        // }else{
        //     mysqli_query("INSERT INTO employee (employeeName, employeePhone, employeeEmail, employeeAddress, employeeCountry, employeeState, employeeCity ) VALUES ('{$employeeName}', '{$employeePhone}', '{$employeeEmail}',  '{$employeeAddress}', '{$employeeCountry}', '{$employeeState}', '{$employeeCity}' ) ");
        // }


        
        $add_client_query = "INSERT INTO employee (employeeName, employeePhone, employeeEmail, employeeAddress, employeeCountry, employeeState, employeeCity )";
        
        $add_client_query .= "VALUES ('{$employeeName}', '{$employeePhone}', '{$employeeEmail}',  '{$employeeAddress}', '{$employeeCountry}', '{$employeeState}', '{$employeeCity}' )";
        
        
        $clients_result = mysqli_query($connection, $add_client_query);
        
        confirmQuery($clients_result);
        
        }
        
        
?>
   <form action="" method="post" enctype="multipart/form-data" class="">
    <div class="form-group">
        <lable class="title"><b>Employee Name</b></lable>
        <input type="text" class="form-control" name="employeeName" required>
    </div>
    
    
    
    <!-- <div class="form-group">
        <lable class="post_category">Client Email</lable><br>
       <select name="post_category_id" id="post_category" class="">
        
        
        
<?php

      // $query = "SELECT * FROM categories";
     //  $select_categories = mysqli_query($connection, $query); 
            
            // confirmQuery($select_categories);
            
      // while($row = mysqli_fetch_assoc($select_categories)){
      // $cat_id = $row['cat_id'];
      // $cat_title = $row['cat_title'];
      // echo "<option value='{$cat_id}'>{$cat_title}</option>";
          
// }         
            
           
            
?>

            
            
        </select>
    </div> -->
    
    
    
    <div class="form-group">
        <lable class="title">Employee Phone</lable>
        <input type="number" class="form-control" name="employeePhone" required>
    </div>
    
    
    
    <div class="form-group">
        <lable class="post_status">Employee Email</lable>
        <input type="Email" class="form-control" name="employeeEmail" required>
    </div>
    
    
    
    <!-- <div class="form-group">
        <lable class="post_image">Post Image</lable>
        <input type="file" name="image">
    </div> -->
    
    <div class="form-group">
        <lable class="post_tags">Employee Address</lable>
        <input type="text" class="form-control" name="employeeAddress" required>
    </div>
    

    <div class="form-group">
        <lable class="post_tags">Employee Country</lable>
        <input type="text" class="form-control" name="employeeCountry" required>
    </div>
    
    <div class="form-group">
        <lable class="post_tags">Employee State</lable>
        <input type="text" class="form-control" name="employeeState" required>
    </div>

    <div class="form-group">
        <lable class="post_tags">Employee City</lable>
        <input type="text" class="form-control" name="employeeCity" required>
    </div>

    
    
    
    <!-- <div class="form-group">
        <lable class="post_category">Post Content</lable>
        <textarea class="form-control" name="post_content" cols="30" rows="10">
        </textarea>
    </div> -->
    
    
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add_employee" value="Add Employee">
    </div>
    
</form> 
      
      
       