<?php
# @Date:   2019-12-03T14:59:46+00:00
# @Last modified time: 2019-12-04T16:51:28+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {

            $table->bigInteger('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('created');


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
        Schema::dropIfExists('doctors');
    }
}
