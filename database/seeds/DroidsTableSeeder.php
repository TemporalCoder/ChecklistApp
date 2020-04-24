<?php

use Illuminate\Database\Seeder;
use App\UserBuild;
use App\User;
use App\Droids;



class DroidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r2Class = Droids::where('class', 'r2')->first();
        $r4Class = Droids::where('class', 'r4')->first();
        $r5Class = Droids::where('class', 'r5')->first();
        $r6Class = Droids::where('class', 'r6')->first();
        $r7Class = Droids::where('class', 'r7')->first();
        $r9Class = Droids::where('class', 'r9')->first();

        $r2 = Droids::create([
            'class' => 'R2',
            'path' => 'public\storage\droids\r2.png',
        ]);

        $r4 = Droids::create([
            'class' => 'R4',
            'path' => 'public\storage\droids\r4.png',
        ]);
        $r5 = Droids::create([
            'class' => 'R5',
            'path' => 'public\storage\droids\r5.png',
        ]);
        $r6 = Droids::create([
            'class' => 'R6',
            'path' => 'public\storage\droids\r6.png',
        ]);
        $r7 = Droids::create([
            'class' => 'R7',
            'path' => 'public\storage\droids\r7.png',
        ]);
        $r9 = Droids::create([
            'class' => 'R9',
            'path' => 'public\storage\droids\r9.png',
        ]);

        $r2->droids()->attach($r2Class);
        $r4->droids()->attach($r4Class);
        $r5->droids()->attach($r5Class);
        $r6->droids()->attach($r6Class);
        $r7->droids()->attach($r7Class);
        $r9->droids()->attach($r9Class);
    }
}
