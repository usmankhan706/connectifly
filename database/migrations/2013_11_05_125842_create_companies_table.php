<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId('service_id')->nullable()->references("id")->on("services")->onDelete("set null")->onUpdate("set null");
            $table->string("email")->unique();
            $table->string("phone");
            $table->string("description");
            $table->integer("size");
            $table->string("porfolio")->nullable();
            $table->string("website")->unique()->nullable();
            $table->string("country")->nullable();
            $table->string("city")->nullable();
            $table->string("logo")->nullable();
            $table->string("cover")->nullable();
            $table->string("password");
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
        Schema::dropIfExists('companies');
    }
}
