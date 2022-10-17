<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("company_id")->references("id")->on("companies")->onDelete("cascade")->onUpdate("cascade");
            $table->string("sender");
            $table->longText("message")->nullable();
            $table->string("file")->nullable();
            $table->foreignId("job_id")->nullable()->references("id")->on("jobs")->onDelete("cascade")->onUpdate("cascade");
            $table->string("status")->nullable();
            $table->string("read")->nullable();
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
        Schema::dropIfExists('conversations');
    }
}
