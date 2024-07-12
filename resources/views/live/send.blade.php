<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>send</title>
</head>
<body>
<form action="{{route('save.message')}}" method="post" enctype="multipart/form-data">
    @csrf
  <label for="message">Write:</label><br>
  <input type="text" id="message" name="message" value="message"><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>