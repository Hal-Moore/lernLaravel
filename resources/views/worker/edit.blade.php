@extends('layout.main')
@section('content')
    <div>
        <form action="{{ route('worker.update', $worker->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div style="margin-bottom: 20px"><input type="text" name="name" placeholder="Name" value="{{ old('name') ?? $worker->name}}">
                @error('name') 
                    <div style="color: red">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div style="margin-bottom: 20px"><input type="text" name="username" placeholder="Username" value="{{ old('username') ?? $worker->username}}">
                @error('username') 
                    <div style="color: red">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div style="margin-bottom: 20px"><input type="email" name="email" placeholder="Email" value="{{ old('email') ?? $worker->email}}">
                @error('email') 
                    <div style="color: red">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div style="margin-bottom: 20px"><input type="number" name="age" placeholder="Age" value="{{ old('age') ?? $worker->age}}">
                @error('age') 
                    <div style="color: red">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div style="margin-bottom: 20px"><textarea name="description" placeholder="description">{{ old('description') ?? $worker->description}}</textarea>
                @error('description') 
                    <div style="color: red">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div style="margin-bottom: 20px">
                <input type="checkbox" id="is_married" value="1" name="is_married" {{ $worker->is_married ? 'checked' : '' }}>
                <label for="is_married">Is married</label>
            </div>
            <div style="margin-bottom: 20px"><input type="submit" value="Сохранить"></div>
        </form>
    </div> 
@endsection