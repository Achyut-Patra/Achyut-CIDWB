<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateCriminaldetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('criminaldetails',function(Blueprint $table){
            $table->increments("id");
            $table->string("namfst");
            $table->string("nammddl");
            $table->string("namlst");
            $table->string("namalis");
            $table->date("dbrth")->nullable();
            $table->string("agee")->nullable();
            $table->string("ffstname")->nullable();
            $table->string("fmstname")->nullable();
            $table->string("flstname")->nullable();
            $table->string("lsidefce")->nullable();
            $table->string("fsidefce")->nullable();
            $table->string("rsidefce")->nullable();
            $table->text("peradd")->nullable();
            $table->string("perstat")->nullable();
            $table->string("perdis")->nullable();
            $table->string("perpsta")->nullable();
            $table->string("perpin")->nullable();
            $table->text("preadd")->nullable();
            $table->string("prestat")->nullable();
            $table->string("predis")->nullable();
            $table->string("prepsta")->nullable();
            $table->string("mobi")->nullable();
            $table->string("lndn")->nullable();
            $table->text("crmdet");
            $table->string("modoper")->nullable();
            $table->date("dofcrm");
            $table->string("crmtyp")->nullable();
            $table->string("opertare");
            $table->string("ir")->nullable();
            $table->string("remrk")->nullable();
            $table->string("cseref");
            $table->string("rewann")->nullable();
            $table->string("gend");
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
        Schema::drop('criminaldetails');
    }

}