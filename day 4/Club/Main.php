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
<div class="col-4 mx-auto mt-4 px-2">
<form action="" method='post'>
<input type="text" class="form-control col my-3" placeholder="Client Name" name='clientName' value=<?php echo isset($_SESSION['clientName'])?$_SESSION['clientName']:""?>>
<input type="number" class="form-control col my-3" min='1' name='count' placeholder="Count of members"value=<?php echo isset($_SESSION['count'])?$_SESSION['count']:""?>>
<button class="btn btn-primary form-control" name='sub'>Subscribe</button>
</form>
</div>
</body>
</html>
<?php
session_start();

if(isset($_POST['sub'])){
    $_SESSION['clientName']=$_POST['clientName'];
    $_SESSION['count']=$_POST['count'];
    header('Location:SportsRegistration.php');
  
}
?>