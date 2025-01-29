<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Excel to Database</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Upload Excel File</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" accept=".csv, .xlsx, .xls" required>
            <button type="submit" name="Import">Upload</button>
        </form>
    </div>
</body>
</html>
