<!DOCTYPE html>
<html lang="en">
<head>
<title>Places List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

    <body>
    <div class="container">
  <h2>Places List</h2>
  <p> PlacesList Using Laravel Eloquent ORM</p>            
  <table class="table table-hover">
           <thead>
             <tr>
               <th><span>Title</span></th>
               <th><span>Date</span></th>
               <th><span>Edit Place</span></th>  
               <th><span>Delete Place</span></th>

             </tr>
           </thead>

           <tbody>
           @foreach($place as $data)
             <tr>
               <td class="lalign">{{$data->title }}</td>
               <td>{{$data->created_at }}</td>
               <td><a href="editCars/{{$data->id}}">Edit</a></td>
               <td><a href="deletePlace/{{ $data->id }}">Delete 🚮</a></td>
             </tr>
             @endforeach
           </tbody>
         </table>
        </div> 
       </body>
</body>
</html>
