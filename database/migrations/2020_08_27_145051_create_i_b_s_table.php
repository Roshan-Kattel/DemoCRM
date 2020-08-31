<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('i_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('Branch');
            $table->string('Date');
            $table->string('Service');
            $table->string('Applicant_name');
            $table->string('Address');
            $table->biginteger('Account_number');
            $table->biginteger('Mobile_no');
            $table->string('Application_for');
            $table->biginteger('Change_Add_Mobile_no');
            $table->biginteger('New_Account_no');
            $table->string('e_Required_Service');
            $table->string('Email');
            $table->string('i_Required_Service');
            $table->biginteger('linked_Account_no')->nullable();
            $table->string('linked_Accoun_name')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('i_b_s');
    }
}
