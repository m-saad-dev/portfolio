<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fonts -->
    
    <title> Login </title>
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    
    <style>
        #demo{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        h1{
            padding: 10px;
            margin: 10px;
        }
        .light{
            background-color: #ccc;
        }
        .dark{
            background-color: #222;
            color: #fff;
        }
    </style>
</head>
<body>
    <section id="login">
        <div class="w-50 m-auto shadow p-5 my-5">
            <form id="loginForm" method="POST" action="{{ route('authenticate') }}" >
                @csrf
                <h1 class="text-uppercase fw-bolder text-center">Login</h1>
                <div class="form-floating mb-3">
                    <input type="text" name="email" class="form-control border-0 border-bottom rounded-0" id="email" placeholder="User Email">
                    <label for="email">User Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control border-0 border-bottom rounded-0" id="password" placeholder="User Password">
                    <label for="password">User Password</label>
                </div>
                <div class="form-floating mb-3 ">
                    <button type="submit" id="loginBtn"  class="btn btn-info text-light rounded-0 mt-3 px-4">Login</button>
                </div>
            </form>
        </div>
    </section>
    <!-- login -->
</body>
</html>