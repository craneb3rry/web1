<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test_example_app</title>
</head>
<body>
    <h1>Ievadiet informāciju</h1>

    <form action="/feedback" method="POST">
        <label for="comment">Komentārs:</label>
        <input type="text-area" name="comment" value="a">

        <br><br>

        <label for="name">Vārds:</label>
        <input type="text" name="name" value="a">

        <br><br>

        <input type="submit" value="submit">
    </form>
</body>
</html>