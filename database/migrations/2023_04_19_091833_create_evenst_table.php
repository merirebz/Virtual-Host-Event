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
        Schema::create('events', function (Blueprint $table) {
            $table->id('idE');
            $table->string('Eventname');
            $table->string('Organisatorname');
            $table->time('heureD');
            $table->time('heureF');
            $table->string('src');
            $table->Longtext('details',70000);
            $table->string('type');
            $table->string('linkEvent');
            $table->string('payement');
            $table->date('dateDebut');
             $table->date('dateFin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
