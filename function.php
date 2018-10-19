<?php

function confirmQuery($result){

    global $connection;
    if(!$result){
            die("QUERY FAILED .". mysqli_error($connection) );
}

}

function confirmDelete()
{ 
            print_r($_POST);
            echo"he elllljlj";
         /*$the_client_id = $_GET['note_delete'];
         
         $not_delete_client_query = "UPDATE clients SET isDeleted= '1' WHERE clientID=$the_client_id  ";
         $note_delete_query = mysqli_query($connection, $not_delete_client_query);*/         
    
 }
 


function insert_categories(){
  
    global $connection;
    
    if(isset($_POST['submit'])){
    
    $cat_title = $_POST['cat_title'];
    
    if($cat_title ==""|| empty($cat_title)){
        echo "This filed should not be empty";
    }
    else{
        $query = "INSERT INTO categories(cat_title)";
        $query .= "VALUE ('{$cat_title}')";
        
        $create_category_query = mysqli_query($connection, $query);
        
        if(!$create_category_query)
        {
            die('QUERY FAIL' .mysqli_error($connection));
        }
        
    }
    
}     

}


function findAllcategories(){
    global $connection;
    
    $query = "SELECT * FROM categories";
$select_all_categories = mysqli_query($connection, $query);  
while($row = mysqli_fetch_assoc($select_all_categories)){
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href= 'categories.php?delete={$cat_id}'>Delete</a></td>";
    echo "<td><a href= 'categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "<tr>";
}  
}



function deletecategories(){
    global $connection;
    
if(isset($_GET['delete'])){
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id={$the_cat_id}";
    $delete_query = mysqli_query($connection, $query);
    header("Location: categories.php");
}           
}



//    Add Client 

function add_client(){
    global $connection;

if(isset($_POST['add_client']))
    {
        // echo"<pre>"; print_r($_POST); echo"</pre>"; 
        // $clientID = $_POST['clientID'];
        $clientName = $_POST['clientName'];
        $clientPhone = $_POST['clientPhone'];
        $clientEmail = $_POST['clientEmail'];
        // $post_category_id = $_POST['post_category_id'];
        $clientAddress = $_POST['clientAddress'];
        
        // $post_image = $_FILES['image']['name'];
        // $post_image_tmp = $_FILES['image']['tmp_name'];
        
        $clientCountry = $_POST['clientCountry'];
        $clientState = $_POST['clientState'];
        $clientCity = $_POST['clientCity'];

        // $createdBy = $_POST['createdBy'];
        
        
        // $post_content = $_POST['post_content'];
        // $post_date = date('d-m-y');
        // $post_comment_count = 4;
        
        // move_uploaded_file($post_image_tmp, "../images/$post_image" );
        
        $add_client_query = "INSERT INTO clients (clientName, clientPhone, clientEmail, clientAddress, clientCountry, clientState, clientCity)";
        
        $add_client_query .= "VALUES ('{$clientName}', '{$clientPhone}', '{$clientEmail}',  '{$clientAddress}', '{$clientCountry}', '{$clientState}', '{$clientCity}')";
        
        
        $clients_result = mysqli_query($connection, $add_client_query);
        
        confirmQuery($clients_result);
        
        }
        }


//    Add Client end


        

?>