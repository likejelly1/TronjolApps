<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title></title>
</head>
<body>
    <h2>Welcome back, Admin</h2>
    <p>{{$email_body}}</p>
    <table class="table table bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$name}}</td>
                <td>{{$username}}</td>
                <td>{{$email}}</td>
                <td>
                    <form action="{{route('verify',['name' => $name])}}" method="post">
                        @csrf
                        <button class="btn btn-success" type="submit">Verify</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>