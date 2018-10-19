                        <!-- <table class="table table-bordered table-hover"> -->
<!-- <div class="container">   -->
     <!-- <div class="table-responsive"> -->
                           



                            <table id="client_list" class="display" >
        <thead>
            <tr>
                <th>Serial No</th>
                <th> Name </th>
                <th>Payment Amount</th>
                <th>Payment For</th>
                <th> Transaction id</th>
                <th> Date </th>
                
                <!-- <th>Client State</th> -->
                <!-- <th>Client City</th> -->
            </tr>
        </thead>
        <tbody>


         <?php   
    $clients_query = "SELECT * FROM payments WHERE isDeleted= '0' " ;
    $client_data = mysqli_query($connection, $clients_query);  
    while($row = mysqli_fetch_assoc($client_data)){
    $paymentID = $row['paymentID'];   
    $paymentName = $row['paymentName'];
    $paymentPhone = $row['paymentPhone'];    
    $paymentEmail = $row['paymentEmail'];    
    $paymentAddress = $row['paymentAddress'];    
    $paymentCountry = $row['paymentCountry'];  
    $paymentState = $row['paymentState'];  
    $paymentCity = $row['paymentCity'];  
    $createdOn = $row['createdOn'];    

    $paymentAmmount = $row['paymentAmmount'];  
    $paymentFor = $row['paymentFor'];  
    $TransactionID = $row['TransactionID'];  
    // $post_image = $row['post_image'];    
    // $post_tags = $row['post_tags'];    
    // $post_comment_count = $row['post_comment_count'];    
    // $lastupdate_on = $row['lastupdate_on'];   
        
        echo "<tr>";
        echo "<td>$paymentID</td>";
        echo "<td>$paymentName</td>";
        echo "<td>$paymentAmmount</td>";
        echo "<td>$paymentFor</td>";
        echo "<td>$TransactionID</td>";
        // echo "<td>$clientCountry</td>";
        // echo "<td>$clientState</td>";
        // echo "<td>$clientCity</td>";
        // echo "<td>$lastupdatedOn</td>";
        
        
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
        // echo "<td><a href ='clients.php?source=edit_client&p_id={$clientID}'>Edit</a></td>";
        // echo "<td><a href ='clients.php?delete={$clientID}'>Delete</a></td>";

        echo "<td>
           $createdOn          
        </td>";
        echo "</tr>";
        
        
        
                
        
    }

    ?>    
                            
        <?php
                                
        // if(isset($_GET['delete'])){
        //     $the_client_id = $_GET['delete'];
            
        //     $delete_client_query = "UPDATE from clients WHERE clientID ={$the_client_id} ";
            
        //     mysqli_query($connection, $delete_client_query);
        //     header ('Location: clients.php');
        // }              


         if(isset($_GET['note_delete'])){
                 $the_client_id = $_GET['note_delete'];
                 
                 $not_delete_client_query = "UPDATE clients SET isDeleted= '1' WHERE clientID=$the_client_id  ";
                 $note_delete_query = mysqli_query($connection, $not_delete_client_query);
                 header ("Location: clients.php");
                 
                                
             }                   
                                
                                
             //   if(isset($_GET['delete_1'])){
             //     $the_client_id = $_GET['approve'];
                 
             //     $query = "UPDATE clients SET isDeleted= '1'  WHERE clientID=$the_client_id   ";
             //     $approve_comment_query = mysqli_query($connection, $query);
             //     header ("Location: clients.php");
                 
                   
             // }         

        ?>

        </tbody>
       <!--  <tfoot> -->
         <!--    <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr> -->
        <!-- </tfoot> -->
    </table>

      <script type="text/javascript">
        
// $('#delete_product').on('click',function(e){
//     e.preventDefault();
//     var form = $(this).parents('form');
//     swal({
//         title: "Are you sure?",
//         text: "You will not be able to recover this imaginary file!",
//         type: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#DD6B55",
//         confirmButtonText: "Yes, delete it!",
//         closeOnConfirm: false
//     }, function(isConfirm){
//         if (isConfirm) form.submit();
//     });
// });


// function archiveFunction() {
// event.preventDefault(); // prevent form submit
// var form = event.target.form; // storing the form
//         swal({
//   title: "Are you sure?",
//   text: "But you will still be able to retrieve this file.",
//   type: "warning",
//   showCancelButton: true,
//   confirmButtonColor: "#DD6B55",
//   confirmButtonText: "Yes, archive it!",
//   cancelButtonText: "No, cancel please!",
//   closeOnConfirm: false,
//   closeOnCancel: false
// },
// function(isConfirm){
//   if (isConfirm) {
//     window.location.href = "clients.php?note_delete={$clientID}" + id;
//     // form.submit();          // submitting the form when user press yes
//   } else {
//     swal("Cancelled", "Your imaginary file is safe :)", "error");
//   }
// });
// }



// $(document).ready(function(){
        
//         readProducts(); /* it will load products when document loads */
        
//         $(document).on('click', '#delete_product', function(e){
            
//             var productId = $(this).data('clientID');
//             SwalDelete(productId);
//             e.preventDefault();
//         });
        
//     });
    
//     function SwalDelete(productId){
        
//         swal({
//             title: 'Are you sure?',
//             text: "It will be deleted permanently!",
//             type: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             confirmButtonText: 'Yes, delete it!',
//             showLoaderOnConfirm: true,
              
//             preConfirm: function() {
//               return new Promise(function(resolve) {
                   
//                  $.ajax({
//                     url: 'clients.php',
//                     type: 'POST',
//                     data: 'note_delete='+productId,
//                     dataType: 'json'
//                  })
//                  .done(function(response){
//                     swal('Deleted!', response.message, response.status);
//                     readProducts();
//                  })
//                  .fail(function(){
//                     swal('Oops...', 'Something went wrong with ajax !', 'error');
//                  });
//               });
//             },
//             allowOutsideClick: false              
//         }); 
        
//     }

    </script>
    <script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

$('#reloadpage').click(function() {
 
    location.reload(true);
 
});

function archiveFunction(id) {
event.preventDefault(); // prevent form submit
var form = event.target.form; // storing the form
        swal({
  title: "Are you sure?",
  text: "But you will still be able to retrieve this file.",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Delete it!",
  cancelButtonText: "No, cancel please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
    // function(isConfirm){
    //   if (isConfirm) {
    //       window.location.href="delete.php?delete_id="+id;
    //     swal("Updated!", "Your imaginary file has been Deleted.", "success");   

    //   } else {
    //     swal("Cancelled", "Your file is safe :)", "error");
    //   }
    // });


    if (isConfirm) {
    // this is `post` request to the server
    // so you can get the data from $_POST variables, says $_POST['delete'] $_POST['v_id']
    $.ajax({
        method: GET,
        data: {'note_delete': true, 'clientID' : id },
        url: 'clients.php',
        success: function(data) {

        }
    });
    swal("Updated!", "Your imaginary file has been Deleted.", "success");

} else {
    swal("Cancelled", "Your file is safe :)", "error");
}
}
 

</script>
                    
 


