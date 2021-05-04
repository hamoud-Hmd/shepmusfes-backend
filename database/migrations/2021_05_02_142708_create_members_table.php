<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("image");
            $table->longText("description");
            $table->string("tel");
            $table->string("email");
            $table->integer("committee_id");
            $table->boolean('president')->default(false);
//            $table->foreign("commitee_id")->references('id')->on('committees')->onDelete('CASCADE');
            $table->integer("member_type_id")->nullable();
//            $table->foreign("member_type_id")->references('id')->on('member_types')->onDelete('CASCADE');
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
        Schema::dropIfExists('members');
    }
}
