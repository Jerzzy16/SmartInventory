<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::updateOrCreate(
            ['email' => 'admin@admin'],
            [
                'name' => 'admin',
                'password' => Hash::make('123456'),
            ]
        );
        $role = Role::firstOrCreate(['name' => 'admin']);
        $permissions = [
            'view_any_brand', 'view_brand', 'create_brand', 'update_brand', 'delete_brand',
            'view_any_customer', 'view_customer', 'create_customer', 'update_customer', 'delete_customer',
            'view_any_transfer', 'view_transfer', 'create_transfer', 'update_transfer', 'delete_transfer',
            'view_any_supplier', 'view_supplier', 'create_supplier', 'update_supplier', 'delete_supplier',
            'view_any_expense_category', 'view_expense_category', 'create_expense_category', 'update_expense_category', 'delete_expense_category',
            'view_any_user', 'view_user', 'create_user', 'update_user', 'delete_user',
            'view_any_attribute', 'view_attribute', 'create_attribute', 'update_attribute', 'delete_attribute',
            'view_any_role', 'view_role', 'create_role', 'update_role', 'delete_role',
            'view_any_expense', 'view_expense', 'create_expense', 'update_expense', 'delete_expense',
            'view_any_product', 'view_product', 'create_product', 'update_product', 'delete_product',
            'view_any_adjustment', 'view_adjustment', 'create_adjustment', 'update_adjustment', 'delete_adjustment',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign all permissions to the role
        $role->syncPermissions($permissions);

        // Assign role to the user
        $user->assignRole($role);
    }
}
