<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="col-8 mx-auto">
<form action="" method='post'>
<table class="col mx-auto table">
<thead>

<th colspan="2">Client Name</th>
<th colspan="3"><?php echo $_SESSION['clientName']?></th>

</thead>


<tbody>
<tr class='text-center'>
<th>Name</th>
<th>Football</th>
<th>Volleyball</th>
<th>Swimming</th>
<th>Other</th></tr>
</tr>
    <?php

        if(isset($_SESSION['count'])){
            $number=(int)$_SESSION['count'];
            for ($x=0;$x<$number;$x++)
            {
            echo "<tr class='text-center'> 
            <td><input class='form-control' type='text' placeholder='Member's name' name='member".$x."'></td>
            <td><input type='checkbox' name='football".$x."'></td>
            <td><input type='checkbox' name='volleyball".$x."'></td>
            <td><input type='checkbox' name='swimming".$x."'></td>
            <td><input type='checkbox' name='other".$x."'></td>
            </tr>";
            }
        if(isset($_POST['sub'])){
            for($x=0;$x<(int)$_SESSION['count'];$x++){
                $_SESSION['name'.$x]=$_POST['member'.$x];
                $_SESSION['football'.$x]=isset($_POST['football'.$x])?300:null;
                $_SESSION['volleyball'.$x]=isset($_POST['volleyball'.$x])?150:null;
                $_SESSION['swimming'.$x]=isset($_POST['swimming'.$x])?250:null;
                $_SESSION['other'.$x]=isset($_POST['other'.$x])?100:null;
                header("Location:final.php");
            }
        }
}
?>
</tbody>
</table>

<button class="btn btn-primary form-control" name='sub'>Submit</button>
</form>
</div>
</body>
</html>