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
        Schema::create('change_contents', function (Blueprint $table) {
            $table->id();
            $table->string('page')->index(); // e.g., 'first_sec_head1', 'second_sec_para1'
            $table->string('key'); // e.g., 'first_sec_head1', 'second_sec_para1'
            $table->text('value'); // Content (can be plain text or HTML for CKEditor)
            $table->string('type'); // Content (can be plain text or HTML for CKEditor)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('change_contents');
    }
};
