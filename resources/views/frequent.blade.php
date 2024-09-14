<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('frequent') }}">FAQs</a>

    </nav>

    <form action="">
        <label for="">Student Name</label>
        <input type="text" class="form-control">

        <label for="">Student Registration</label>
        <input type="text" class="form-control">

        <label for="">Email</label>
        <input type="text" class="form-control">

        <button type="" class="btn btn-primary"></button>


    </form>

</body>

</html>
