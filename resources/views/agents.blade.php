@extends('layouts.app')
@vite(['resources/css/style.css', 'resources/js/inputs.js'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<div class="flex h-screen">
    <!-- Горизонтальная панель (серый фон) -->
    <div class="w-350 bg-gray-200 p-4 flex flex-col justify-between">
        <div class="top_content">
            <div class="text-2xl font-bold mb-4">Catena</div>

            <!-- Вертикальный список страниц с иконками -->
            <ul class="pages_links">
                <li class="page">
                    <i class="fas fa-list"></i>
                    <a href="/application">
                        Заявки
                    </a>
                </li>
                <li class="page">
                    <i class="fas fa-truck"></i>
                    <a href="/delivery">
                        Доставки
                    </a>
                </li>
                <li class="page">
                    <i class="fas fa-user-friends"></i>
                    <a href="#">
                        Контрагенты
                    </a>
                </li>
                <li class="page">
                    <i class="fas fa-bell"></i>
                    <a href="/home">
                        Уведомления
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom_content">
            <!-- Информация о пользователе с иконкой -->
            <div class="mt-auto">
                <div class="flex items-center space-x-2">
                    <div class="w-12 h-12 rounded-full bg-blue-500"></div>
                    <div>
                        <div class="text-black font-semibold">Имя Фамилия</div>
                        <div class="text-gray-500">почта@example.com</div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Кнопка для сворачивания/разворачивания меню -->
        <!-- <button class="block md:hidden mt-4 p-2 bg-gray-300 text-black hover:bg-gray-400">
            <i class="fas fa-chevron-left"></i>
        </button> -->
    </div>

    <!-- Основной контент (правая часть) -->
    <div class="w-full p-4 main_content">
        <div class="flex flex-col space-y-4 mb-5">
            <h2 class="font-semibold text-2xl mb-0">Контрагенты</h2> <!-- Заголовок "Уведомления" -->




        </div>
    </div>
</div>

    </html>
