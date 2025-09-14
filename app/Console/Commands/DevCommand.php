<?php

namespace App\Console\Commands;

use App\Models\Position;
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
        $worker=Worker::find(1);
        $position=Worker::find(1);

        return 0;
    }
    private  function prepareData(){

        $position1=Position::create([
            'title'=>'Manager',
        ]);
        $position2=Position::create([
            'title'=>'Developer',
        ]);


        $workerData1=[
            'name'=>'John Doe',
            'username'=>'johndoe',
            'email'=>'John@mail.com',
            'position_id'=>$position1->id,
            'age'=>30,
            'description'=>'A skilled worker with 5 years of experience.',
            'is_married'=>true,];

            $workerData2=[
                'name'=>'Jane Smith',
                'username'=>'janesmith',
                'email'=>'jane@mail.com',
                'position_id'=>$position2->id,
                'age'=>28,
                'description'=>'An experienced developer specializing in web applications.',
                'is_married'=>false,
            ];

            $workerData3=[
            'name'=>'Kate Krasavina',
            'username'=>'KateKrasavina',
            'email'=>'kraskate@mail.com',
            'position_id'=>$position2->id,
            'age'=>18,
            'description'=>'A skilled worker with 1 years of experience.',
            'is_married'=>false,];

            $worker1 = Worker::create($workerData1);
            $worker2 = Worker::create($workerData2);
            $worker3 = Worker::create($workerData3);

            $profileData1=[
                'worker_id'=>$worker1->id,
                'city'=>'New York',
                'skill'=>'Carpentry',
                'experience'=>5,
                'finished_study_at'=>'2018-06-15',
            ];

            $profileData2=[
                'worker_id'=>$worker2->id,
                'city'=>'Rio de Janeiro',
                'skill'=>'Boss',
                'experience'=>10,
                'finished_study_at'=>'2014-06-15',
            ];

            $profileData3=[
                'worker_id'=>$worker3->id,
                'city'=>'Los Angeles',
                'skill'=>'frontend',
                'experience'=>1,
                'finished_study_at'=>'2021-06-15',
            ];
            
            Profile::create($profileData1);
            Profile::create($profileData2);
            Profile::create($profileData3);
    }
}
