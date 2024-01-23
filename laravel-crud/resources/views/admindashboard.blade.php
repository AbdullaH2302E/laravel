<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
       
    <table class="table table-hover table-striped mt-5">

                             
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>DELETE</th>
        <th>UPDATE</th>
        
    </tr>
    @foreach($datasign as $ds)
    <tr>
    
        <td>{{$ds->id}}</td>
        <td>{{$ds->name}}</td>
        <td>{{$ds->email}}</td>
        <td>{{$ds->password}}</td>
        <td><a href="/delesignup/{{$ds->id}}" class="btn btn-danger">DELETE</a></td>
        <td><a href="/updatesignup/{{$ds->id}}" class="btn btn-success">UPDATE</a></td>
     </tr>
     @endforeach
</table>


        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>







