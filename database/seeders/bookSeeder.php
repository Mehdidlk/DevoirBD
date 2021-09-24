<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('book')->insert([
            [
                'nom'=>Str::String('Batman'),
                'Date'=>Str::Integer('1939'),
                'Dessinateur'=>Str::String('Bob Kane'),
                'Nom du livre'=>Str::String('Batman'),
            ],
            [
                'nom'=>Str::String('Jerry'),
                'Date'=>Str::Integer('1958'),
                'Dessinateur'=>Str::String('gourbntg'),
                'Nom du livre'=>Str::String('Tom & Jerry'),
            ],
            [
                'nom'=>Str::String('Astérix'),
                'Date'=>Str::Integer('1959'),
                'Dessinateur'=>Str::String('René Goscinny'),
                'Nom du livre'=>Str::String('Astérix'),
            ],
            [
                'nom'=>Str::String('Gaston'),
                'Date'=>Str::Integer('1957'),
                'Dessinateur'=>Str::String('André Franquin'),
                'Nom du livre'=>Str::String('Gaston Lagaffe'),
            ]

        ]);
    }
}
