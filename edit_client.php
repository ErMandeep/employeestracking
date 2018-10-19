 <?php

    if(isset($_GET['p_id'])){
    
        $the_client_id = $_GET['p_id'];

    }



    $edit_client_query = "SELECT * FROM clients WHERE clientID=$the_client_id";
    $select_client_by_id = mysqli_query($connection, $edit_client_query);  
    while($row = mysqli_fetch_assoc($select_client_by_id)){
    
    // $post_id = $row['id'];
    $clientName = $row['clientName'];    
    $clientPhone = $row['clientPhone'];    
    $clientEmail = $row['clientEmail'];   
    $clientAddress = $row['clientAddress'];   
    $clientCountry = $row['clientCountry'];    
    $clientState = $row['clientState'];  
    $clientCity = $row['clientCity'];  
    $lastupdatedOn = $row['lastupdatedOn'];    
    // $post_content = $row['post_content'];    
    // $post_tags = $row['post_tags'];    
    // $post_comment_count = $row['post_comment_count'];    
    // $post_date = $row['post_date'];     
    // $lastupdate_on = $row['lastupdate_on']; 
    }

   // update client data

     if(isset($_POST['update_client_details'])){

         
         // $post_id = $row['id'];
         $clientName = $_POST['clientName'];
         $clientPhone = $_POST['clientPhone'];
         // $client_id = $_POST['client_id'];
         $clientEmail = $_POST['clientEmail'];
         $clientAddress = $_POST['clientAddress'];
         // // $post_image = $_FILES['image']['name'] ;
         // // $post_image_temp = $_FILES['image']['tmp_name'] ;
         $clientCountry = $_POST['clientCountry'];
         $clientState = $row['clientState'];  
         $clientCity = $row['clientCity']; 

         $lastupdatedOn = $row['lastupdatedOn']; 
         // $post_tags = $_POST['post_tags'];
         
      //    move_uploaded_file($post_image_temp, "../images/$post_image");
         
      //    if(empty($post_image)){
      //        $query = "SELECT * FROM posts WHERE post_id={$the_post_id} ";
      //   $select_image = mysqli_query($connection, $query); 
            
            
      // while($row = mysqli_fetch_assoc($select_image)){
      //     $post_image = $row['post_image'];
      // }
      //    }
         
         
         
         $update_client_query = "UPDATE clients SET ";
         $update_client_query .= "clientName = '{$clientName}', "; 
         $update_client_query .= "clientPhone = '{$clientPhone}', ";
         // $query .= "client_id = '{$client_id}', "; 
         // $query .= "post_date = now(), "; 
         $update_client_query .= "clientEmail = '{$clientEmail}', "; 
         $update_client_query .= "clientAddress = '{$clientAddress}', "; 
         $update_client_query .= "clientCountry = '{$clientCountry}', "; 
         $update_client_query .= "clientState = '{$clientState}', "; 
         $update_client_query .= "clientCity = '{$clientCity}', "; 
         $update_client_query .= "lastupdatedOn = now() "; 
         // $query .= "post_content = '{$post_content}', "; 
         // $query .= "post_image = '{$post_image}' "; 
         $update_client_query .= "WHERE clientID = {$the_client_id} "; 
         // echo $query ;
         $update_client_data = mysqli_query($connection, $update_client_query);
         
         confirmQuery($update_client_data);
         
         
    }
        
?>
      
               
               
                
       
           <form action="" method="post" enctype="multipart/form-data" class="">
    <div class="form-group">
        <lable class="title"><b>Client Name</b></lable>
        <input type="text" class="form-control" name="clientName" value="<?php echo $clientName; ?>">
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
        <lable class="title">Client Phone</lable>
        <input type="text" class="form-control" name="clientPhone" value="<?php echo $clientPhone; ?>">
    </div>
    
    
    
    <div class="form-group">
        <lable class="post_status">Client Email</lable>
        <input type="text" class="form-control" name="clientEmail" value="<?php echo $clientEmail; ?>">
    </div>
    
    
    
    <!-- <div class="form-group">
    <input type= "file" name= "image" >    
        <img src="../images/<?php echo $post_image; ?> "  width="100">
    </div> -->
    
    
    
    <div class="form-group">
        <lable class="post_tags">Client Address</lable>
        <input type="text" class="form-control" name="clientAddress" value="<?php echo $clientAddress; ?>" alt="">
    </div>
    
    
<div class="form-group">
        <lable class="post_tags">Client Country</lable>
        <input type="text" class="form-control" name="clientCountry" value="<?php echo $clientCountry; ?>" alt="">
    </div>

    <div class="form-group">
        <lable class="post_tags">Client State</lable>
        <input type="text" class="form-control" name="clientState" value="<?php echo $clientState; ?>" alt="">
    </div>

    <div class="form-group">
        <lable class="post_tags">Client City</lable>
        <input type="text" class="form-control" name="clientCity" value="<?php echo $clientCity; ?>" alt="">
    </div>

     
    
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_client_details" value="Update Details">
    </div>
    
</form> 
