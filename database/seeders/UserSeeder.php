<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $moderatorRole = Role::firstWhere('name', RoleEnum::GUEST->value);
        User::factory(9)
            ->create()
            ->each(
                fn (User $user) => $user->assignRole($moderatorRole)
            );

        User::factory()
            ->create([
                'email' => 'admin@admin.fr',
                'name' => 'Super Admin',
            ])
            ->assignRole(Role::firstWhere('name', RoleEnum::SUPER_ADMIN->value));

        User::factory()
            ->create([
                'email' => 'moderator@moderator.fr',
                'name' => 'Moderator',
            ])
            ->assignRole(Role::firstWhere('name', RoleEnum::MODERATOR->value));
    }
}
