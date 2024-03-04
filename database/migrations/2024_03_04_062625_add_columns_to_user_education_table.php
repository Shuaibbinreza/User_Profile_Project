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
        Schema::table('user_education', function (Blueprint $table) {
            $table->string('major')->nullable()->after('education_title');
            $table->boolean('foreign_institute')->default(false)->after('major');
            $table->string('foreign_institute')->nullable()->after('major');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_education', function (Blueprint $table) {
            //
        });
    }
};
