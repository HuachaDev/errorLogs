<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Logs</title>
</head>

<body>
    <style>
        .span {
            margin-right: 10px;
            padding: 4px;
            color: white;
            background: #c43c35;
            border-radius: 3px;
            font-weight: bold;
        }

        .label {
            font-weight: bold;
        }
    </style>
    <h1 style="text-align:center;">Logs</h1>
    <div class="container ">
        <div class="row">
             <?php foreach ($dataRender as $key => $logs) {
                foreach ($logs as  $value) {
                    echo "<div class='card mt-5' > ";
                    echo "<div class='card-header'>";
                    echo "<span class='span'> ERROR </span>" .  $value['dateTime'];
                    echo "</div>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'> " .  $value['key'] . " </h5> ";
                    echo " <span class='card-text label'> IP :  </span>" .  $value['ip'] . "<br>";
                    echo " <span class='card-text label'> Linea :  </span>" .  $value['line'] . "<br>";
                    echo " <span class='card-text label'> Archivo :  </span>" .  $value['file'] . "<br>";
                    echo " <span class='card-text label'> Mensaje :  </span>" .  $value['message'] . "<br>";
                    echo "</div>";
                    echo "</div>";
                }
            }
            ?> 
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>