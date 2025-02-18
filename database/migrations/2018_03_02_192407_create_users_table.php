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
            $table->integer('id')->primary();
            $table->string('battletag', 255)->nullable();
            $table->string('main_character_id', 32)->nullable();
            $table->boolean('is_officer')->default(false);
            $table->string('access_token', 255)->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();

            $table->foreign('main_character_id')
                  ->references('id')->on('characters')
                  ->onDelete('set null');
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
