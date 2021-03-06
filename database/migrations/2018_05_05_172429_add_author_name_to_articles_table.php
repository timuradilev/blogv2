<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthorNameToArticlesTable extends Migration
{
    /**
     * Run the migrations. Add author column to articles table.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('author');
        });
    }

    /**
     * Reverse the migrations. Drop author column from articles table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('author');
        });
    }
}
