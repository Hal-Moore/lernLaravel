<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Create page
    <hr>
    <div>
        <form action="{{ route('worker.store') }}" method="POST">
            @csrf
            <div style="margin-bottom: 20px"><input type="text" name="name" placeholder="Name"></div>
            <div style="margin-bottom: 20px"><input type="text" name="username" placeholder="Username"></div>
            <div style="margin-bottom: 20px"><input type="email" name="email" placeholder="Email"></div>
            <div style="margin-bottom: 20px"><input type="number" name="age" placeholder="Age"></div>
            <div style="margin-bottom: 20px"><textarea name="description"></textarea></div>
            <div style="margin-bottom: 20px">
                <input type="checkbox" id="is_married" value="1" name="is_married">
                <label for="is_married">Is married</label>
            </div>
            <div style="margin-bottom: 20px"><input type="submit" value="Добавить"></div>
        </form>
    </div> 
</body>
</html>