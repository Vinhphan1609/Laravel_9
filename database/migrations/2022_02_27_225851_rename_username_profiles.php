<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameUserNameProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        if (Schema::hasColumn('profiles', 'username'))
        {
        Schema::table('profiles', function (Blueprint $table) {
            //
            $table->renameColumn('username','username_login');
        });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('profiles', 'username_login'))
        {
        Schema::table('profiles', function (Blueprint $table) {
            //
            $table->renameColumn('username_login','username');
        });
    }
}
};
