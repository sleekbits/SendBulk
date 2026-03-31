<?php
use Illuminate\Database\Migrations\Migration;use Illuminate\Database\Schema\Blueprint;use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up(): void {
Schema::create('activity_logs',function(Blueprint $t){$t->id();$t->unsignedBigInteger('user_id')->nullable();$t->string('action');$t->text('description')->nullable();$t->string('ip_address')->nullable();$t->timestamps();});
Schema::create('email_logs',function(Blueprint $t){$t->id();$t->unsignedBigInteger('campaign_id')->nullable();$t->unsignedBigInteger('contact_id')->nullable();$t->string('email');$t->string('status');$t->text('error_message')->nullable();$t->timestamp('sent_at')->nullable();$t->timestamps();});
Schema::create('import_histories',function(Blueprint $t){$t->id();$t->unsignedBigInteger('user_id')->nullable();$t->string('file_name');$t->integer('total_rows')->default(0);$t->integer('imported_rows')->default(0);$t->integer('failed_rows')->default(0);$t->text('summary')->nullable();$t->timestamps();});
Schema::create('segments',function(Blueprint $t){$t->id();$t->string('name');$t->json('rules')->nullable();$t->boolean('is_saved')->default(true);$t->timestamps();});
Schema::create('sender_profiles',function(Blueprint $t){$t->id();$t->string('name');$t->string('from_email');$t->string('from_name');$t->string('reply_to')->nullable();$t->string('provider')->default('smtp');$t->timestamps();});
Schema::create('unsubscribes',function(Blueprint $t){$t->id();$t->string('email')->index();$t->string('reason')->nullable();$t->timestamps();});
Schema::create('failed_emails',function(Blueprint $t){$t->id();$t->unsignedBigInteger('campaign_id')->nullable();$t->unsignedBigInteger('contact_id')->nullable();$t->string('reason');$t->integer('retry_count')->default(0);$t->timestamps();});
}
public function down(): void {Schema::dropIfExists('failed_emails');Schema::dropIfExists('unsubscribes');Schema::dropIfExists('sender_profiles');Schema::dropIfExists('segments');Schema::dropIfExists('import_histories');Schema::dropIfExists('email_logs');Schema::dropIfExists('activity_logs');}};
