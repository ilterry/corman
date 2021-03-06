<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersPublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_publications', function (Blueprint $table) {
            $table->integer('user_id')->foreign()->references('id')->on('users')->nullable();
            $table->integer('publication_id')->foreign()->references('id')->on('publications')->nullable();
            $table->string('author_name')->nullable();
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
        Schema::dropIfExists('users_publications');
    }
}
