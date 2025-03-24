<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="\Admin123\login.css">
</head>
<body>
    <div class="container">     
        <h1>Admin Login</h1>      
        <form action="/admin/store" method="Post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="form-control">
                <input type="text" name="email" id="email" placeholder="Enter username">              
                <span class="form-message"></span>               
                <small></small>
            </div>
            <div class="form-control">
                <input type="password" name="password" id="password" placeholder="Enter password">
                <span class="form-message"></span>
                <small></small>
            </div>
            <input type="submit" class="login" value="Login">
            @csrf
        </form>
    </div>

    <script src="/validation.js"></script>
</body>
</html>