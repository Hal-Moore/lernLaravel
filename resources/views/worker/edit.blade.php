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
        <form action="{{ route('worker.update', $worker->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div style="margin-bottom: 20px"><input type="text" name="name" placeholder="Name" value="{{$worker->name}}"></div>
            <div style="margin-bottom: 20px"><input type="text" name="username" placeholder="Username" value="{{$worker->username}}"></div>
            <div style="margin-bottom: 20px"><input type="email" name="email" placeholder="Email" value="{{$worker->email}}"></div>
            <div style="margin-bottom: 20px"><input type="number" name="age" placeholder="Age" value="{{$worker->age}}"></div>
            <div style="margin-bottom: 20px"><textarea name="description" placeholder="description"{{$worker->description}}>{{$worker->description}}</textarea></div>
            <div style="margin-bottom: 20px">
                <input type="checkbox" id="is_married" value="1" name="is_married" {{ $worker->is_married ? 'checked' : '' }}>
                <label for="is_married">Is married</label>
            </div>
            <div style="margin-bottom: 20px"><input type="submit" value="Сохранить"></div>
        </form>
    </div> 
</body>
</html>