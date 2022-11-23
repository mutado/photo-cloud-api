<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('shared_folders', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('folder_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete();
            $table->boolean('is_public')->default(true);
            $table->boolean('is_password_protected')->default(false);
            $table->string('password')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shared_folders');
    }
};
