<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]); 
    $lastname = htmlspecialchars($_POST["lastname"]); 
    $pets = htmlspecialchars($_POST["favouritepet"]); 

    if (empty($firstname)) {
            header("Location: ../index.php");
            exit();
        }
    
    $random = rand(0,999);

    $total_data = $firstname . " ". $lastname ." ". $pets;
    $filename = $firstname . $random. '_' .'dump.txt';

    $file = fopen($filename, 'w');
    fwrite($file, $total_data);
    fclose($file);

    
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="text_box">
        <p>These Are the data, that the user submitted: </p>
        <p>First Name: <?php echo $firstname?> </p>
        <p>Last Name: <?php echo $lastname?> </p>
        <p>Favourite Pet: <?php echo $pets?> </p>
    </div>
</body>
</html>