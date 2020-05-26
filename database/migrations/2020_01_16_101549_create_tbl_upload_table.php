<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateTblUploadTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('tblupload',function(Blueprint $table){
            $table->increments("id");
            $table->integer("upload_type_id_fk");
            $table->string("title");
            $table->text("description");
            $table->string("file_name");
            $table->integer("flag")->nullable();
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
        Schema::drop('tblupload');
    }

}