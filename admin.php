<?php
include 'Database.php';
 if($_SERVER['REQUEST_METHOD']=='POST'){

        $conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
        if(!$conn)
        { 
            die(" Error in connection".mysqli_connect_erro());
        }else{
 $user = $_POST['user'];
 $password = $_POST['pass'];
 
 $Sql_Query = "select * from admin where Username = '$user' and Password = '$password' ";
 
 $check = mysqli_fetch_array(mysqli_query($conn,$Sql_Query));
 
 if(isset($check)){
    echo "<script> location.href='http://localhost/web/index.html'</script>";
 }
 else{
 $mes="Invalid Username or Password Please Try Again";
 echo "<script>alert('$mes'); location.href='http://localhost/web/admin.html'</script>";
 }
 }}
//mysqli_close($conn);
?>