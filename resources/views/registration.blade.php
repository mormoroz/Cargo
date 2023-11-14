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
    <h1 class="text-2xl font-bold text-black mb-4 text-center">Регистрация</h1>
    <h2><a class="login" id="login" href="/login">Eсть аккаунт?</a></h2>
    <form method="post" action="/main_users" class="register-form" id="register-form">
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
            <label for="first_name" class="text-black required_label">Имя</label>
            <input type="text" id="first_name" name="first_name"
                   class="w-full p-2 border rounded shadow focus:outline-none focus:border-blue-500" required value="{{old('first_name')}}"
                   pattern="[A-Za-zА-Яа-яЁё]{1,}" title="Имя может содержать только буквы">
        </div>

        <div class="mb-4">
            <label for="last_name" class="text-black required_label">Фамилия</label>
            <input type="text" id="last_name" name="last_name"
                   class="w-full p-2 border rounded shadow focus:outline-none focus:border-blue-500" required value="{{old('last_name')}}"
                   pattern="[A-Za-zА-Яа-яЁё]{1,}" title="Фамилия может содержать только буквы">
        </div>

        <div class="mb-4">
            <label for="patronymic" class="text-black">Отчество</label>
            <input type="text" id="patronymic" name="patronymic"
                   class="w-full p-2 border rounded shadow focus:outline-none focus:border-blue-500" value="{{old('patronymic')}}"
                   pattern="[A-Za-zА-Яа-яЁё]{0,}" title="Отчество может содержать только буквы">
        </div>

        <div class="mb-4">
            <label for="phone" class="text-black required_label">Номер телефона</label>
            <input type="text" id="phone" name="phone"
                   class="w-full p-2 border rounded shadow focus:outline-none focus:border-blue-500 phone_field" value="{{old('phone_number')}}"
                   required title="Телефон может содержать только цифры">
        </div>

        <div class="mb-4">
            <label for="email" class="text-black required_label">Почта</label>
            <input type="email" id="email" name="email"
                   class="w-full p-2 border rounded shadow focus:outline-none focus:border-blue-500" required value="{{old('email')}}">
        </div>

        <div class="mb-4">
            <label for="password" class="text-black required_label">Пароль</label>
            <div class="relative">
                <input type="password" id="password" name="password"
                       class="w-full p-2 border rounded shadow focus:outline-none focus:border-blue-500" required value="{{old('password')}}">
                <button type="button" class="absolute right-2 top-2 text-blue-500"
                        onclick="togglePasswordVisibility('password')">
                    <i id="eyeIcon" class="far fa-eye"></i>
                </button>
            </div>
        </div>

        <button class="bg-blue-500 text-white p-3 rounded w-full mt-4 hover:bg-blue-600">Зарегистрироваться</button>
    </form>

</div>


<!-- phone mask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>

<!-- inputs processing rules -->
<script src="/js/inputs.js"></script>
</body>

</html>
