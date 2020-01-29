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
        $faker = Faker\Factory::create();

        for ($i=0; $i < 10; $i++) {

            DB::table('photos')->insert([
                'path' => 'photos/JhsgCFOTw9pUBjqDrULCJ2F5i6bW7MnF8KWy6KD9BMKtWMS71X9dMat7sZl45TzZmmynHKllVTEwFRN4nPU9HWBxMw1580217947.jpeg',
                'description' => $faker->sentence(10),
                'imageable_type' => null,
                'imageable_id' => null,
                'created_at' => now()
            ]);

        }
    }
}
