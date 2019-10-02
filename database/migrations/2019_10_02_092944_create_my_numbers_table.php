<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_numbers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number')->unique();
            $table->unsignedBigInteger('person_id')->index();
            $table->timestamps();
            $table->foreign('person_id')->references('id')->on('people');
        });

        $people = \App\Person::all();
        foreach($people as $person) {
            \App\MyNumber::create([
                'number' => md5(uniqid(rand(), true)),
                'person_id' => $person->id,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_numbers');
    }
}
