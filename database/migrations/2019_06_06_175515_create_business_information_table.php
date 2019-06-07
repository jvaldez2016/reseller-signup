<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_user_since');
            $table->string('name_of_referrer');
            $table->string('existing_business')->nullable();
            $table->string('existing_business_address')->nullable();
            $table->string('dti_number')->nullable();
            $table->string('tin_number')->nullable();
            $table->boolean('facebook');
            $table->boolean('instagram');
            $table->boolean('lazada');
            $table->boolean('shopee');
            $table->boolean('personalcontacts');
            $table->boolean('existingbusiness');
            $table->string('others')->nullable();
            $table->string('facebook_business_account')->nullable();
            $table->string('facebook_business_url')->nullable();
            $table->string('instragram_business_account')->nullable();
            $table->string('lazada_account')->nullable();
            $table->string('shopee_account')->nullable();
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
        Schema::dropIfExists('business_information');
    }
}
