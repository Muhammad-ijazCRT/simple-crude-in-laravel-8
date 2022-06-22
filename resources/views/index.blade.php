<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h2>Home</h2>
    <hr>


<div class="container">
    <div class="row">
    <div class="alert alert-danger ">CRUD WITH LARAVEL</div>
        <div class="col-md-6">

        <form method="POST" >
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">phone</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <div class="col-md-6">
             <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student as $stu)


                                    <tr>
                                        <th scope="row">{{$stu->id}}</th>
                                        <td>{{$stu->name}}</td>
                                        <td>{{$stu->email}}</td>
                                        <td>{{$stu->phone}}</td>
                                        <td>
                                            <a href="{{ url('create', $stu->id) }}" class="btn btn-dark" >edit  </a>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
        </div>
    </div>
</div>

</body>
</html>
