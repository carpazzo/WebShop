<?php
    session_start ();
    $_SESSION["Login"] = "YES";
    if (isset ($_SESSION["uid"]))
    {
        include "../database_conection.php"; 
        if (isset($_POST[0])){
            echo json_encode($_POST[0]);
        }
        // $customersquery= "SELECT * FROM customers" ;
        // $results = mysqli_query($mysqlpoint, $customersquery);
        // $json = mysqli_fetch_all($results, MYSQLI_ASSOC);
        // echo json_encode($json);
    } else 
    {
        header('HTTP/1.0 401 Unauthorized');
        echo 'You are not logged in!';
    }

    // if (isset($_POST['submit']))
// {
//     $cid= $_POST['customerid'];        
//     $cname = $_POST['updatename'];
//     $csurname = $_POST['updatesurname'];
//     $cmail = $_POST['updateemail'];
//     $caddress = $_POST['updateaddress'];
//     $cphone = $_POST['updatephone'];



//     $sqlupdate = $mysqlpoint->prepare ("UPDATE customers SET CustomerName='$name', CustomerSurname='$csurname', CustomerEmail='$cmail', CustomerAddress='$caddress', CustomerPhone='$cphone' WHERE CustomerID ='$cid'");
//     $query->execute();
//     if(!mysqli_query($mysqlpoint,$sqlupdate))
//     {   
//         die ("Error updating Membership!".mysqli_error($mysqlpoint));
//     }
//     else 
//     {
//         echo "Customer Updated!";
//         session_start ();
//         header ("Location: administrative.php");
//     }


   
// }

?>