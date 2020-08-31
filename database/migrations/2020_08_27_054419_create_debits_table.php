<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debits', function (Blueprint $table) {
            $table->id();
            $table->string('Branch');
            $table->string('Date');
            $table->string('Service');
            $table->string('Applicants_name');
            $table->string('Applicants_Address');
            $table->biginteger('Account_Number');
            $table->string('Card_Type');
            $table->biginteger('Existing_Card_Number')->nullable();
            $table->string('Reason_for_Replacement')->nullable();
            $table->string('Supplementary_Name')->nullable();
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
        Schema::dropIfExists('debits');
    }
}
