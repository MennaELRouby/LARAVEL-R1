<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add place</h2>
  <form action="{{route('place')}}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{old('title')}}">
      @error('title')
      <div class="alert alert-warning">
            {{ $message}}     
</div> 
             @enderror
    </div>
    <div class="form-group">
      <label for="typeplace">Type of place:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter type" name="type" value="{{old('type')}}">
</div>
    <div class="form-group">
      <label for="price">fromPrice:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter from Price" name="fprice" value="{{old('fprice')}}">
    </div>
    <div class="form-group">
      <label for="price">To Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter to Price" name="toprice" value="{{old('toprice')}}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="5" id="description" name="content">{{old('content')}}</textarea>
        @error('content')
        <div class="alert alert-warning">
            {{ $message}}     
</div>
             @enderror
      </div> 
      <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
            @error('image')
                {{ $message }}
            @enderror
        </div>
    <button type="submit" class="btn btn-default">Add</button>
  </form>
</div>

</body>
</html>
