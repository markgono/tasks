<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });

        /* Also create the tasks & tags pivot table.
        *
        * Allows us to do crazy stuff, like:
        * Task::with('tags')->get(); // 1 Query
        * Task::first()->tags->pluck('name'); // All my tags names!
        * Task::first()->tags()->attach(Tag::first()); // Let's relate!
        * Task::find(4)->tags()->detach(Tag::find(3)); // Let's not…
        */
        Schema::create('tag_task', function (Blueprint $table) {
          $table->integer('tag_id');
          $table->integer('task_id');
          $table->primary([
            'tag_id',
            'task_id',
          ]);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        
        Schema::dropIfExists('tag_task');
    }
}
