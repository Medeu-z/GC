<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Users;
class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id')->unsigned(); 
            $table->string('CourseName');
            $table->string('CourseImage');
            $table->integer('numOfAss');
            $table->integer('numOfInsertAss');
            $table->integer('persOfInsertAss');
            $table->integer('Goal');
            $table->integer('CurentPer');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('courses');
    }
}
/*php artisan migrate:refresh  /database/migrations/2021_04_03_201745_create_courses_table.php*/
