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
        // --- BASE TABLES (MUST BE FIRST) ---

        // 1. college table
        Schema::create('college', function (Blueprint $table) {
            $table->integer('University_id')->primary();
            $table->string('college_name', 255);
            $table->string('course', 60);
            $table->softDeletes();
        });

        // 2. a_record table (Reference for Tournaments)
        Schema::create('a_record', function (Blueprint $table) {
        // Keep it as a simple integer primary key (which is signed by default)
        $table->integer('swimmer_id')->primary(); 
        $table->string('main_stroke', 10); 
        $table->softDeletes();
        });

        // --- DEPENDENT TABLES ---

        // 3. UserProfile table (depends on College)
        Schema::create('user_profile', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('username', 16);
            $table->string('first_name', 20);
            $table->string('last_name', 15);
            $table->string('email', 45);
            $table->integer('user_age');
            $table->year('batch_year');
            $table->enum('Gender', ['Mens', 'Womens']);
            $table->integer('University_id'); // Must match type of college.University_id
            $table->softDeletes();

            // Composite Primary Key: ['user_id', 'University_id']
            $table->primary(['user_id', 'University_id']);
            $table->unique('email', '_UNIQUE');

            // Foreign Key Constraint
            $table->foreign('University_id', 'fk_UserProfile_College')
                  ->references('University_id')
                  ->on('college')
                  ->onDelete('no action')
                  ->onUpdate('no action');
                  


                  
            
            // Note: Index 'fk_UserProfile_College1_idx' is created automatically by the foreign key constraint.
        });

        // 4. user_role table (depends on users + roles - assumed user_id is FK)
        Schema::create('user_role', function (Blueprint $table) {

        // Primary Key
        $table->integer('role_id')->primary(); 
    
        // Other Columns
        $table->string('role_title', 15)->nullable();
        
        // Foreign Key Columns (must match the referenced table's column types)
        $table->integer('UserProfile_user_id'); 
        $table->integer('UserProfile_University_id');
        $table->softDeletes();


        // Composite Index (Optional, but good practice for composite FKs)
        // The index name matches your original SQL
        $table->index(['UserProfile_user_id', 'UserProfile_University_id'], 'fk_user_role_UserProfile1_idx'); 

        // Composite Foreign Key Constraint
        $table->foreign(['UserProfile_user_id', 'UserProfile_University_id'], 'fk_user_role_UserProfile1')
            ->references(['user_id', 'University_id']) // Reference the PK columns of the parent table
            ->on('user_profile') // **CORRECTED TABLE NAME**
            ->onDelete('no action')
            ->onUpdate('no action');
            });




        // 5. VST_announcements table
        // CRITICAL FIX: Table name must not contain spaces. Changed to 'vst_announcements'.
        Schema::create('vst_announcements', function (Blueprint $table) {
            // FIX: This now matches your Model's expectation for the Primary Key.
            $table->id('announcement_id'); 
            // If you need user_id as a column, add it here, not as PK:
            // $table->integer('user_id')->nullable(); 
            
            $table->date('meeting_date');
            $table->string('meeting_location', 45);
            $table->string('meeting_details', 45);
            $table->softDeletes();
        });

        // 6. VST_attendance_records table (depends on user table - assuming session_id is primary)
        Schema::create('vst_attendance_records', function (Blueprint $table) {
            $table->integer('session_id')->primary(); 
            $table->date('training_date'); 
            $table->time('training_time');
            $table->softDeletes();
        });

        // 7. Tournaments table (depends on a_record)
        // CRITICAL FIX: This table must be created AFTER 'a_record'.
        Schema::create('tournaments', function (Blueprint $table) {
            
            // FIX HERE: Change to integer() to match a_record.swimmer_id
            $table->integer('a_record_swimmer_id')->primary();
            
            $table->date('T_date'); 
            $table->string('T_location', 45); 
            $table->string('T_event', 45); 
            // Consider precision: decimal('T_result', 8, 2)
            $table->decimal('T_result', 8, 2); 
            $table->string('T_Place', 45)->nullable(); 
            $table->softDeletes();

            // Foreign Key Constraint to a_record (which now exists)
            $table->foreign('a_record_swimmer_id')
                  ->references('swimmer_id')
                  ->on('a_record')
                  ->onUpdate('no action') 
                  ->onDelete('no action');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop tables in REVERSE order of creation to avoid foreign key issues.
        Schema::dropIfExists('tournaments');
        Schema::dropIfExists('vst_attendance_records');
        Schema::dropIfExists('vst_announcements');
        Schema::dropIfExists('user_role');
        Schema::dropIfExists('user_profile');
        Schema::dropIfExists('a_record'); 
        Schema::dropIfExists('college');  
    }
};
