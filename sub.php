<html>
  <?php
include 'Database.php';
// session_start();
//         $c=$_SESSION['c'];
//         $sub=$_SESSION['s'];
if($_SERVER['REQUEST_METHOD']=='POST'){

        $conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
        if(!$conn)
        { 
            die(" Error in connection".mysqli_connect_erro());
        }else{
            // $s1 = $_POST['s1'];
        session_start();
        $c=$_SESSION['c'];
        $sub=$_SESSION['s'];
             
             $result = mysqli_query($conn,"SELECT * FROM $c");
             $rows = mysqli_num_rows($result);
             $result2 = mysqli_query($conn,"SELECT * FROM $c");
             $rows2 = mysqli_num_rows($result);
             $num=$rows2+1000;
             for ($x = 1,$y=1001; $x <= $rows,$y<=$num; $x++,$y++) {
               $mar=$_POST[$x];
               $name=$_POST[$y];
              $sql="UPDATE $c set $sub=$mar where Name='$name'";
              
            // $s1='40';
           

        }
        
       }
      }  //mysqli_close($conn);
  ?>
  <body bgcolor="darkcyan">
  <p style="margin:200px;font-size:80px">Thank you !!!!!!!!!!!!!!!!!!!!!!!!!!</p>
  </html>