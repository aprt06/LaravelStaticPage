<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css" />
    <script src="/js/app.js"></script>
</head>
<body>
    <div class="wrapper">
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url("/")}}">MangaPost</a>
    </nav>   
        <form class="box-login">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="#">Forgot Password?</a>
        </form>
 
    </div>
    

</body>
</html>