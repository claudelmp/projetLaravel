<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        factory(App\Categorie::class, 10)->create()->each(function($categorie) {
            $i = rand(2, 8);
            while (--$i) {
                $categorie->formations()->save(factory(App\Formation::class)->make());
            }
        });
    }

}
