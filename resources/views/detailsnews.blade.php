<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show News Details</h2>
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ $snews->title }}">
    </div>
    <div class="form-group">
      <label for="price">author:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter Price" name="author" value="{{ $snews->author }}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="5" id="description" name="content">{{ $snews->content }}</textarea>
      </div> 
    <div class="checkbox">
      <label><input type="checkbox" name="pub" @checked($snews->published)> Published</label>
    </div>
  </form>
</div>

</body>
</html>
