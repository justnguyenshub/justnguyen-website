<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('po_id');
            $table->unsignedInteger('po_type')->nullable($value=true);
            $table->foreign('po_type')->references('pt_id')->on('post_types')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedInteger('po_topic')->nullable($value=true);
            $table->foreign('po_topic')->references('cate_id')->on('categories')->onDelete('set null')->onUpdate('cascade');
            $table->string('po_title',100)->nullable($value=true);
            $table->string('po_summary',150)->nullable($value=true);
            $table->string('po_content',10000)->nullable($value=true);
            $table->unsignedInteger('po_author')->nullable($value=true);
            $table->foreign('po_author')->references('ad_id')->on('admins')->onDelete('set null')->onUpdate('cascade');
            $table->unsignedInteger('po_status')->nullable($value=true);
            $table->foreign('po_status')->references('ps_id')->on('post_states')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('posts');
    }
}
