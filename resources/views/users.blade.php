<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Laravel</title>
    <style>
        .container {
            flex-grow: 1 !important;
        }

        html {
            min-height: 100%;

        }

        body {
            
            min-height: 100vh !important;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    @include('layouts/header')

    <div class="container">
        <div class="table-responsive">
        <table class="table">
           
            <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td scope="row">{{$user->name}}</td>
                    <td>{{$user->id}}</td>
                    <td>{{getHiddenEmail($user->email)}}</td>
                    <td>{{$user->created_at}}</td>
                    <td> 
                        <a href="{{url("users/update")}}/{{$user->id}}">   <button type="button" class="mb-2 mb-md-0 btn btn-primary">Edit</button></a>
                        <a href="{{url("users/delete")}}/{{$user->id}}">   <button type="button" class="mb-2 mb-md-0 btn btn-warning">Trash</button></a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modelId">
                          Delete
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Delete this user</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure want to delete?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
                                        <a href="{{url("users/confirmDelete")}}/{{$user->id}}"> <button type="button" class="btn btn-danger">Delete</button></a>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
               
               
            </tbody>
        </table>
        </div>
    </div>


    @include('layouts/footer')
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