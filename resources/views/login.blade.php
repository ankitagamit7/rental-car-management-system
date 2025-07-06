<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration - Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #F77D0A;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #F77D0A;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #F77D0A;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #F77D0A;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #F77D0A;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #F77D0A;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
    </style>
</head>
<body>
<div class="wrapper">
        
<h2>Login</h2>
                
                
                    @if(Session::has('error'))
                        
                            {{ Session::get('error') }}
                        
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="input-box">
                            
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="input-box">
                            
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="input-box">
                            
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            
        
    </div>
</body>
</html>