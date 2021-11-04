<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/bank.png">
    <link rel="stylesheet" href="index.css">
    <title>TSF | Bank</title>
</head>
<body>
    <?php include "navbar.php";?>
    <div class="container mt-5">
        <h2 class="text-center">Welcome To TSF Bank</h2>
    </div>
    <div id="customers"><?php include "customers.php"; ?></div>
    <hr>
    <div id="trans_money"><?php include "transfer.php";?></div>
    <hr>
    <div id="trans_history"><?php include "trans_history.php";?></div>
</body>
</html>