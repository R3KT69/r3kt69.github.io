<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label> <br>
            <input type="text" name="firstname" placeholder="< Firstname >">
            <br>
            <label for="lastname">Lastname?</label> <br>
            <input type="text" name="lastname" placeholder="< Lastname >">
            <br>
            <label for="favouritepet">Favourite Pet?</label><br>
            <select name="favouritepet">
                <option value="None">None</option>
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
                <option value="Bird">Bird</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </main>
    
</body>
</html>