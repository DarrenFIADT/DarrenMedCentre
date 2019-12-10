<?php
# @Date:   2019-12-03T14:22:35+00:00
# @Last modified time: 2019-12-09T17:59:14+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('name');
            $table->string('address');
            $table->int('phone');
            $table->string('email')->unique();
            $table->boolean('insurance');
            $table->string('policy_number')->unique();#

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
        Schema::dropIfExists('patients');
    }
}
