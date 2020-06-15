<!DOCTYPE html>
<html>
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
