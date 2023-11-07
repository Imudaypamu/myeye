<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('last_name')->nullable();
$table->string('father_name')->nullable();
$table->string('mother_name')->nullable();
$table->string('alt_mobile')->nullable();
$table->string('alt_email')->nullable();
$table->string('aadhar_no')->nullable();
$table->string('pan_no')->nullable();
$table->string('voter_id')->nullable();
$table->string('p_address')->nullable();
$table->string('idf_moles')->nullable();
$table->string('school_name')->nullable();
$table->string('s_board')->nullable();
$table->string('s_location')->nullable();
$table->string('s_percentage')->nullable();
$table->string('s_gpa')->nullable();
$table->string('c_name')->nullable();
$table->string('c_board')->nullable();
$table->string('c_location')->nullable();
$table->string('c_percentage')->nullable();
$table->string('c_gpa')->nullable();
$table->string('b_name')->nullable();
$table->string('b_board')->nullable();
$table->string('b_location')->nullable();
$table->string('b_percentage')->nullable();
$table->string('b_gpa')->nullable();
$table->string('p1_name')->nullable();
$table->string('p1_des')->nullable();
$table->string('p1_due')->nullable();
$table->string('p2_name')->nullable();
$table->string('p2_des')->nullable();
$table->string('p2_due')->nullable();
$table->string('cu1_name')->nullable();
$table->string('cu1_des')->nullable();
$table->string('cu1_due')->nullable();
$table->string('cu2_name')->nullable();
$table->string('cu2_des')->nullable();
$table->string('cu2_due')->nullable();
$table->string('i1_name')->nullable();
$table->string('i1_des')->nullable();
$table->string('i1_due')->nullable();
$table->string('i2_name')->nullable();
$table->string('i2_des')->nullable();
$table->string('i2_due')->nullable();
$table->string('github')->nullable();
$table->string('linkedin')->nullable();
$table->string('portfolio')->nullable();
$table->string('d_no')->nullable();
$table->string('landmark')->nullable();
$table->string('street')->nullable();
$table->string('village')->nullable();
$table->string('mandal')->nullable();
$table->string('district')->nullable();
$table->string('state')->nullable();
$table->string('country')->nullable();



         $table->string('phone')->nullable();
         $table->string('location')->nullable();
        
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
