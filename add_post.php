<?php
    if(isset($_POST['create_post'])){
        $post_title = $_POST['title'];
        $post_title = $_POST['title'];
        $post_author = $_POST['author'];
        $post_category_id = $_POST['post_category_id'];
        $post_status = $_POST['post_status'];
        
        $post_image = $_FILES['image']['name'];
        $post_image_tmp = $_FILES['image']['tmp_name'];
        
        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];
        $post_date = date('d-m-y');
        $post_comment_count = 4;
        
        move_uploaded_file($post_image_tmp, "../images/$post_image" );
        
        $query = "INSERT INTO posts(post_categories_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status )";
        
        $query .= "VALUES ('{$post_category_id}', '{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}', '{$post_tags}' , '{$post_comment_count}', '{$post_status  }' )";
        
        
        $create_post_query = mysqli_query($connection, $query);
        
        confirmQuery($create_post_query);
        
        }
        
        
?>
   <form action="" method="post" enctype="multipart/form-data" class="">
    <div class="form-group">
        <lable class="title"><b>Post Title</b></lable>
        <input type="text" class="form-control" name="title">
    </div>
    
    
    
    <div class="form-group">
        <lable class="post_category">Post Category</lable><br>
       <select name="post_category_id" id="post_category" class="">
        
        
        
<?php

      $query = "SELECT * FROM categories";
      $select_categories = mysqli_query($connection, $query); 
            
            confirmQuery($select_categories);
            
      while($row = mysqli_fetch_assoc($select_categories)){
      $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];
      echo "<option value='{$cat_id}'>{$cat_title}</option>";
          
}         
            
           
            
?>

            
            
        </select>
    </div>
    
    
    
    <div class="form-group">
        <lable class="title">Post Author</lable>
        <input type="text" class="form-control" name="author">
    </div>
    
    
    
    <div class="form-group">
        <lable class="post_status">Post Status</lable>
        <input type="text" class="form-control" name="post_status">
    </div>
    
    
    
    <div class="form-group">
        <lable class="post_image">Post Image</lable>
        <input type="file" name="image">
    </div>
    
    
    
    <div class="form-group">
        <lable class="post_tags">Post Tags</lable>
        <input type="text" class="form-control" name="post_tags">
    </div>
    
    
    
    <div class="form-group">
        <lable class="post_category">Post Content</lable>
        <textarea class="form-control" name="post_content" cols="30" rows="10">
        </textarea>
    </div>
    
    
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="create_post" value="Publish Post">
    </div>
    
</form> 
      
      
       