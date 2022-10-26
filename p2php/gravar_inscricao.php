<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    
    <title>Inscritos</title>
</head>
<body>
    <div>
        <h1 style="text-align: center">Inscrições</h1>
        <?php
        $handle = fopen("cadastros.txt", "r");
        while (!feof($handle)) {
                $line = fgets($handle);
                echo $line ."<br>";
            }
        fclose($handle);
        ?>
    </div>
</body>
</html>