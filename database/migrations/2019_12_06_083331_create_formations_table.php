<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::disableForeignKeyConstraints();
     
        Schema::create('formations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomformation', 300);
            $table->date('datedebut')->nullable();
            $table->smallInteger('duree');
            $table->char('unite', 10);
            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->foreign('categorie_id')->references('id')
                    ->on('categories')
                    ->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('formations');
    }

}
