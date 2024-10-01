<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view cours',
            'create cours',
            'edit cours',
            'delet cours'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $teacherRole = Role::create([
            'name' => 'teacher'
        ]);

        $teacherRole->givePermissionTo(
            [
                'view cours',
                'create cours',
                'edit cours',
                'delet cours'
            ]
        );

        $studentRole = Role::create([
            'name' => 'student'
        ]);

        $studentRole->givePermissionTo('view cours');

        // membuat data superadmin
        $user = User::create(
            [
                'name' => 'sabardi',
                'email' => 'sabardibahari@gmail.com',
                'password' => bcrypt('12345678'),
            ]
        );

        $user->assignRole($teacherRole);
    }
}
