<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'app.name' =>'Jasa Presentasi',
            'app.url' => 'https://jasa-presentasi.com',
            'mail.from.name' => 'admin',
            'mail.from.address' => 'admin@jasapresentasi.com',
            'mail.default' => 'smtp',
            'mail.mailers.smtp.host' => 'smtp.mailtrap.io',
            'mail.mailers.smtp.port' => '2525',
            'mail.mailers.smtp.username' => 'd709ad8097799c',
            'mail.mailers.smtp.password' => '1181c8e18d9404',
            'mail.mailers.smtp.encryption' => 'tls',
            'mail.from.app_logo' =>'Main_Logo_2_White.png',
            'mail.from.app_favicon' =>'favicon.ico',
            
      
        ];

        foreach ($data as $key => $value) {
            $config = \App\Models\Config::firstOrCreate(['key' => $key]);
            $config->value = $value;
            $config->save();
        }
    }
}
