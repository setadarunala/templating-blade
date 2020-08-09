<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('judul',45);
            $table->string('isi',225);
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbarui');
            $table->integer('jawaban_tepat_id')->unsigned();

            $table->unsignedBigInteger('profil_id');
            $table->foreign('profil_id')->references('id')->on('profil');

   
            
            $table->timestamps();

            
            //FK
           

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan');
    }
}
