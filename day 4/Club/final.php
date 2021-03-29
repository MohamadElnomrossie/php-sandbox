<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class='col-8 mx-auto'>
        <table class="table">
            <thead>
                <th colspan="2">Name</th>
                <th colspan="3"><?php echo $_SESSION['clientName']; ?></th>
            </thead>
            <tbody class='text-center'>
                <tr>
                    <th>Name</th>
                    <th>Football</th>
                    <th>Volleyball</th>
                    <th>Swimming</th>
                    <th>Other</th>
                </tr>
                <?php
                $sub=0;
                for ($x = 0; $x < $_SESSION['count']; $x++) {
                    $football = (int)$_SESSION['football' . $x];
                    $volleyball = (int)$_SESSION['volleyball' . $x];
                    $swimming = (int)$_SESSION['swimming' . $x];
                    $other = (int)$_SESSION['other' . $x];
                    $familySub=$_SESSION['count']*2500;
                    $sub+=$football+$volleyball+$swimming+$other;
                    $total=$sub+$familySub+10000;
                    echo "<tr><td>".$_SESSION['name'.$x]."</td>
                    <td>".$football."</td>
                    <td>".$volleyball."</td>
                    <td>".$swimming."</td>
                    <td>".$other."</td>
                    </tr>";
                }
                echo"<tr class='text-left'><th colspan='2'>Subscription Fees:</th><td colspan='3'>10000</td></tr>
                <tr class='text-left'><th colspan='2'>Family Subscription: 2500 X ".$_SESSION['count']."</th><td colspan='2'>".$familySub."</td></tr>
                <tr class='text-left'><th colspan='2'>Sports Subscription </th><td colspan='3'>".$sub."</td></tr>
                <tr class='text-left'><th colspan='2'>Grand total </th><td colspan='3'>".$total."</td></tr>
                "

                ?>
            </tbody>
            <table>
    </div>
</body>

</html>