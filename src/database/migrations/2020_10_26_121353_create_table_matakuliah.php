<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->string("kodemk",10);
            $table->string("matakuliah",100);
            $table->string("dosen",100);
            $table->string("noruang",10);
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
        Schema::dropIfExists('table_matakuliah');
    }
}
