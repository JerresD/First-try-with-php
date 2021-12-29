<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Writing notes</title>

    <link rel="stylesheet" type="text/css"
          href="style.css">
</head>
<body>

    <div class="header">
        <h1>WRITING NOTES</h1>
    </div>
    <form action="read.php" method="post" class="table">
        <div class="row">
            <label>Username: </label><br>
            <input type="text" name="name">
        </div>

        <div class="row">
            <label>Matric Number: </label><br>
            <input type="text" name="matric">
        </div>

        <div class="row">
            <label>Enter notes: </label><br>
            <input type="text" name="notes">
        </div>

    <button type="submit">Submit</button>
    <a href="retrieve.php" class="retrieve" >Retrieve</a>
    </form>

</body>
</html>

