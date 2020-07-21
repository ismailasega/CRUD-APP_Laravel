<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <!-- Styles -->
        <style>
            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
                font-size: 16px;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                }
                body {
                background-color: #e7ecec;
                }
                .login {
                width: 400px;
                background-color: #ffffff;
                box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
                margin: 100px auto;
                }
                .login h1 {
                text-align: center;
                color: #d63263;
                font-size: 24px;
                padding: 20px 0 20px 0;
                border-bottom: 1px solid #dee0e4;
                }
                .login form {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                padding-top: 20px;
                }
                .login form label {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 50px;
                height: 50px;
                background-color: #d63263;
                color: #ffffff;
                }
                .login form input[type="password"], .login form input[type="text"] {
                width: 310px;
                height: 50px;
                border: 1px solid #dee0e4;
                margin-bottom: 20px;
                padding: 0 15px;
                }
                .login form input[type="submit"] {
                width: 100%;
                padding: 15px;
                margin-top: 20px;
                background-color: #d63263;
                border: 0;
                cursor: pointer;
                font-weight: bold;
                color: #ffffff;
                transition: background-color 0.2s;
                }
                .login form input[type="submit"]:hover {
                background-color: #d63263;
                transition: background-color 0.2s;
                }
        </style>
	</head>
	<body>
		<div class="login">
         <h1>Login</h1>
         @if(isset(Auth::user()->username))
               <script>window.location="/login/PropertySytem";</script>
         @endif
         @if($message = Session::get('error'))
         <div class = "alert alert-danger alert-block">
            <button type = "button" close ="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
         @endif
         @if(count($errors) > 0)
         <div class="alert alert-danger"> 
            <ul>
               @foreach($errors->all() as $error)
               <li> {{ $error }}</li>
               @endforeach
               </ul>
         </div>
         @endif
			<form method="POST" action="{{ url('/login/checklogin') }}">
                {{ csrf_field() }}
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="name" placeholder="Username" class="form-control" />
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" class="form-control" />
				<input type="submit" name="login" value="Login"/>
			</form>
		</div>
	</body>
</html>