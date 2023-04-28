<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisors', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                $table->unsignedInteger('centro_id')->constrained('centro')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nombre_sup');
            $table->string('tel');
            $table->string('email')->unique();
            
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
        Schema::dropIfExists('supervisors');
    }
}
