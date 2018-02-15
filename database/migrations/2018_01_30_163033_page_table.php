<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('url');
            $table->longText('contenu');
            $table->string('type');
            $table->integer('created_by');
            $table->string('statu');
            $table->string('seo_titre');
            $table->string('seo_description');
            $table->integer('idLang');
            $table->integer('idParent');
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
        Schema::dropIfExists('pages');
    }
}
