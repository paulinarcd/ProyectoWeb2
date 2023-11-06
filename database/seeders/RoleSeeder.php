<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol1 = Role::create(['name'=>'Admin']);
        $rol2 = Role::create(['name'=>'Vendedor']);
        $rol3 = Role::create(['name'=>'Comprador']);

        Permission::create(['name'=>'vendedor.categorias.index'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.categorias.store'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.categorias.destroy'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.categorias.update'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.categorias.edit'])->syncRoles([$rol1,$rol2]);

        Permission::create(['name'=>'vendedor.tallas.index'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.tallas.store'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.tallas.destroy'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.tallas.update'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.tallas.edit'])->syncRoles([$rol1,$rol2]);

        Permission::create(['name'=>'vendedor.colores.index'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.colores.store'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.colores.destroy'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.colores.update'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'vendedor.colores.edit'])->syncRoles([$rol1,$rol2]);
    }
}
