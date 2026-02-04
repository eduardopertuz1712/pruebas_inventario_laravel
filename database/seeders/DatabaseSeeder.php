<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Producto;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        // Crear un usuario admin y un usuario normal
        $admin = User::factory()->withPersonalTeam()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin',
        ]);

        $user = User::factory()->withPersonalTeam()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'user',
        ]);

        // Crear un único producto asignado al admin (el resto los añadirá el usuario manualmente)
        Producto::factory()->create([
            'nombre' => 'Producto Inicial',
            'descripcion' => 'Producto inicial creado solo para la cuenta admin y verificaion de existencia de producto',
            'precio' => 9.99,
            'stock' => 10,
            'user_id' => $admin->id,
        ]);
    }
}
