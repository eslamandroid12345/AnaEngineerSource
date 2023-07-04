<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
//            $table->string('slug')->unique();
            $table->string('email',100)->unique();
            $table->string('password',255);
            $table->string('job', 250)->nullable();
            $table->string('University')->nullable();
            $table->enum('status', ['enabled', 'disabled','blocked'])->default('enabled');
            $table->string('image')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->text('access_token', 64)->nullable();
            $table->string('oauth_token', 255)->nullable();
            $table->string('profile_cover')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('google_id')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
