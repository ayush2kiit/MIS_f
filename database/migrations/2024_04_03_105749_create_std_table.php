<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('std', function (Blueprint $table) {
            $table->string('adm_no')->primary(); // Primary key
            $table->string('name');
            $table->string('certificate_number', 20); // Certificate number limited to 20 characters
            $table->string('course', 20); // course
            $table->string('branch', 20);
            $table->decimal('ogpa', 5,2);
            $table->decimal('ogpa_h', 5,2);
            $table->decimal('final_ogpa', 5,2);
            $table->date('date_of_result'); // Date of the result
            $table->year('yop');
            $table->string('dept_id'); // Department ID
            $table->string('course_id'); // string
            $table->string('branch_id'); // Branch ID
            $table->string('department_name'); // Department na
            $table->decimal('temp_del')->default(1);//soft delte

            $table->timestamps();
        });

        \DB::table('std')->update(['temp_del' => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('std');
    }
};
