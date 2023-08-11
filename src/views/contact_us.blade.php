<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact us any time from Laravel</h1>
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your Name">
        <input type="text" name="email" placeholder="Your Email">
        <textarea name="message" cols="30" rows="10"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
