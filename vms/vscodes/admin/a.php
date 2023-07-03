<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Detail</title>
    <link rel="stylesheet" href="style4.css">
</head>
<style>
  table{
    border-collapse: collapse;
    background-color: rgba(58, 61, 65, 0.6);
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 10px;
    margin: auto;

}

th,td{
    border: 1px solid #011064;
    
    padding: 8px 30px;
    text-align: center;
    color: rgb(252, 252, 252);

}
th{
    text-transform: uppercase;
    font-weight: 500;
}
td{
    font-size: 13px;
}
</style>
<body>
    <?php
    include("../include/header.php");
    $host="vms.crmthbjxciun.ap-south-1.rds.amazonaws.com";
    $user="admin";
    $password="sameep077";
    $db="vms";



    $connect=mysqli_connect($host,$user,$password,$db);
    ?>
    
    <div class="main-div" style="margin-top:140px;">
        <h3 style="
    text-align: center;
">Details of all Registered ADMINS</h3>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>adminid</th>
                            <th>username</th>
                            <th>password</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                     $d_query="SELECT * from admin";
                     $result=mysqli_query($connect,$d_query);
                         while($d_row=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                            <td><?php echo $d_row['adminid'];?></td>
                            <td><?php echo $d_row['username'];?></td>
                            <td><?php echo $d_row['password'];?></td>
                           
                        </tr>
                        <?php
                         }
                     
                    ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>