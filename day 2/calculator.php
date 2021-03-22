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
            <input type="number" name='fnumber' class="form-control mx-auto my-2" placeholder="First number">
            <input type="number" name='snumber' class="form-control mx-auto my-2" placeholder="Second number">
            <select name="op" id="" class="form-control text-center">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="divide">/</option>
            </select>
            <button class="btn btn-primary x-auto yt-2 mt-2">calculate</button>
        </form>
        <h3 class="h3">
            <?php
            if ($_POST) {
                $first = is_numeric($_POST['fnumber']) ? +$_POST['fnumber'] : 0;
                $second= is_numeric($_POST['snumber']) ? +$_POST['snumber'] : 0;
                $op= $_POST['op'];
                switch ($op)
                    {
                        case 'add':{
                        echo $first+$second;
                        break;
                    }
                    case 'sub':{
                        echo $first-$second;
                        break;
                    }
                    case 'mul':{
                        echo $first*$second;
                        break;
                    }
                    case 'divide':{
                        echo $first/$second;
                        break;
                    }
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