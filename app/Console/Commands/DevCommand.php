<?php

namespace App\Console\Commands;

use App\Models\Worker;
use App\Models\Profile;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dev-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //$this->prepareData();
        $profile=Profile::find(1);
        $worker=Worker::find(1);
        dd($profile->worker->toArray());
        return 0;
    }
    private  function prepareData(){
        $workerData=[
            'name'=>'John Doe',
            'username'=>'johndoe',
            'email'=>'John@mail.com',
            'age'=>30,
            'description'=>'A skilled worker with 5 years of experience.',
            'is_married'=>true,];



            $worker = Worker::create($workerData);
            $profileData=[
                'worker_id'=>$worker->id,
                'city'=>'New York',
                'skill'=>'Carpentry',
                'experience'=>5,
                'finished_study_at'=>'2018-06-15',
            ];

            $profile=Profile::create($profileData);
            dd($profile->id);
    }
}
