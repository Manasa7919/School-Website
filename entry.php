<html>
    <HEAD>
        <style>
            .two {
  color: rgb(252, 252, 252);
  font-weight: bold;
  font-size: 30px;
}
body{
    background-image: url("5.jpg");
}
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </HEAD>
    <body> 
    <a href="1.html" class="t">
            <i class="fa fa-chevron-circle-left" style="font-size:30px;color:black"></i>
         </a>
         <label class="two">HOME</label>              
    <?php
        include 'Database.php';
       if($_SERVER['REQUEST_METHOD']=='GET'){
        $class=$_GET['class'];
        $sub=$_GET['Subject'];
        $c="class".$class;
               $conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
               if(!$conn)
               { 
                   die(" Error in connection".mysqli_connect_erro());
               }
               session_start();
        $_SESSION['c']=$c;
        $_SESSION['s']=$sub;
              
            //    echo $c;
            //    echo $sub;
            $sql = "SELECT * from $c ";
            $var=0;
            $var2=1000;
            ?>
            <h1 align="center" style="margin-top:50px"><?php echo $c?>:<?php echo $sub?></h1>
             <form action="sub.php" method="POST" >
            <table border="3" align="center" cellpadding='5px'>
            <tr bgcolor='grey'>
                <td>Name</td>
                <td><?php echo $sub?></td>
            </tr>
           
            <?php
         
          if($result = mysqli_query($conn,$sql))
            while($row = mysqli_fetch_assoc($result)) {
                ?>        
                   <tr>
                       <td style="width:200px" ><input type="text" style="border-width:0px;border:none;background-color: cadetblue" value=<?php echo $row['Name']; ?> name=<?php echo $var2=$var2+1; ?> readonly ></td>
                       <td><input type="text" required value=<?php echo $row[$sub]; ?> name=<?php echo $var=$var+1; ?> ></td>

                   </tr>
           <?php            
            }  
        ?>
        <tr><td colspan="2"><center><input type="submit" value="submit" onclick="sub()"></center></td></tr>
        </table>
         </form>
             <?php           
        }
         ?>
        </div>
        <?php  
    function sub()
    {
        
        if(mysqli_query($conn,$sql)) {
            ?>
            <script>
         alert("Successful'");
         </script>
         <?php
        }
           else
           ?>
            <script>
         alert("Unuccessful'");
         </script>
       <?php
    }
    ?>  
    </body>
</html>