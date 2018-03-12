<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     
    //tasklistsはテーブル名
    public function up()
    {
        Schema::create('tasklists', function (Blueprint $table) {  
            $table->increments('id');     //tasklistsはテーブル名
            $table->string('content');    // content カラム追加
            $table->string('status',10);
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
        Schema::drop('tasklists');
    }
}
