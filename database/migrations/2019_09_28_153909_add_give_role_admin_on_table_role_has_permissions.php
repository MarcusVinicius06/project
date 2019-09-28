<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGiveRoleAdminOnTableRoleHasPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('role_has_permissions')->insert([
            'permission_id'=> 1,
            'role_id'=> 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('role_has_permissions')->where(['permission_id'=>1])->where(['role_id'=>1])->delete();
    }
}
