<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requestorinformation_id')->references('id')->on('requestorinformations')->onDelete('cascade')->onUpdate('cascade');
            $table->string('receivername');
            $table->string('purpose');
            $table->string('response')->nullable();
            $table->string('retrievaldate')->nullable();
            $table->string('status')->default('Pending');
            $table->string('read')->default('no');
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
        Schema::dropIfExists('requests');
    }
}
