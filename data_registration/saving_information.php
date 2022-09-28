<?php
    if(isset($_POST['planet']) and isset($_POST['color']) and isset($_POST['distance']) and isset($_POST['discoverer']) and isset($_POST['country']))
    {
        $saving_data = fopen("all_information.txt", "a");
        fwrite($saving_data, "\n" . "Planet: " . $_POST['planet']);
        fwrite($saving_data, "\n" . "Color: " .  $_POST['color']);
        fwrite($saving_data, "\n" . "Distance: " .  $_POST['distance']);
        fwrite($saving_data, "\n" . "Discover: " .  $_POST['discoverer']);
        fwrite($saving_data, "\n" . "Country: " .  $_POST['country']);
        fwrite($saving_data, "\n");
        fflush($saving_data);
        fclose($saving_data);

        header("location: registration.php");
        exit;
    }else
    {
        echo "Something with the cadastration! Try again! <br>";
        header("location: registration.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrando usuário</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style type="text/css">
            body{ font: 14px sans-serif; }
            .wrapper{ width: 350px; padding: 20px; }
        </style>
    </head>
    <body>
        <br><br>
        <a href="../data_registration/reading_information.php" class="btn btn-danger">See all Planets</a>
    </body>
</html>