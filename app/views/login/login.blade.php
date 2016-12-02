<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />  
        <link rel="stylesheet" href="css/login.css" />
    </head>
    <body>
           <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img src="images/logo-pgl.jpg"
                    alt="" style="width:200px;height:250px;margin-left: 70px;margin-right: auto;">
                <form class="form-signin" action="{{ url('/login') }}" method="POST">
                <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Iniciar Sesión</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Recordarme
                </label>
                <a href="#" class="pull-right need-help">Necesita Ayuda? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account">Crear una cuenta </a>
        </div>
    </div>
</div>
    </body>
</html>