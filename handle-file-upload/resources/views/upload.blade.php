<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog.petehouston.com - Handle File Upload in Laravel 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <style>
        #main {
            margin-top: 200px;
        }
    </style>
</head>
<body>

<div class="container" id="main">
    <div class="row align-items-center">
        <div class="col offset-md-3 col-md-6 align-self-center">
            <h1>Handle file upload in Laravel 9</h1>
            <hr />
            @if(session()->get('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form method="post" action="/upload" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input class="form-control" type="file" name="myFile" required>
                </div>

                <button type="submit" class="btn btn-primary mb-3 px-5">Upload</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>
