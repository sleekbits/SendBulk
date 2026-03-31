<?php
use Illuminate\Database\Migrations\Migration;use Illuminate\Database\Schema\Blueprint;use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up(): void {
Schema::create('contacts',function(Blueprint $t){$t->id();$t->string('first_name')->nullable();$t->string('last_name')->nullable();$t->string('email')->unique();$t->string('phone')->nullable();$t->string('company')->nullable();$t->string('tag')->nullable();$t->string('status')->default('active');$t->string('source')->nullable();$t->string('country')->nullable();$t->text('notes')->nullable();$t->timestamps();});
Schema::create('email_templates',function(Blueprint $t){$t->id();$t->string('name');$t->string('category')->default('general');$t->longText('html');$t->boolean('is_default')->default(false);$t->timestamps();});
Schema::create('campaigns',function(Blueprint $t){$t->id();$t->string('name');$t->string('subject');$t->enum('status',['draft','scheduled','processing','paused','sent','failed'])->default('draft');$t->timestamp('scheduled_at')->nullable();$t->foreignId('template_id')->nullable()->constrained('email_templates')->nullOnDelete();$t->timestamps();});
Schema::create('smtp_settings',function(Blueprint $t){$t->id();$t->string('provider')->default('smtp');$t->string('host');$t->integer('port');$t->string('username')->nullable();$t->text('password')->nullable();$t->string('encryption')->nullable();$t->string('from_email');$t->string('from_name');$t->timestamps();});
Schema::create('system_settings',function(Blueprint $t){$t->id();$t->string('key')->unique();$t->text('value')->nullable();$t->timestamps();});
}
public function down(): void {Schema::dropIfExists('system_settings');Schema::dropIfExists('smtp_settings');Schema::dropIfExists('campaigns');Schema::dropIfExists('email_templates');Schema::dropIfExists('contacts');}};
