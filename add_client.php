<?php
    add_client();
        
        
?>
   <form action="" method="post" enctype="multipart/form-data" class="">
    <div class="form-group">
        <lable class="title"><b>Client Name</b></lable>
        <input type="text" class="form-control" name="clientName" required>
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
        <lable class="title">Client Phone</lable>
        <input type="number" class="form-control" maxlength="10" name="clientPhone" required >
    </div>
    
    
    
    <div class="form-group">
        <lable class="post_status">Client Email</lable>
        <input type="Email" class="form-control" name="clientEmail" required>
    </div>
    
    
    
    <!-- <div class="form-group">
        <lable class="post_image">Post Image</lable>
        <input type="file" name="image">
    </div> -->
    
    <div class="form-group">
        <lable class="post_tags">Client Address</lable>
        <input type="text" class="form-control" name="clientAddress" required>
    </div>
    

    <div class="form-group">
        <lable class="post_tags">Client Country</lable>
        <input type="text" class="form-control" name="clientCountry" required>
    </div>
    
    <div class="form-group">
        <lable class="post_tags">Client State</lable>
        <input type="text" class="form-control" name="clientState" required>
    </div>

    <div class="form-group">
        <lable class="post_tags">Client City</lable>
        <input type="text" class="form-control" name="clientCity" required>
    </div>

    
    
    
    <!-- <div class="form-group">
        <lable class="post_category">Post Content</lable>
        <textarea class="form-control" name="post_content" cols="30" rows="10">
        </textarea>
    </div> -->
    
    
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add_client" value="Add Client" id="btn-submit">
    </div>
    
</form> 

<script type="text/javascript">
        
        function addClient(){

            swal("Good job!", "You clicked the button!", "success"); 
        }  

    </script>




      
      
       