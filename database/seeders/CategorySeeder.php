<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Komik','Novel','Fantasy','Fiction','Mystery','Horror',
            'Romance','Information Technology','Self Improve',
            'Programming','Mathematics','Scripture','Magazine','Business','Others'

        ];
        foreach ($data as $value) {
           Category::insert([
            'name' => $value
           ]);
        }
    }

    
}
