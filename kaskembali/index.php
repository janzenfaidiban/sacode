<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaskembali</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-dark">


    <div class="container py-5">
        <div class="card mx-auto" style="width:50%;">
            <div class="card-header bg-dark text-warning">
                <a href="../kaskembali/" class="btn text-light"><h1>Kaskembali</h1></a>
            </div>
            <div class="card-body">
                
                <form action="functions/create.php" method="post"  enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control form-control-lg mt-1" name="full_name" placeholder="Write you full name here">
                    </div>
                    <div class="form-group mb-3">
                        <label for="file">File</label>
                        <input type="file" class="form-control form-control-lg mt-1" name="file">
                    </div>
                    <div class="form-group mb-3">
                        <hr>
                        <input type="submit" class="btn btn-lg btn-warning" name="upload" value="Submit">
                        <input type="reset" class="btn btn-lg btn-warning bg-light text-dark" value="Reset">
                    </div>
                </form>

                <a href="../kaskembali/view_files.php" class="btn btn-link">View Files</a>

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