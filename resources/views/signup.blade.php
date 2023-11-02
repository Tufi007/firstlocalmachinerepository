<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
    <style>

    </style>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Signup</title>
</head>

<!------ Include the above in your HEAD tag ---------->

<form method="POST" action="{{url('signup')}}" >
    @csrf
    <label>
        <p class="label-txt">ENTER YOUR EMAIL</p>
        <input type="text" class="input" name="email" id="email"><span>@error('email'){
            {{$message}}
          }

          @enderror</span>
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <label>
        <p class="label-txt">ENTER YOUR NAME</p>
        <input type="text" class="input" name="username" id="username"><span>@error('username'){
            {{$message}}
          }

          @enderror</span>
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <label>
        <p class="label-txt">ENTER YOUR PASSWORD</p>
        <input type="text" class="input" name="password" id="password"><span>@error('password'){
            {{$message}}
          }

          @enderror</span>
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <button type="submit">submit</button>
</form>
<script src="{{asset('js/signup.js')}}"></script>
<body>


</body>

</html>
