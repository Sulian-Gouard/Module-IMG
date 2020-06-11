<?php


?>



<!DOCTYPE html>
<html lang="fr">

<?php

var_dump($_FILES);

$fileSizeMax = 3000000;
$fileSize = getimagesize($_FILES['myImg']['size']);

if ($fileSize > $fileSizeMax) {
    echo 'fihier trop volumineux';
} else {
    echo 'c\'est good';
}



?>


<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\uploadPreview.css" link>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moduleIMG</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <p class="h2">Module d'enregistrement d'images.</p>
                <p>Mise en pratique php: upload d'images.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            <img class="preview">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="myImg">parcourir images</label>
                        <input type="file" class="form-control" id="myImg" name="myImg" data-preview=".preview">
                    </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="assets/uploadPreview.js"></script>
</body>

</html>