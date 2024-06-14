<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\Before;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'fullname');
            $table->string('gender')->before('birthdate');
            $table->string('role')->default('customer')->after('password');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('users', function (Blueprint $table) {
            $table->renameColumn('fullname', 'name');
            $table->dropColumn(['gender','role']);
        });
    }
};
