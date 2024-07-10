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
        Schema::create('anodes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->unsignedBigInteger('acol_id');
            $table->foreign('acol_id')->references('id')->on('acols');
            $table->string('arow_id')->default(null);
            // $table->unsignedBigInteger('arow_id');
            // $table->foreign('arow_id')->references('id')->on('arows');
            $table->string('parent_id')->nullable();
            $table->timestamps();
        });

    //     Schema::table('anodes',function (Blueprint $table){
    //         $table->foreign('parent_id')->references('id')->on('anodes');
    // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anodes');
    }
};
