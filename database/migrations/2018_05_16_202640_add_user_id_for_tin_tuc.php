<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdForTinTuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tintuc', function (Blueprint $table) {
            $table->integer('idUser')->unsigned()->after('idLoaiTin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('tintuc', function ($table) {
            $table->dropColumn('idUser');
        });
        
    }
}
