<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            
            DB::table('photos')->insert([
                'path' => 'https://via.placeholder.com/150',
                'description' => Str::random(64),
                'project_id' => null,
                'created_at' => now()
            ]);

        }
    }
}
