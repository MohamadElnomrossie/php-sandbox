<?php
include_once('header.php');
session_start();
$scheme=['0'=>'Poor', '3'=>'Good','5'=>'Very good','10'=>'Excellent'];
$total=(int)$_SESSION['input']['first']+(int)$_SESSION['input']['second']+(int)$_SESSION['input']['third']+(int)$_SESSION['input']['fourth']+(int)$_SESSION['input']['fifth']?>
<div class="col-4 mx-auto border border-2 px-2 mt-4">
<table class="table">
            <thead>
                <tr class='text-center'>
                    <th scope="col text-left">#</th>
                    <th class="col text-left">Question</th>
                    <th scope="col">Evaluation</th>
                </tr>
            </thead>
            <tbody>
                <tr class='text-center'>
                    <th scope="row">1</th>
                    <td class='text-left'>Are you satisfied with hygiene and cleanliness?</td>
                    <td><?php echo $scheme[$_SESSION['input']['first']]?></td>
                </tr>
                <tr class='text-center'>
                    <th scope="row">2</th>
                    <td class='text-left'>Are you satisfied our prices?</td>
                    <td><?php echo $scheme[$_SESSION['input']['second']]?></td>
                </tr>
                <tr class='text-center'>
                    <th scope="row">3</th>
                    <td class='text-left'>Are you satisfied our nursing staff?</td>
                    <td><?php echo $scheme[$_SESSION['input']['third']]?></td>
                </tr>
                <tr class='text-center'>
                    <th scope="row">4</th>
                    <td class='text-left'>Are you satisfied our doctors?</td>
                    <td><?php echo $scheme[$_SESSION['input']['fourth']]?></td>
                </tr>
                <tr class='text-center'>
                    <th scope="row">5</th>
                    <td class='text-left'>Are you satisfied our atmosphere?</td>
                    <td><?php echo $scheme[$_SESSION['input']['fifth']]?></td>
                </tr>
            </tbody>
        </table>
        <?php echo ($total>25)? "<div class='alert alert-success text-center'>Thank you</div>":"<div class='alert alert-danger text-center'>One of our team will call you on ".$_SESSION['number']."</div>";?>
</div>
</body>
</html>

