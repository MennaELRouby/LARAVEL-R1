<!DOCTYPE html>
<html lang="en">
<head>
<title>News List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

    <body>
    <div class="container">
  <h2>News List</h2>
  <p> News List Using Laravel Eloquent ORM</p>            
  <table class="table table-hover">
           <thead>
             <tr>
               <th><span>News Title</span></th>
               <th><span>author</span></th>
               <th><span>Content</span></th>
               <th><span>Published</span></th>
               <th><span>Edit News</span></th>
               <th><span>News details</span></th>
               <th><span>Delete News</span></th>

             </tr>
           </thead>

           <tbody>
           @foreach($news as $data)
             <tr>
               <td class="lalign">{{$data->title }}</td>
               <td>{{$data->author }}</td>
               <td>{{$data->content }}</td>
               <td>{{$data->published? 'YES✅' : 'NO ❎'}} </td>
               <td><a href="editNews/{{$data->id}}">Edit</a></td>
               <td><a href="showNews/{{ $data->id }}">Show</a></td>
               <td><a href="deleteNews/{{ $data->id }}">Delete 🚮</a></td>
             </tr>
             @endforeach
           </tbody>
         </table>
        </div> 
       </body>
</body>
</html>
