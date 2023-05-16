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
            'name' => 'Deivson',
            'email' => 'araujodeivson@gmail.com',
            'cpf' => '07723215401',
            'senha' => '$2a$12$uNaWjp8kjQMidmkqj9QdsOuu2ZdUfvq2rSLomsHCJl/.XqtxoTqES'
            
        ]);
    
    
        }
}
