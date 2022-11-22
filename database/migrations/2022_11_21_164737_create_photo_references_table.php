<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('photo_references', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('folder_id')->constrained('folders')->cascadeOnDelete();
            $table->foreignUuid('photo_id')->constrained('original_photos')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('photo_references');
    }
};
