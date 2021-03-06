<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <h1>Module d'enregistrement d'images</h1>
        <p>Mise en pratique PHP : Upload d'images</p>
    </header>


    <div class="container">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <label for="fileName"></label>
                        <input placeholder="Placeholder" id="fileName" type="file" class="validate">
                    </div>
                    <div class="input-field col s6">
                        <label for="last_name"></label>
                        <input id="last_name" type="submit" class="UPLOAD">
                    </div>
                </div>
            </form>
        </div>
    </div>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>