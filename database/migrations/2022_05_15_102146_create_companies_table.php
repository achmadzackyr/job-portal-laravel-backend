<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_field_id');
            $table->string('company_name');
            $table->longText('profile_description')->nullable();
            $table->date('establishment_date')->nullable();
            $table->string('company_website_url');
            $table->timestamps();
            $table->foreign('business_field_id')->references('id')->on('business_fields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
