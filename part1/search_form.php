<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Search</title>
</head>
<body>
    <h2>Search for your model</h2>

    <form method="post" action="search_result.php">
    <label for="Model">Model: </label>
    <input type="text" name="Model" required><br>

    <input type="hidden" name="token" value="abc123">
    <input type="submit" value="Search">
    </form>
</body>

</html>