<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('email', 64)->unique();
            $table->string('address');
            $table->bigInteger('salary');
            $table->string('status', 8);
            $table->unsignedBigInteger('department_id');
            $table->timestamps();
            $table->foreign('department_id')
                    ->references('id')->on('departments')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
