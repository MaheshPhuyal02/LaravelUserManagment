<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .container {
            flex-grow: 1;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%
        }

        html {
            min-height: 100%;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;

        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    @include("layouts/header")

    <div class="container" style="display: flex; flex-direction:column;">

        <h3>{{$title}}</h3>
        <form action="{{$url}}" method="POST" style="min-width: 50vw;">
            @csrf
            <x-formview type="email" name="email" value="{{$user->email}}" update="{{$update}}"
                example="Example : example@gmail.com" label="Enter Email" />
            <x-formview type="text" name="name" value="{{$user->name}}" update="{{$update}}"
                example="Example : John Cartor" label="Enter Username" />
            <x-formview type="password" value="" update="{{$update}}" name="password" example="" label="{{$pass}}" />
            <x-formview type="password" value="" update="{{$update}}" name="confirm_password" example=""
                label="Re-Enter Password" />
            @isset($error)
            <div class="alert alert-danger" role="alert">
                {{$error}}

            </div>
            @endisset
            <button type="submit" id="" class="btn btn-primary btn-lg btn-block">Submit</button>
           
        </form>

    </div>
    @include("layouts/footer")
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>