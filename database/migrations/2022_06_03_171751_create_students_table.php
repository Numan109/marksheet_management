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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('std_name');
            $table->integer('std_class');
            $table->string('std_roll');
            $table->string('std_gender');
            $table->string('std_dateOfbirth');
            $table->string('std_age')->nullable();
            $table->string('std_religion');
            $table->string('std_nationality');
            $table->string('std_birth_reg');
            $table->string('std_present_add');
            $table->string('std_permenent_add')->nullable();
            $table->string('std_homedistrict');
            $table->string('std_phone')->nullable();
            $table->string('std_email')->nullable();
            $table->string('std_image');
            $table->string('std_sig');
            $table->string('std_father_name');
            $table->string('std_father_phone');
            $table->string('std_father_occupation');
            $table->string('std_father_email')->nullable();
            $table->string('std_mother_name');
            $table->string('std_mother_phone');
            $table->string('std_mother_occupation');
            $table->string('std_mother_email')->nullable();
            $table->string('std_password');

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
        Schema::dropIfExists('students');
    }
};
