<?php
namespace Database\Seeders;
use App\Models\User;use Illuminate\Database\Seeder;use Illuminate\Support\Facades\Hash;
class SuperAdminSeeder extends Seeder { public function run(): void { $u=User::updateOrCreate(['email'=>'admin@queue.liveblog365.com'],['name'=>'Super Admin','password'=>Hash::make('Admin@12345'),'is_active'=>true]); $u->syncRoles(['Super Admin']); } }
