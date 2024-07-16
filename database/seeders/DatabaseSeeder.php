<?php

namespace Database\Seeders;

use App\Models\Acol;
use App\Models\User;
use App\Models\Anode;
use App\Models\Arow;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::->create();
        Acol::create([
            'name' => 'Column1'
        ]);

        Acol::create([
            'name' => 'Column2'
        ]);

        Acol::create([
            'name' => 'Column3'
        ]);

        Arow::create([
            'name' => 'Row1'
        ]);

        Arow::create([
            'name' => 'Row2'
        ]);

        Arow::create([
            'name' => 'Row3'
        ]);

        Arow::create([
            'name' => 'Row4'
        ]);

        Arow::create([
            'name' => 'Row5'
        ]);


        Anode::create([
            'name' => 'Node1',
            'color' => 'white',
            'acol_id'=> '2',
            'arow_id'=> '1',
            'parent_id'=>'0'
        ]);

        Anode::create([
            'name' => 'Node2',
            'color' => 'blue',
            'acol_id'=> '1',
            'arow_id'=> '2',
            'parent_id'=>'1'
        ]);

        Anode::create([
            'name' => 'Node3',
            'color' => 'blue',
            'acol_id'=> '2',
            'arow_id'=> '2',
            'parent_id'=>'1'
        ]);

        Anode::create([
            'name' => 'Node4',
            'color' => 'blue',
            'acol_id'=> '3',
            'arow_id'=> '2',
            'parent_id'=>'1'
        ]);

        //--------------------------
        Anode::create([
            'name' => 'Node5',
            'color' => 'yellow',
            'acol_id'=> '1',
            'arow_id'=> '3',
            'parent_id'=>'2'
        ]);

        Anode::create([
            'name' => 'Node6',
            'color' => 'yellow',
            'acol_id'=> '1',
            'arow_id'=> '3',
            'parent_id'=>'2'
        ]);

        Anode::create([
            'name' => 'Node7',
            'color' => 'yellow',
            'acol_id'=> '1',
            'arow_id'=> '4',
            'parent_id'=>'5'
        ]);

        Anode::create([
            'name' => 'Node8',
            'color' => 'yellow',
            'acol_id'=> '1',
            'arow_id'=> '4',
            'parent_id'=>'5'
        ]);

        Anode::create([
            'name' => 'Node9',
            'color' => 'yellow',
            'acol_id'=> '1',
            'arow_id'=> '4',
            'parent_id'=>'5'
        ]);

        Anode::create([
            'name' => 'Node10',
            'color' => 'orange',
            'acol_id'=> '1',
            'arow_id'=> '4',
            'parent_id'=>'6'
        ]);

        Anode::create([
            'name' => 'Node11',
            'color' => 'orange',
            'acol_id'=> '1',
            'arow_id'=> '4',
            'parent_id'=>'6'
        ]);

        Anode::create([
            'name' => 'Node12',
            'color' => 'orange',
            'acol_id'=> '1',
            'arow_id'=> '4',
            'parent_id'=>'6'
        ]);

        //------------------------------------

        Anode::create([
            'name' => 'Node13',
            'color' => 'purple',
            'acol_id'=> '2',
            'arow_id'=> '3',
            'parent_id'=>'3'
        ]);

        Anode::create([
            'name' => 'Node14',
            'color' => 'purple',
            'acol_id'=> '2',
            'arow_id'=> '3',
            'parent_id'=>'3'
        ]);

        Anode::create([
            'name' => 'Node15',
            'color' => 'purple',
            'acol_id'=> '2',
            'arow_id'=> '3',
            'parent_id'=>'3'
        ]);

        Anode::create([
            'name' => 'Node16',
            'color' => 'green',
            'acol_id'=> '3',
            'arow_id'=> '3',
            'parent_id'=>'4'
        ]);

        Anode::create([
            'name' => 'Node17',
            'color' => 'green',
            'acol_id'=> '3',
            'arow_id'=> '3',
            'parent_id'=>'4'
        ]);

        Anode::create([
            'name' => 'Node18',
            'color' => 'green',
            'acol_id'=> '3',
            'arow_id'=> '3',
            'parent_id'=>'4'
        ]);

        Anode::create([
            'name' => 'Node19',
            'color' => 'green',
            'acol_id'=> '3',
            'arow_id'=> '3',
            'parent_id'=>'4'
        ]);

        //-------------------------------


        Anode::create([
            'name' => 'Node20',
            'color' => 'red',
            'acol_id'=> '3',
            'arow_id'=> '4',
            'parent_id'=>'18'
        ]);

        Anode::create([
            'name' => 'Node21',
            'color' => 'red',
            'acol_id'=> '3',
            'arow_id'=> '4',
            'parent_id'=>'18'
        ]);

        Anode::create([
            'name' => 'Node22',
            'color' => 'red',
            'acol_id'=> '3',
            'arow_id'=> '4',
            'parent_id'=>'18'
        ]);

        Anode::create([
            'name' => 'Node23',
            'color' => 'navy',
            'acol_id'=> '3',
            'arow_id'=> '5',
            'parent_id'=>'22'
        ]);

        Anode::create([
            'name' => 'Node24',
            'color' => 'navy',
            'acol_id'=> '3',
            'arow_id'=> '5',
            'parent_id'=>'22'
        ]);

        Anode::create([
            'name' => 'Node25',
            'color' => 'navy',
            'acol_id'=> '3',
            'arow_id'=> '3',
            'parent_id'=>'4'
        ]);

        Anode::create([
            'name' => 'Node26',
            'color' => 'magenta',
            'acol_id'=> '1',
            'arow_id'=> '4',
            'parent_id'=>'8'
        ]);

        Anode::create([
            'name' => 'Node27',
            'color' => 'magenta',
            'acol_id'=> '1',
            'arow_id'=> '4',
            'parent_id'=>'8'
        ]);

        Anode::create([
            'name' => 'Node28',
            'color' => 'magenta',
            'acol_id'=> '1',
            'arow_id'=> '4',
            'parent_id'=>'8'
        ]);
    }
}
