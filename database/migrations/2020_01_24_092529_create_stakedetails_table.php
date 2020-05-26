<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateStakedetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('stakedetails',function(Blueprint $table){
            $table->increments("id");
            $table->string("stake_name");
            $table->integer("flag")->nullable();
            $table->integer("sort_order")->nullable();
            $table->string("abbreviation")->nullable();
            $table->string("logo")->nullable();
            $table->string("stake_level_id_fk")->nullable();
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
        Schema::drop('stakedetails');
    }

}