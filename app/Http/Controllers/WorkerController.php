<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers= Worker::all();
        return view('worker.index',compact('workers'));
    }

    public function show(Worker $worker){
        return view('worker.show',compact('worker'));
    }

    public function create(){

        $worker=[
            'name'=>'Mark',
            'username'=>'Markov',
            'email'=>'markov@gmail.com',
            'age'=>'25',
            'description'=>'just text',
            'is_married'=>false
        ];

        Worker::create($worker);

        return 'Ivan was created';
    }

    public function update(){

        $worker=Worker::find(2);
        $worker->update([
            'name'=>'Karl',
            'username'=>'Pugovkin',
        ]);

        return 'was updeted';
    }

    public function delete(){
        $worker=Worker::find(2);
        $worker->delete();
        return 'was delete';
    }
}
