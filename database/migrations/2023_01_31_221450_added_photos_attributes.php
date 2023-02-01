<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('original_photos', function (Blueprint $table) {
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->timestamp('photo_date')->nullable();

            $table->boolean('hidden')->default(false);
            $table->boolean('favorite')->default(false);
            $table->json('tags')->nullable();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('original_photos', function (Blueprint $table) {
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('photo_date');
            $table->dropColumn('hidden');
            $table->dropColumn('favorite');
            $table->dropColumn('tags');
            $table->dropSoftDeletes();
        });
    }
};
