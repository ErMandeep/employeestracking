                        <!-- <table class="table table-bordered table-hover"> -->
                        	<table id="client_list" class="table table-striped table-bordered">  
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Employee Name</th>
                                    <th>Employee Phone</th>
                                    <th>Employee Email</th>
                                    <th>Employee Address</th>
                                    <th>Employee Country</th>
                                    <!-- <th>Tags</th>
                                    <th>Comments</th>
                                    <th>Date</th> -->
                                </tr>
                            </thead>
                            <tbody>
                            

    <?php   
    $employee_list_query = "SELECT * FROM employee";
    $select_employees = mysqli_query($connection, $employee_list_query);  
    while($row = mysqli_fetch_assoc($select_employees)){
    $employeeID = $row['employeeID'];	
    $employeeName = $row['employeeName'];
    $employeePhone = $row['employeePhone'];    
    $employeeEmail = $row['employeeEmail'];    
    $employeeAddress = $row['employeeAddress'];    
    $employeeCountry = $row['employeeCountry'];    
    // $post_image = $row['post_image'];    
    // $post_tags = $row['post_tags'];    
    // $post_comment_count = $row['post_comment_count'];    
    // $post_date = $row['post_date'];   
        
        echo "<tr>";
        echo "<td>$employeeID</td>";
        echo "<td>$employeeName</td>";
        echo "<td>$employeePhone</td>";
        echo "<td>$employeeEmail</td>";
        echo "<td>$employeeAddress</td>";
        // echo "<td>$employeeCountry</td>";
        
        
        // $query = "SELECT * FROM clients WHERE cat_id= {$post_categories_id}";
        // $select_categories_id = mysqli_query($connection, $query);  
        // while($row = mysqli_fetch_assoc($select_categories_id)){
        // $cat_id = $row['cat_id'];
        // $cat_title = $row['cat_title'];
        
        // echo "<td>$cat_title</td>";
    
        // }
        
        
        // echo "<td>$post_status</td>";
        // echo "<td><img src= '../images/$post_image' width='100' alt= 'image'></td>";
        // echo "<td>$post_tags</td>";
        // echo "<td>$post_comment_count</td>";
        // echo "<td>$post_date</td>";
        // echo "<td><a href ='employees.php?source=edit_employee&p_id={$employee_id}'>Edit</a></td>";
        // echo "<td><a href ='employees.php?delete={$employee_id}'>Delete</a></td>";
        echo "<td>
                <center> <a href ='#'> <button class='btn_view'><i class='fa fa-eye'></i> View </button></a>
                <a href ='#'> <button class='btn_edit'><i class='fa fa-edit'></i> Edit</button></a>
                <a href ='#'> <button class='btn_delete'><i class='fa fa-close'></i> Delete</button></a>
                </center>
        </td>";
        echo "</tr>";
        
        
        
        
    }

    ?>    
                            
        <?php
                                
        if(isset($_GET['delete'])){
            $the_employee_id = $_GET['delete'];
            
            $query = "DELETE from employees WHERE id ={$the_employee_id} ";
            
            mysqli_query($connection, $query);
            header ('Location: employees.php');
        }                        
        ?>
                            
                            
                               
                            
                        </tbody>
                        </table>  

                      
