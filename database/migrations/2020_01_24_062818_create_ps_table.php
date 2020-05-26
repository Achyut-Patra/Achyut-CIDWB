<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreatePsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('ps',function(Blueprint $table){
            $table->increments("id");
            $table->string("district_id_fk")->nullable();
            $table->string("ps_code");
            $table->string("ps_name");
            $table->string("address")->nullable();
            $table->string("contact_no")->nullable();
            $table->string("email")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ps');
    }

}