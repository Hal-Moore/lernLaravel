<?php

namespace App\Console\Commands;

use App\Models\Department;
use App\Models\Position;
use App\Models\Worker;
use App\Models\Profile;
use App\Models\Project;
use App\Models\ProjectWorker;
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
        //$this->prepareManyToMany();
        //$worker=Worker::find(2);
        //$worker1=Worker::find(3);
        //$worker2=Worker::find(4);
        //$project=Project::find(1);

        //$worker->projects()->toggle($project->id);
        //$project->workers()->detach($worker->id);
        //$project->workers()->attach($worker1->id);
        //$project->workers()->sync($worker2->id);
        $this->prepareData();
        $this->prepareManyToMany();
        return 0;
    }

    private  function prepareData(){

        $department1=Department::create([
            'title'=>'IT',
        ]);
        $department2=Department::create([
            'title'=>'HR',
        ]);



        $position1=Position::create([
            'title'=>'Manager',
            'department_id'=>$department1->id,
        ]);
        $position2=Position::create([
            'title'=>'Developer',
            'department_id'=>$department1->id,
        ]);
        $position3=Position::create([
            'title'=>'Designer',
            'department_id'=>$department2->id,
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
            'is_married'=>false,
            ];
            $workerData4=[
                'name'=>'Bob Brown',
                'username'=>'bobbrown',
                'email'=>'boby@mail.com',
                'position_id'=>$position3->id,
                'age'=>35,
                'description'=>'A creative designer with a passion for visual storytelling.',
                'is_married'=>true,
            ];
            $workerData5=[
                'name'=>'Alice Green',
                'username'=>'alicegreen',
                'email'=>'alicegreen@mail.ro',
                'position_id'=>$position3->id,
                'age'=>26,
                'description'=>'A talented designer with a keen eye for detail.',
                'is_married'=>false,
            ];
            $workerData6=[
                'name'=>'Charlie White',
                'username'=>'charliewhite',
                'email'=>'charlw@hutmail.com',
                'position_id'=>$position2->id,
                'age'=>32,
                'description'=>'A seasoned developer with expertise in backend systems.',
                'is_married'=>true,
            ];


            $worker1 = Worker::create($workerData1);
            $worker2 = Worker::create($workerData2);
            $worker3 = Worker::create($workerData3);
            $worker4 = Worker::create($workerData4);
            $worker5 = Worker::create($workerData5);
            $worker6 = Worker::create($workerData6);

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

            $profileData4=[
                'worker_id'=>$worker4->id,
                'city'=>'Chicago',
                'skill'=>'Design',
                'experience'=>7,
                'finished_study_at'=>'2016-06-15',
            ];

            $profileData5=[
                'worker_id'=>$worker5->id,
                'city'=>'San Francisco',
                'skill'=>'UI/UX',
                'experience'=>3,
                'finished_study_at'=>'2019-06-15',
            ];

            $profileData6=[
                'worker_id'=>$worker6->id,
                'city'=>'Seattle',
                'skill'=>'Backend Development',
                'experience'=>8,
                'finished_study_at'=>'2015-06-15',
            ];
            
            Profile::create($profileData1);
            Profile::create($profileData2);
            Profile::create($profileData3);
            Profile::create($profileData4);
            Profile::create($profileData5);
            Profile::create($profileData6);
    }

    private function prepareManyToMany(){
        $workerManager=Worker::find(2);
        $workerBackend=Worker::find(1);
        $workerFrontend1=Worker::find(5);
        $workerFrontend2=Worker::find(6);
        $workerDesigner=Worker::find(4);
        $workerDesigner2=Worker::find(3);


        $project1=Project::create([
            'title'=>'Shop'
        ]);

        $project2=Project::create([
            'title'=>'Blog'
        ]);


        //   PROJECT 1

        ProjectWorker::create([
            'project_id'=>$project1->id,
            'worker_id'=>$workerManager->id,
        ]);
        ProjectWorker::create([
            'project_id'=>$project1->id,
            'worker_id'=>$workerBackend->id,
        ]);
        ProjectWorker::create([
            'project_id'=>$project1->id,
            'worker_id'=>$workerFrontend1->id,
        ]);
        ProjectWorker::create([
            'project_id'=>$project1->id,
            'worker_id'=>$workerDesigner->id,
        ]);

        //   PROJECT 2

        ProjectWorker::create([
            'project_id'=>$project2->id,
            'worker_id'=>$workerManager->id,
        ]);
        ProjectWorker::create([
            'project_id'=>$project2->id,
            'worker_id'=>$workerBackend->id,
        ]);
        ProjectWorker::create([
            'project_id'=>$project2->id,
            'worker_id'=>$workerFrontend2->id,
        ]);
        ProjectWorker::create([
            'project_id'=>$project2->id,
            'worker_id'=>$workerDesigner2->id,
        ]);

    }

}
