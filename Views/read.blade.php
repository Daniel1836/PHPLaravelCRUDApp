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
              <th>Title</th>
             <th>Decription</th>
         </tr>
         </thead>
         <tbody>
              <tr>
                  <td>{{ $articles->title }}</td>
                 <td>{{ $articles->description }}</td>
                  </tr>
         </tbody>
     </table>
     </body>
</html>
