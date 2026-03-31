<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;use Illuminate\Support\Facades\DB;
class SystemSettingSeeder extends Seeder { public function run(): void { DB::table('system_settings')->upsert([['key'=>'app_name','value'=>'SendBulk'],['key'=>'app_url','value'=>'https://queue.liveblog365.com']],['key'],['value']); } }
