<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir archivos</title>
</head>
<body>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <div>
      <input type="text" name="nombre">
    </div>
    <div>
      <input type="file" name="archivo" multiple>
    </div>
    <button>Subir</button>
  </form>
</body>
</html>