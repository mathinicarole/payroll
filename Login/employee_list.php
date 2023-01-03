
<?php
include('connection.php');

?>
<?php
session_start();

if(!isset($_SESSION["username"]))
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ALPHA TECH Payroll System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">
    </head>
    
    <body>

        <div class="container ">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM employees";
                $select_query = mysqli_query($conn,$select);
                while($row=mysqli_fetch_array($select_query)){ 
                ?>
                <tr>
                                    
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['gender']?></td>

                <td><a href="" class='btn btn-success'>View</a>
                <a href="" class='btn btn-danger'>delete</a></td>

            </tr>
            <?php
            }
            ?>

            </tbody>
        </table>
        </div>

            
                
    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


</html>