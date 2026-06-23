<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('currencies')) {
            // Delete all currencies except SAR
            DB::table('currencies')->where('code', '!=', 'SAR')->delete();

            // Set SAR as default if it exists
            DB::table('currencies')->where('code', 'SAR')->update(['is_default' => true]);

            // Set defaultCurrency setting to SAR for all users
            DB::table('settings')->where('key', 'defaultCurrency')->update(['value' => 'SAR']);
        }
    }

    public function down(): void
    {
        // No rollback - this is a data cleanup migration
    }
};
