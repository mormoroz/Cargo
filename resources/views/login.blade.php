<!DOCTYPE html>
<html lang="en">
@vite(['resources/css/style.css', 'resources/js/inputs.js'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body class="bg-white h-screen flex justify-center items-center">

<div class="bg-white p-8 rounded-lg shadow-lg w-400">
    <h1 class="text-2xl font-bold text-black mb-4 text-center">Авторизация</h1>
    <h2><a class="registration" id="registration" href="/registration">Зарегистрироваться?</a></h2>

    <form method="post" action="/main_users/authenticate" class="login-form" id="login-form">
        @csrf
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-4">
            <label for="email" class="text-black">Почта</label>
            <input type="email" id="email" name="email"
                   class="w-full p-2 border rounded shadow focus:outline-none focus:border-blue-500" required value="{{old('email')}}">
        </div>

        <div class="mb-4">
            <label for="password" class="text-black">Пароль</label>
            <div class="relative">
                <input type="password" id="password" name="password"
                       class="w-full p-2 border rounded shadow focus:outline-none focus:border-blue-500" required value="{{old('password')}}">
                <button type="button" class="absolute right-2 top-2 text-blue-500"
                        onclick="togglePasswordVisibility('password')">
                    <i id="eyeIcon" class="far fa-eye"></i>
                </button>
            </div>
        </div>

        <button class="bg-blue-500 text-white p-3 rounded w-full mt-4 hover:bg-blue-600">Войти</button>
    </form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.8/jquery.inputmask.min.js"></script>
<script src="/js/inputs.js"></script>
</body>

</html>
