<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use App\Http\Requests\Worker\StoreRequest;

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

        return view('worker.create');
    }

    public function store(StoreRequest $request){
        $data=$request->validated();
        $data['is_married']=isset($data['is_married']);
        Worker::create($data);
        return redirect()->route('worker.index');
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
