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

<body dir="{{ __('messages.pageDirection')}}">

  <div class="container">
    <div class="text-right">
      <a href="{{ LaravelLocalization::getLocalizedURL('en') }}" class="btn" style="width: 50px; color:#fff;background-color: #6495ED">{{__('en')}}</a>
      <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}" class="btn" style="width: 50px; color:#fff;background-color: #6495ED">{{__('ar')}}</a>
    </div>
    <h2>{{ __('messages.pageTitle') }}</h2>
    <form action="{{route('car')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title">{{ __('messages.title') }}</label>
        <input type="text" class="form-control" id="title" placeholder="{{ __('messages.titlePlaceholder') }}" name="title" value="{{old('title')}}">
        @error('title')
        <div class="alert alert-warning">
          {{ $message}}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="price">{{ __('messages.price') }}</label>
        <input type="text" class="form-control" id="price" placeholder="{{ __('messages.pricePlaceholder') }}" name="price" value="{{old('price')}}">
        @error('price')
        <div class="alert alert-warning">
          {{ $message}}
        </div>
        @enderror
      </div>

      <div class="form-group">
        <label for="description">{{ __('messages.content') }}</label>
        <textarea class="form-control" rows="5" id="description" name="content">{{old('content')}}</textarea>
        @error('content')
        <div class="alert alert-warning">
          {{ $message}}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="Categories">{{ __('messages.category') }}</label>
        <select name="cat_id">
          <option value="">{{ __('messages.categorySelection') }}</option>
          @foreach($category as $data)
          <option value="{{$data->id}}">{{$data->cat_name}}</option>
          @endforeach

        </select>
        @error('cat_id')
        <div class="alert alert-warning">
          {{ $message}}
        </div>
        @enderror
      </div>
      <div class="form-group">
        <label for="image">{{ __('messages.image') }}</label>
        <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
        @error('image')
        {{ $message }}
        @enderror
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="published"> {{ __('messages.published') }}</label>
      </div>
      <button type="submit" class="btn btn-default">{{ __('messages.button') }}</button>
    </form>
  </div>

</body>

</html>