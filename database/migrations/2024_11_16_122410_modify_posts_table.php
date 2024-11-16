<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // If there is a foreign key referencing the 'authors' table, drop it
            $table->dropForeign(['author_id']); // replace 'author_id' with the actual column name if needed
            $table->dropColumn('author_id'); // remove the column entirely if needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // If you need to roll back the migration, you can add back the foreign key and column
            $table->foreignId('author_id')->constrained('authors')->onDelete('cascade');
        });
    }
};
