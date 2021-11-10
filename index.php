<!doctype html>
<html>
  <head>
    <title>Cake Gallery Upload</title>
  </head>
  <body>
    <h1>Welcome to the Cake Gallery Submission Page</h1>
    <p>Upload a picture of your favorite cake!</p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit">
    </form>
  </body>
</html>
