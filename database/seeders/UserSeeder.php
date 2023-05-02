<?php

namespace Database\Seeders;
use App\Models\Users;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'nome' => 'Deivson',
            'email' => 'araujodeivson@gmail.com'
            
        ]);
    
    
        }
}
