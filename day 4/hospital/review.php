<?php ;
session_start();
ob_start();
include_once('header.php');
 ?>
<div class='col-8 mx-auto mt-5 pt-5'>
    <h1 class="display-6">Review Our Service</h1>
    <hr>
    <form action="" method='post'>
        <table class="table">
            <thead>
                <tr class='text-center'>
                    <th scope="col text-left">#</th>
                    <th class="col text-left">Question</th>
                    <th scope="col">Poor</th>
                    <th scope="col">Good</th>
                    <th scope="col">Very good</th>
                    <th scope="col">Excellent</th>
                </tr>
            </thead>
            <tbody>
                <tr class='text-center'>
                    <th scope="row">1</th>
                    <td class='text-left'>Are you satisfied with hygiene and cleanliness?</td>
                    <td><input class="form-check-input" type="radio" name="first" <?php echo (isset($_POST['first']) AND (int)$_POST['first']==0)?'checked':''?> value="0" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="first" <?php echo (isset($_POST['first']) AND (int)$_POST['first']==3)?'checked':''?> value="3" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="first" <?php echo (isset($_POST['first']) AND (int)$_POST['first']==5)?'checked':''?> value="5" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="first" <?php echo (isset($_POST['first']) AND (int)$_POST['first']==10)?'checked':''?> value="10" id="flexRadioDefault1"></td>
                </tr>
                <tr class='text-center'>
                    <th scope="row">2</th>
                    <td class='text-left'>Are you satisfied our prices?</td>
                    <td><input class="form-check-input" type="radio" name="second" <?php echo (isset($_POST['second']) AND (int)$_POST['second']==0)?'checked':''?> value="0" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="second" <?php echo (isset($_POST['second']) AND (int)$_POST['second']==3)?'checked':''?> value="3" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="second" <?php echo (isset($_POST['second']) AND (int)$_POST['second']==5)?'checked':''?> value="5" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="second" <?php echo (isset($_POST['second']) AND (int)$_POST['second']==10)?'checked':''?> value="10" id="flexRadioDefault1"></td>
                </tr>
                <tr class='text-center'>
                    <th scope="row">3</th>
                    <td class='text-left'>Are you satisfied our nursing staff?</td>
                    <td><input class="form-check-input" type="radio" name="third"  <?php echo (isset($_POST['third']) AND (int)$_POST['third']==0)?'checked':''?> value="0" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="third"  <?php echo (isset($_POST['third']) AND (int)$_POST['third']==3)?'checked':''?> value="3" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="third"  <?php echo (isset($_POST['third']) AND (int)$_POST['third']==5)?'checked':''?> value="5" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="third"  <?php echo (isset($_POST['third']) AND (int)$_POST['third']==10)?'checked':''?> value="10" id="flexRadioDefault1"></td>
                </tr>
                <tr class='text-center'>
                    <th scope="row">4</th>
                    <td class='text-left'>Are you satisfied our doctors?</td>
                    <td><input class="form-check-input" type="radio" name="fourth" <?php echo (isset($_POST['fourth']) AND (int)$_POST['fourth']==0)?'checked':''?> value="0" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="fourth" <?php echo (isset($_POST['fourth']) AND (int)$_POST['fourth']==3)?'checked':''?> value="3" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="fourth" <?php echo (isset($_POST['fourth']) AND (int)$_POST['fourth']==5)?'checked':''?> value="5" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="fourth" <?php echo (isset($_POST['fourth']) AND (int)$_POST['fourth']==10)?'checked':''?> value="10" id="flexRadioDefault1"></td>
                </tr>
                <tr class='text-center'>
                    <th scope="row">5</th>
                    <td class='text-left'>Are you satisfied our atmosphere?</td>
                    <td><input class="form-check-input" type="radio" name="fifth" <?php echo (isset($_POST['fifth']) AND (int)$_POST['fifth']==0)?'checked':''?> value="0" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="fifth" <?php echo (isset($_POST['fifth']) AND (int)$_POST['fifth']==3)?'checked':''?> value="3" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="fifth" <?php echo (isset($_POST['fifth']) AND (int)$_POST['fifth']==5)?'checked':''?> value="5" id="flexRadioDefault1"></td>
                    <td><input class="form-check-input" type="radio" name="fifth" <?php echo (isset($_POST['fifth']) AND (int)$_POST['fifth']==10)?'checked':''?> value="10" id="flexRadioDefault1"></td>
                </tr>
            </tbody>
        </table>
    <div class="col text-center">
    <button class="btn btn-primary">Submit</button>
    <?php
    if(!isset($_POST['first'])|| !isset($_POST['second'])|| !isset($_POST['third'])|| !isset($_POST['fourth'])|| !isset($_POST['fifth'])){
        echo "<div class='alert alert-warning'>Please answer all questions</div>";
    }
    else{
        $_SESSION['input']=$_POST;
        header("Location:result.php");}
    ob_end_flush();
    ?>
    </div>
    </form>

</div>
</body>
</html>