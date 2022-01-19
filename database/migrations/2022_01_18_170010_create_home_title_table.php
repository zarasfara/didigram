<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_title', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('id_status');
            $table->char('heading',255);
            $table->string('paragraph');
            $table->string('button_text');
            $table->string('link_text');
            $table->string('link_href');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_title');
    }
}
