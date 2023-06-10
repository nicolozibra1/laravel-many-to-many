<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            'HTML5',
            'CSS3',
            'Sass',
            'Bootstrap',
            'Javascript',
            'Axios',
            'Vue.js',
            'Vite',
            'PHP',
            'Laravel',
            'MySQL',
            'Apache'
        ];
        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $technology;
            $newTechnology->slug = Str::slug($technology, '-');
            $newTechnology->save();
        }
    }
}
