<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('lastname');
            $table->date('dob');
            $table->string('gender');
            $table->string('religion');
            $table->string('disase');
            $table->string('allergies');
            $table->string('drug');
            $table->string('telephone');
            $table->string('email');
            $table->string('facebook')->nullable();

            $table->string('education_grade')->nullable();
            $table->string('education_plan')->nullable();
            $table->string('school')->nullable();
            $table->string('school_province')->nullable();
            $table->float('grade')->nullable();

            $table->string('a2bgen')->nullable();
            $table->string('a2b_researchgroup')->nullable();
            $table->string('a2b_department')->nullable();
            $table->string('a2b_facility')->nullable();
            $table->string('entrance_facility')->nullable();
            $table->string('entrance_department')->nullable();

            $table->string('homeaddress')->nullable();
            $table->string('mooban')->nullable();
            $table->string('soi')->nullable();
            $table->string('street')->nullable();
            $table->string('district')->nullable();
            $table->string('area')->nullable();
            $table->string('province')->nullable();
            $table->string('postcode')->nullable();

            $table->string('dad_name')->nullable();
            $table->string('dad_lastname')->nullable();
            $table->string('dad_telephone')->nullable();

            $table->string('mom_name')->nullable();
            $table->string('mom_lastname')->nullable();
            $table->string('mom_telephone')->nullable();

            $table->string('parent_name')->nullable();
            $table->string('parent_lastname')->nullable();
            $table->string('parent_telephone')->nullable();

            $table->string('approve_filename')->nullable();
            $table->string('image_filename')->nullable();

            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('ispass')->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
