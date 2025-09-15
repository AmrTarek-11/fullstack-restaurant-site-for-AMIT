<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->ondeletecascade(); // reference to users table
            $table->string('name');               // name of person booking (required)
            $table->string('phone');              // phone number (required)
            $table->date('date');                 // booking date (required)
            $table->time('time');                 // booking time (required)
            $table->unsignedInteger('no_of_guests');    // number of guests (required)
            $table->text('notes')->nullable();    // optional extra notes
            $table->enum('status', ['pending','accepted','rejected'])->default('pending');
            $table->timestamps();                 // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
