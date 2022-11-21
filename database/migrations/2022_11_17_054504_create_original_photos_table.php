<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('original_photos', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('path');
            $table->foreignUuid('user_id')->constrained('users')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('original_photos');
    }
};
