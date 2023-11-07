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
        Schema::create('sponsorerequests', function (Blueprint $table) {
            $table->id();
            
            // $table->unsignedBigInteger('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // $table->unsignedBigInteger('sponsore_id')->unsigned();
            // $table->foreign('sponsore_id')->references('id')->on('sponsores')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');

            $table->string('name');
            $table->text('content');
            $table->integer('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsorerequests');
    }
};
