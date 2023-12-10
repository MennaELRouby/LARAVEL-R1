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
  <h2>Edit Car</h2>
  <form action="{{route('updatecar',[$ucar->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ $ucar->title }}">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="{{ $ucar->price }}">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="5" id="description" name="content">{{ $ucar->content }}</textarea>
      </div> 
      <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
            <img src="{{ asset('assets/img/'.$ucar->image) }}" alt="cars" style="width:150px;">

            @error('image')
                {{ $message }}
            @enderror
        </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($ucar->published)> Published</label>
      <!-- {{$ucar->published? 'checked' : ''}} -->
    </div>
    <button type="submit" class="btn btn-default">Add</button>
  </form>
</div>

</body>
</html>
