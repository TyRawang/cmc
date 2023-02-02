<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSearchJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_search_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('education');
            $table->string('search_state_job')->nullable();
            $table->string('search_all_state_job')->nullable();
            $table->string('coaching_center')->nullable();
            $table->string('state_wise')->nullable();
            $table->string('district_wise')->nullable();
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
        Schema::dropIfExists('user_search_jobs');
    }
}
