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


        Anode::create([
            'name' => 'Node1',
            'color' => 'red',
            'acol_id'=> '1',
            'arow_id'=> '1'
        ]);

        Anode::create([
            'name' => 'Node2',
            'color' => 'blue',
            'acol_id'=> '1',
            'arow_id'=> '1'

        ]);

        Anode::create([
            'name' => 'Node3',
            'color' => 'yellow',
            'acol_id'=> '1',
            'arow_id'=> '1'

        ]);

        Anode::create([
            'name' => 'Node4',
            'color' => 'green',
            'acol_id'=> '2',
            'arow_id'=> '1'

        ]);

        Anode::create([
            'name' => 'Node5',
            'color' => 'magenta',
            'acol_id'=> '2',
            'arow_id'=> '1'

        ]);

        Anode::create([
            'name' => 'Node6',
            'color' => 'orange',
            'acol_id'=> '2',
            'arow_id'=> '1'

        ]);

        Anode::create([
            'name' => 'Node7',
            'color' => 'purple',
            'acol_id'=> '3',
            'arow_id'=> '1'

        ]);


    }
}
