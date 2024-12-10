<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-container {
            width: 70%; /* Задаем ширину формы */
            max-width: 800px; /* Устанавливаем максимальную ширину */
            margin: 0 auto; /* Центрируем форму по горизонтали */
            padding: 20px; /* Добавляем отступы внутри формы */
            background-color: #f8f9fa; /* Светлый фон для лучшего отображения */
            border-radius: 8px; /* Скругленные углы */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Тень для эффекта "карточки" */
        }
    </style>

    <title>@yield('title')</title>
</head>
<body>

@include('header')
@yield('content')

</body>
</html>
