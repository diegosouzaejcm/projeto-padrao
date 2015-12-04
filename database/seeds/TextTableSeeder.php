<?php

use Illuminate\Database\Seeder;
use App\Text;

class TextTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('texts')->truncate();
        {

            for ($i = 0; $i < 5; $i++) {

                Text::create([
                    'titulo' => str_random(10),
                    'conteudo' => str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' .
                        str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' .
                        str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7) . ' ' . str_random(7),
                    'local' => 'Home',
                ]);
            }
        }
    }
}