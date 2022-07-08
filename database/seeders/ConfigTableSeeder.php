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
            'app.name' =>'PMG',
            'app.url' => 'https://pmg.com',
            'app.url_frontend' => 'https://react-pmg-ninedragonlabs.vercel.app',
            'mail.from.name' => 'wide',
            'mail.from.address' => 'akhlakulaziz@gmail.com',
            'mail.default' => 'smtp',
            'mail.mailers.smtp.host' => 'smtp.gmail.com',
            'mail.mailers.smtp.port' => '587',
            'mail.mailers.smtp.username' => 'akhlakulaziz@gmail.com',
            'mail.mailers.smtp.password' => 'jyastgrehcyxgrfu',
            'mail.mailers.smtp.encryption' => 'tls',
            'mail.from.app_logo' =>'Main_Logo_2_White.png',
            'mail.from.app_logo_login' =>'Main_Logo_2_Tosca.png',
            'mail.from.app_favicon' =>'favicon.ico',
            'mail.from.app_description' =>'Build successful SEO campaigns from the ground up. Hundreds of businesses have already set up the very foundation of workflow management and SEO reporting with us',
            'api.xendit' =>'xnd_development_OZ0vpMdYGU53V6WgMWDzRWj9mMN6yD4H7qbt6UZ09M8fCv13VCD3EZnuJTTUQ9PF',
            
      
        ];

        foreach ($data as $key => $value) {
            $config = \App\Models\Config::firstOrCreate(['key' => $key]);
            $config->value = $value;
            $config->save();
        }
    }
}
