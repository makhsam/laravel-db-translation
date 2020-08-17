<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locales')->insert([
            [
                'name' => 'English',
                'locale' => 'en',
                'is_visible' => false
            ],
            [
                'name' => 'Russian',
                'locale' => 'ru',
                'is_visible' => true
            ],
            [
                'name' => 'Uzbek Latin',
                'locale' => 'uz',
                'is_visible' => false
            ],
            [
                'name' => 'Uzbek Cyrillic',
                'locale' => 'oz',
                'is_visible' => true
            ],
        ]);

        // Update timestamps
        DB::table('locales')->update([
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
