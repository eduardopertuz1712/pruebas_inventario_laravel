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
        if (!Schema::hasTable('productos')) {
            return;
        }

        Schema::table('productos', function (Blueprint $table) {
            if (!Schema::hasColumn('productos', 'imagen')) {
                $table->string('imagen')->nullable()->after('stock');
            }
            if (!Schema::hasColumn('productos', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('imagen')->index();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (!Schema::hasTable('productos')) {
            return;
        }

        Schema::table('productos', function (Blueprint $table) {
            if (Schema::hasColumn('productos', 'imagen')) {
                $table->dropColumn('imagen');
            }
            if (Schema::hasColumn('productos', 'user_id')) {
                $table->dropColumn('user_id');
            }
        });
    }
};
