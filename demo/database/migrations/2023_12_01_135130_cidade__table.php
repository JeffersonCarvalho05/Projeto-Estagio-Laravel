<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create ('City', function (Blueprint $table) {
            $table -> id();
            $table -> string('Cidade');
            $table -> text('Estado');
            $table -> string('População');
            $table -> softDeletes();
            $table -> timestamps();
        });
    }


    public function down(): void
    {
        //
    }
};
