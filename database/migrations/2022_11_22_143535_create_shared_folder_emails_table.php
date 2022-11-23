<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('shared_folder_emails', function (Blueprint $table) {
            $table->foreignUuid('shared_folder_id')->constrained()->cascadeOnDelete();
            $table->string('email');
            $table->primary(['shared_folder_id', 'email']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shared_folder_emails');
    }
};
