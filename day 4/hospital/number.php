<?php
session_start();
include_once('header.php')
?>

    <div class="offset-4 col-4 my-4 border border-2 p-2">
        <form action="" method='post' class="form">
            <div class="mb-3">
                <label for="exampleFormControlInput1 ms-2" class="form-label">Email address</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0100000000" name='number'>
                <button class="btn btn-primary offset-5 mt-4">Review</button>
                <?php
                if(isset($_POST['number']))
                    {
                        if (strlen($_POST['number'])<=11 AND strlen($_POST['number'])>=7 AND $_POST['number'][0]=='0' ){
                            $_SESSION['number']=$_POST['number'];
                            header("Location:review.php");
                        }else{
                            echo "<div class='alert alert-danger mt-2'>Please enter a valid phone number</div>";
                            session_reset();
                         }
                    }
                ?>
            </div>
        </form>
    </div>
</body>

</html>