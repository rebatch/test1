<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('entry_id');
            $table->unsignedInteger('entry_member_id');
            $table->char('entry_username',64);
            $table->char('entry_batchmonth',64);
            $table->char('entry_batchyear',64);
            $table->tinyInteger('entry_num');
            $table->integer('entry_batch_id');
            $table->integer('entry_complete_id');
            $table->tinyInteger('entry_completed_batch');
            $table->date('entry_date');
            $table->text('entry_text');
            $table->datetime('entry_when_posted');
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
        Schema::dropIfExists('entries');
    }
}
