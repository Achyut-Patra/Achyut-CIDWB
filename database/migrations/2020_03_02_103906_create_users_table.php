<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
            $table->string('locationkey')->unique();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('stake_cd');
            $table->string('description');
            $table->string('user_address');
            $table->integer('stake_id_fk');
            $table->string('super_password');
            $table->string('last_login');
            $table->string('last_login_ip');
            $table->string('user_contact_no');
            $table->string('last_pw_update_time');
            $table->string('locationkey_hash');
            $table->integer('flag');
            $table->integer('role_id');
            $table->string('stationp');
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
}
