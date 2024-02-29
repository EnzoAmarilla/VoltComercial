<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form - Volt Financial</title>
</head>
<body>
    <h1>Form data:</h1>
    <ul>
        <li>First name: {{ $data['firstName'] }}</li>
        <li>Last name: {{ $data['lastName']}}</li>
        <li>Email: {{ $data['email']}}</li>
        <li>Phone: {{ $data['phone']}}</li>
    </ul>
</body>
</html>