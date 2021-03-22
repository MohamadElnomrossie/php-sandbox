
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="col-3 x-auto m-auto mt-5 text-center">
        <h3 class="h3">Enter Value</h3>
        <form method="post" class="form-control col-4 px-2">
            <input type="number" min="0" max="100" name='physics' class="form-control mx-auto my-2" placeholder="Physics">
            <input type="number" min="0" max="100" name='chemistry' class="form-control mx-auto my-2" placeholder="Chemistry">
            <input type="number" min="0" max="100" name='biology' class="form-control mx-auto my-2" placeholder="Biology">
            <input type="number" min="0" max="100" name='math' class="form-control mx-auto my-2" placeholder="Math">
            <input type="number" min="0" max="100" name='computer' class="form-control mx-auto my-2" placeholder="Computer">
            <button class="btn btn-primary x-auto yt-2 mt-2">Calculate</button>
        </form>
        <h3 class="h3">

        <?php
            if ($_POST) {
                $physics = is_numeric($_POST['physics']) ? $_POST['physics'] : 0;
                $chemistry = is_numeric($_POST['chemistry']) ? $_POST['chemistry'] : 0;
                $biology = is_numeric($_POST['biology']) ? $_POST['biology'] : 0;
                $math = is_numeric($_POST['math']) ? $_POST['math'] : 0;
                $computer = is_numeric($_POST['computer']) ? $_POST['computer'] : 0;
                $total= ($physics+$chemistry+$biology+$math+$computer)/500;
                if($total>=.9){
                    echo "Grade A";
                }
                elseif($total>=.8){
                    echo "Grade B";
                }
                elseif($total>=.7){
                    echo "Grade C";
                }
                elseif($total>=.6){
                    echo "Grade D";
                }
                elseif($total>=.4){
                    echo "Grade E";
                }
                else{
                    echo "Grade F";
                }
            }
            ?>
        </h3>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>