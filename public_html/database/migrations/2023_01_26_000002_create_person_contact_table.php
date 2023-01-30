<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_person_contact', function (Blueprint $table) {
            $table->id();
            $table->integer('person_id');
            $table->enum('cotact_type', ['email', 'whastapp','celphone','telephone']);
            $table->string('description');
            $table->dateTime('created_at', $precision = 0);
            $table->dateTime('delete_at', $precision = 0)->nullable();
            $table->dateTime('altered_at', $precision = 0);
            $table->enum('status', ['ACTIVE', 'DELETED'])->default('ACTIVE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_person_contact');
    }
};
