<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{route('worker.create')}}">Добавить</a>
    </div>
    <hr>
    <div>
        <form action="{{route('worker.index')}}" method="get">
            <input type="text" name="name" placeholder="Name" value="{{request()->get('name')}}">
            <input type="text" name="username" placeholder="Username" value="{{request()->get('username')}}">
            <input type="text" name="email" placeholder="Email" value="{{request()->get('email')}}">
            <input type="number" name="from" placeholder="From" value="{{request()->get('from')}}">
            <input type="number" name="to" placeholder="To" value="{{request()->get('to')}}">
            <input type="text" name="description" placeholder="Description" value="{{request()->get('description')}}">
            <input type="checkbox" id="is_married" name="is_married" value="1"
            {{ request('is_married') === '1' ? 'checked' : '' }}>
            <label for="is_married">Is married</label>
            <input type="submit" value="Search">
            <a href="{{route('worker.index')}}">Сбросить</a>
        </form>
    </div>
    <div>
        @foreach ($workers as $worker)
        <hr>
            <div>
                <div>Name: {{$worker->name}}</div>
                <div>Username: {{$worker->username}}</div>
                <div>Email: {{$worker->email}}</div>
                <div>Age: {{$worker->age}}</div>
                <div>Description: {{$worker->description}}</div>
                <div>Is married: {{$worker->is_married}}</div>
                <div>
                    <a href="{{ route('worker.show', $worker->id) }}">Посмотреть</a>
                </div>
                <div>
                    <a href="{{ route('worker.edit', $worker->id) }}">Редактировать</a>
                </div>
                <div>
                    <form action="{{ route('worker.delete', $worker->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Удалить">
                    </form>
            </div>
        @endforeach

        <div class="my_pagination">
            {{ $workers->links() }}
        </div>
    </div>
    <style>
        .my_pagination svg{
            width: 20px;
        }
    </style>
</body>
</html>