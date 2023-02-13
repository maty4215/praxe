<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/dsdsdsds.png">
    <link rel="stylesheet" href="praxe.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nahrání obrázku</title>
</head>
<body>
    <h1 id="nadpis">Nahrání obrázku na stránku</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h2>Vyber obrázek</h2>
        <input type="file" name="file" class="file">
        <input type="submit" value="Upload" name="submit" class="button">
    </form>

<?php

    if (isset($_POST['submit'])) {
        $target_file = $_FILES['file']['tmp_name'];
        $image_info = getimagesize($target_file);
        $image_type = $image_info[2];

        }

        echo '<img src="data:' . $image_info['mime'] . ';base64,' . base64_encode(file_get_contents($target_file)) . '" / height="500">';
    
?>

</body>
</html>
