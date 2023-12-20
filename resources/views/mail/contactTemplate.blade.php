<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" style=" width: 50vw; color: #393d42">

        <table class="table">
            <tr>
                <td>From: </td>
                <td>{{$name}}</td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>{{$email}}</td>
            </tr>
            <tr>
                <td>Subject: </td>
                <td>{{$subject}}</td>
            </tr>
        </table>

        <div style="border: 1px solid #e5e5e5; border-radius: 4px; padding: 30px 20px ">{{$messages}}</div>


    </div>

</body>

</html>