<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.7 Import Export Excel to database Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <div class="card bg-light mt-3">

        <div class="card-header">
            Laravel 5.7 Import Export Excel to database Example - ItSolutionStuff.com
        </div>
        <div class="table-responsive">
            <table class="table table-stripped table-boarder">
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Body</td>
                </tr>
         
                   @foreach($req as $req)  
                   <tr>
                   <td>{{$req->id}}</td>
                    <td>{{$req->Title}}</td>
                    <td>{{$req->Body}}</td>
                </tr>  
                   @endforeach    
         
                </table>
                <a href="{{route('exports.excel') }}"
                class="btn btn-success"> Export</a>
        </div>
    </div>
</div>
   
</body>
</html>