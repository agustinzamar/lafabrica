<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('projects')->insert([
            'name' => 'Las normas que nos norman',
            'created_at' => now()
        ]);

        DB::table('projects')->insert([
            'name' => 'LabJujuy',
            'created_at' => now()
        ]);

        DB::table('projects')->insert([
            'name' => 'Cultivar',
            'created_at' => now()
        ]);
    }
}
