`<?php

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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('meetingRoom');
            $table->integer('attendees');
            $table->dateTime('date');
            $table->time('startTime');
            $table->time('endTime');
            $table->string('title');
            $table->string('description');
            $table->boolean('projector')->default(False);
            $table->boolean('audio')->default(False);
            $table->boolean('itAssistance')->default(False);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
