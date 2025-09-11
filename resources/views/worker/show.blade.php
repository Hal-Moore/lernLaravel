@extends('layout.main')
@section('content')
    <div>
            <div>
                <div>Name: {{$worker->name}}</div>
                <div>Username: {{$worker->username}}</div>
                <div>Email: {{$worker->email}}</div>
                <div>Age: {{$worker->age}}</div>
                <div>Description: {{$worker->description}}</div>
                <div>Is married: {{$worker->is_married}}</div>
                <div>
                    <a href="{{ route('worker.index') }}">Назад</a>
                    
                </div>
            </div>
    </div>
@endsection