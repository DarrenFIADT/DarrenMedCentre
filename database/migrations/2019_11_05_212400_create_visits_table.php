<?php
# @Date:   2019-12-09T18:10:30+00:00
# @Last modified time: 2019-12-09T18:10:37+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('doctor_id')->unsigned();
            $table->string('description');
            $table->bigInteger('patient_id')->unsigned();
            $table->date('date');
            $table->time('time');
            $table->decimal('cost',6,2);
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
        Schema::dropIfExists('visits');
    }
}
