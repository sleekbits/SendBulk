<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;use Spatie\Permission\Models\Role;
class RolePermissionSeeder extends Seeder { public function run(): void { foreach(['Super Admin','Admin','Campaign Manager','Viewer'] as $r){ Role::findOrCreate($r); } } }
