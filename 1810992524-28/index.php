<!DOCTYPE html>
<html>
<head>
    <title>Upload Images</title>
</head>
<body>
<h1>Upload Files</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
       Image: <input type="file" name="file"><br>
        <!-- Singnature: <input type="file" name="file_2"><br> -->
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>