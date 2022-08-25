<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            'name' => 'Logo',
            'image' => 'dist/images/logo.jpg',
            'meta' => 'logo',
            'meta_description' => 'logo',
            'type' => 'logo',
            'p_id' => 0,
            'value' => 'logo',
            'descritption' => 'logo'
        ]);
    }
}
