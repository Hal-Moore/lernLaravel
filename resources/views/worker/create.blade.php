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
            <div style="margin-bottom: 20px"><input type="text" 
                name="name" placeholder="Name" value="{{ old('name') }}">
                @error('name') 
                    <div style="color: red">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div style="margin-bottom: 20px"><input type="text" 
                name="username" placeholder="Username" value="{{ old('username') }}">
                @error('username')
                    <div style="color: red">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div style="margin-bottom: 20px"><input type="email" 
                name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <div style="color: red">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div style="margin-bottom: 20px"><input type="number" name="age" placeholder="Age" value="{{ old('age') }}"></div>
            <div style="margin-bottom: 20px"><textarea name="description" placeholder="description">{{ old('description') }}</textarea>
                @error('description')
                    <div style="color: red">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div style="margin-bottom: 20px">
                <input 
                {{ old('is_married') ? 'checked' : '' }}
                type="checkbox" id="is_married" value="1" name="is_married">
                <label for="is_married">Is married</label>
            </div>
            <div style="margin-bottom: 20px"><input type="submit" value="Добавить"></div>
        </form>
    </div> 
</body>
</html>