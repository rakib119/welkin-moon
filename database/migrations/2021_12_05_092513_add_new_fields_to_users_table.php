<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        $table->string('username', 25)->unique()->after('email_verified_at');
        $table->string('phone', 25)->unique()->after('username');
        $table->string('firstname', 255)->nullable()->after('phone');
        $table->string('lastname', 255)->nullable()->after('firstname');
        $table->string('birthday', '255')->nullable()->after('lastname');
        $table->string('gender', '255')->nullable()->after('birthday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
