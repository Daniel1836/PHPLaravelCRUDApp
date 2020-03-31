<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="crudcss.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">  
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
   <title>Laravel CRUD App</title>
        </head>
        
    <body>
        
        <div class="navdiv">
            <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
                <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
               <div><a class="navbar-brand" href="#">Laravel CRUD App</a></div>
                <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                    <ul class="navbar-nav menulist">
                      <li class="nav-item"><a class="nav-link" href="{{ url('/welcome.php') }}">Home</a></li>
                      <li class="nav-item"><a class="nav-link link" href="{{ url('/create.php') }}">Create</a></li>
                    </ul>
                </div>
            </nav>
        </div>
     <table class="table table-striped table-hover">
         <thead>
             <th>ID</th>
             <th>Title</th>
             <th>Decription</th>
             <th>Action</th>
         </tr>
         </thead>
         <tbody>
             @if(count($articles)>0)
               @foreach($articles->all() as $article)
           
             <tr>
                 <td>{{ $article->id }}</td>
                 <td>{{ $article->title }}</td>
                 <td>{{ $article->description }}</td>
                 <td>
                     <a href='{{ url("/read/{$article->id}") }}' class="label label-primary">Read</a>
                     <a href='{{ url("/update/{$article->id}") }}' class="label label-success">Update</a>
                     <a href='{{ url("/delete/{$article->id}") }}' class="label label-danger">Delete</a>
                 </td>
             </tr>
               @endforeach
             @endif
         </tbody>
     </table>
         <div class="col-md-6 col-lg-6">
        @if(session('info'))
        <div class="alert alert-success">
        {{session('info')}}
        </div>
        @endif
        </div>
     </body>
</html>
