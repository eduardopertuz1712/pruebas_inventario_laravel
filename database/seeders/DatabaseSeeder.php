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

        // Crear productos y asignarlos aleatoriamente a usuarios existentes
        Producto::factory(20)->create()->each(function ($producto) use ($admin, $user) {
            $producto->user_id = rand(0,1) ? $admin->id : $user->id;
            $producto->save();
        });
    }
}
