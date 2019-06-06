<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            // $table->string('nick_name')->nullable();
            $table->string('birth_date');
            // $table->string('gender');
            $table->string('land_line_number');
            $table->string('mobile_number');
            // $table->string('lazada_account')->nullable();
            $table->string('instagram_account')->nullable();
            $table->string('facebook_name')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('home_address');
            $table->string('shipping_address');
            // $table->string('up_line');
            // $table->boolean('referrer');
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('user_details');
    }
}
