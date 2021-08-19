<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaskembali</title>

    <!--- Style Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-dark">


    <div class="container py-5">
        <div class="card mx-auto" style="width:50%;">
            <div class="card-header bg-dark text-warning">
                <a href="../kaskembali/" class="btn text-light"><h1>Kaskembali</h1></a>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item  bg-warning">
                        <h3>Assignment Files</h3>
                    </li>
                    <?php $files = glob("files/*.*"); foreach($files as $zip) : ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <a href="<?=$zip?>" target="_blank" class="btn btn-light"><?=$zip?></a>
                        <a href="functions/delete.php?file=<?=$zip?>" class="btn btn-danger bg-light text-danger">X</a>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <a href="../kaskembali" class="btn btn-link">Upload File</a>
                

            </div>
            <div class="card-footer">
                <small>
                    Copyright &copy; 2021
                </small>
            </div>
        </div>
    </div>

    
</body>
</html>