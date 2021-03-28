<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>

<body>
  <div class='col-6 mx-auto p-3'>
    <div class="col row">
      <form action="" method='post'>
        <label for="" class="form-controller mt-2 d-block">Customer's name</label>
        <input type="text" class="form-controller col-12" placeholder="Name" name='name' value=<?php echo isset($_SESSION['name'])? $_SESSION['name']:""?>>
        <label for="" class="form-controller mt-2 d-block">City</label>
        <input type="text" class="form-controller col-12" placeholder="City" name='city' value=<?php echo isset($_SESSION['city'])? $_SESSION['city']:""?>>
        <label for="" class="form-controller mt-2 d-block">Products</label>
        <input type="number" name='count' class="form-controller col-12" placeholder="Products" min='0' value=<?php echo isset($_SESSION['number'])? $_SESSION['number']:""?>>
        <button class='btn btn-primary col-12 mt-3' name='first'>Enter products</button>
    </div>
  </div>
  <div class='col-6 mx-auto p-3'>
  <?php
  $delivery=['Cairo'=>0,'Alexandria'=>50,'Giza'=>30];
if(isset($_POST['first'])){ 
  session_destroy();
  session_start();
  $x = 0;
  $number = (isset($_POST['count'])) ? $_POST['count'] : 0;
  $_SESSION['number']=$_POST['count'];
  $_SESSION['name']=$_POST['name'];
  $_SESSION['city']=$_POST['city'];        
            echo "
              <table class='col-12'>
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Amount</th>
                  </tr>
                </thead>
                <tbody>";
            while ($x < $number) {
              echo "<tr>
              <td><input class='col-12'type='text' name='itm" . $x . "'></td>
              <td><input class='col-12'type='number' name='price" . $x . "'></td>
              <td><input class='col-12'type='number' name='quantity" . $x . "'></td>
              </tr>";
              $x++;}
            echo"</tbody></table>";
            echo "<button type='submit' class='btn btn-primary col-12 mt-3' name='calculate'>Calculate</button>";
            $_POST['calculate']=1;
          }
          elseif(isset($_POST['calculate'])){
            echo "<table class='col-12 table table-striped'>
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Amount</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>";
            $gtotal=0;
            for ($n=0;$n<$_SESSION['number'];$n++){
              $name= $_POST['itm'.$n];
              $price=(float)$_POST['price'.$n];
              $amount=(int)$_POST['quantity'.$n];
              $city=$_SESSION['city'];
              echo "<tr>
              <td>".$name."</td>
              <td>".$price."</td>
              <td>".$amount."</td>
              <td>".$price*$amount."</td></tr>";
              $gtotal+=($price*$amount);
          };
          $deliveryFees=isset($delivery[$city])?$delivery[$city]:100;
          if($gtotal>1000 and $gtotal<3000){
            $discount=.1;
          }
          elseif($gtotal>3000 and $gtotal<4500){
            $discount=.15;
          }
          elseif($gtotal>4500){
            $discount=.2;
          }
          else{
            $discount=0;
          }
          $gt=$gtotal+$gtotal*$discount+$deliveryFees;
          echo '
          <tr><td class="text-center  class="fw-bolder"" colspan="4">Total is '.$gtotal.'</td></tr>
          <tr><td class="text-center" colspan="4">Delivery '.$deliveryFees.'</td></tr>
          <tr><td class="text-center" colspan="4">Discount '.$discount.'</td></tr>
          <tr><td class="text-center" colspan="4">Grand Total '.$gt.'</td></tr>
          </tbody></table>';
        }         
          ?>
    </form>
  </div>
  </div>
</body>
</html>