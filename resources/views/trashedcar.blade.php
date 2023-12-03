<!DOCTYPE html>
<html lang="en">
<head>
<title>Car List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

    <body>
    <div class="container">
  <h2>Restore Car List</h2>
  <p> CarList Using Laravel Eloquent ORM</p>            
  <table class="table table-hover">
           <thead>
             <tr>
               <th><span>Car Title</span></th>
               <th><span>Price</span></th>
               <th><span>Model</span></th>
               <th><span>Published</span></th>
               <th><span>Restore</span></th>
               <th><span>Delete</span></th>




             </tr>
           </thead>

           <tbody>
           @foreach($cars as $data)
             <tr>
               <td class="lalign">{{$data->title }}</td>
               <td>{{$data->price }}</td>
               <td>{{$data->content }}</td>
               <td>{{$data->published? 'YES✅' : 'NO ❎'}} </td>
               <td><a href="restoreCar/{{ $data->id }}">Restore</a></td>
               <td><a href="deleteCar/{{ $data->id }}">Delete 🚮</a></td>
             </tr>
             @endforeach
           </tbody>
         </table>
        </div> 
       </body>
</body>
</html>
