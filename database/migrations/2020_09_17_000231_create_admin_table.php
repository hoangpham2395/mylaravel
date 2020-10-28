<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    protected $table = 'admin';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('email', 512)->nullable(false);
            $table->string('password', 64)->nullable(false);
            $table->string('name', 256)->nullable(false);
            $table->string('avatar', 512)->nullable(true);
            $table->char('role_type', 1)->nullable(false)->default(0)->comment('0: super admin, 1: admin');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
