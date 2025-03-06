<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('visitas', function (Blueprint $table) {
            $table->text('comentarios')->nullable();
            $table->foreignId('mural_id')->constrained('murales')->onDelete('cascade');
        });
    }
    
    public function down(): void
    {
        Schema::table('visitas', function (Blueprint $table) {
            $table->dropColumn('comentarios');
            $table->dropColumn('mural_id');
        });
    }
    
};
