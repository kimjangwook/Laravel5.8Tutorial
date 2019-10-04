<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_person', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('person_id');
            $table->unsignedBigInteger('group_id');
            $table->timestamps();
        });

//        $groups = \App\Group::all();
//        $first = $groups->first();
//        $last = $groups->last();
//        $people = \App\Person::all();
//
//        foreach ($people as $person) {
//            $idx = rand(0,2);
//            if ($idx === 0) {
//                $person->groups()->attach([$first]);
//            } else if ($idx ===  1) {
//                $person->groups()->attach([$last]);
//            } else if ($idx === 2) {
//                $person->groups()->attach($groups);
//            }
//        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_group');
    }
}
