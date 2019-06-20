<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable(false);
            $table->string('post_slug')->nullable();
            $table->string('feature_image', 100)->nullable();
            $table->string('youtube_video_url', 100)->nullable();
            $table->boolean('published')->default(1);

            // $table->unsignedInteger('category_id')->nullable();

            // $table->foreign('case_study_category_id')->references('id')->on('case_study_categories');
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
        Schema::dropIfExists('case_studies');
    }
}
