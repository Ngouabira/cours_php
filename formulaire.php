<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <div class="row">
        <div class="col-sm-4 col-xs-4 col-lg-4  bg-success h-100">
            <p>Colonne 1</p>
        </div>
        <div class="col-sm-4 col-xs-4 col-lg-4  bg-warning h-100">
            <p>Colonne 2</p>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-4 bg-danger h-100">
            <p>Colonne 3</p>
        </div>
    </div>

    <form action="">


        <div class="col-lg-6 offset-lg-3">
            <label for="nom">Nom</label>
            <input class="form-control" type="text" name="nom" id="nom">
        </div>

        <div class="col-lg-6 offset-lg-3">
            <label for="prenom">Prenom</label>
            <input class="form-control" type="text" name="prenom" id="prenom">
        </div>

        <center><button class="btn btn-primary mt-3" type="submit">Envoyer</button></center>



    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>