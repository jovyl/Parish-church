<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Upload</title>
</head>
<body>

    <form action="upload" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="document">Choose Document:</label>
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>
</body>

</body>
</html>

