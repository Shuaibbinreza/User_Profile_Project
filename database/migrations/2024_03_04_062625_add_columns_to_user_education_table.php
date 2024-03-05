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
            $table->string('education_level')->nullable()->after('id');
            $table->string('board')->nullable()->after('major');
            $table->boolean('foreign_institute')->default(false)->after('education_institute');
            $table->double('year_of_passing')->nullable()->after('education_end');
            $table->double('result')->nullable()->after('year_of_passing');
            $table->double('scale')->nullable()->after('result');
            $table->double('duration')->nullable()->after('result');
            $table->text('achievement')->nullable()->after('duration');
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
