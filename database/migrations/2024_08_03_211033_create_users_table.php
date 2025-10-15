<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('firstName');
            $table->string('lastName');
            $table->string('employeeId')->unique();
            $table->string('jobTitle');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phoneNumber');
            $table->string('address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
