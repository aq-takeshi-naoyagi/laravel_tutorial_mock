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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients');
            $table->string('case_name', 30);
            $table->string('our_person_name', 10);
            $table->integer('status')->default(0);;
            $table->date('request_receipt_date')->nullable(true);
            $table->date('case_payment_date')->nullable(true);
            $table->date('estimate_reception_date')->nullable(true);
            $table->string('flow_path', 30)->nullable(true);
            $table->string('information', 30)->nullable(true);
            $table->dateTime('final_update_date');
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
        Schema::dropIfExists('leads');
    }
};
