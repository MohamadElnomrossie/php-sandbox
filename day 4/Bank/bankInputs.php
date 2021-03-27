  <?php
  session_reset();
  session_start(); 
  ob_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BANK</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
  <div class="col-2 p-3 mx-auto mt-4 border border-2">
    <form action="" method="post">
      <label class='text-left' for="" class="form-controller mt-4">Amount</label>
      <input type="number" name='amount' class="form-controller col-12" min='0' value=<?php echo (isset($_POST['amount']) ? $_POST['amount'] : '') ?>>
      <label for="" class="form-controller mt-4">Amount</label>
      <input type="number" name='years' class="form-controller col-12" min='0' value=<?php echo (isset($_POST['years']) ? $_POST['years'] : '') ?>>
      <div class='col text-center my-4'><button class='btn btn-primary'>Calculate</button></div>
      <?php if (!isset($_POST['amount']) || !isset($_POST['years'])) {
        echo "<div class='alert alert-danger'>Please Enter valid values</div>";
      } else {
        $_SESSION['amount'] = $_POST['amount'];
        $_SESSION['years'] = $_POST['years'];
        header('Location:bankOutputs.php');
      }
      ob_end_flush()
      ?>
    </form>
  </div>
</body>

</html>