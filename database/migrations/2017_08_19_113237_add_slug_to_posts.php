<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Dodajem kolonu slug u tabelu posts i stavljam index na nju zbog brze pretrage, posle kolone body
        Schema::table('posts', function($table){
            $table->string('slug')->unique()->arter('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function($table){
            $table->dropColumn('slug');
        });
    }
}
