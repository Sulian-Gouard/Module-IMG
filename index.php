<?php
if (isset($_FILES['myImg'])) {
    $infosfichier = pathinfo($_FILES['myImg']['name']);
    $extension_upload = $infosfichier['extension'];
}

if (!empty($_FILES['myImg']['name'])) {
    $message = 'Votre image : ' . $_FILES['myImg']['name'] . ' à bien était uploadée.';
} else {
    $message = 'Echec de l\'upload !';
}



var_dump($_FILES);

$fileSizeMax = 100000;
$fileSize = (filesize($_FILES['fichier']['size']));
$NomDuFichier = $_FILES['mon_fichier']['name'];


if ($fileSize > $fileSizeMax) {
    echo 'fichier trop volumineux';
} else {
    echo 'c\'est good';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\uploadPreview.css">
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
                <form action="index.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="myImg">parcourir images</label>
                        <input type="file" class="form-control" id="myImg" name="myImg" data-preview=".preview">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
                <div><?= $message ?></div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="assets/uploadPreview.js"></script>
</body>

</html>