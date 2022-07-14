<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('sender_contact')->nullable();
            $table->foreignId('receiver_user_id')->nullable();
            $table->foreignId('organisation_id')->nullable();
            $table->foreignId('job_id')->nullable();
            $table->string('interview_status')->default('yet interviewed');
            $table->dateTime('date_of_interview')->nullable();
            $table->longText('invitation_note')->nullable();
            $table->longText('employer_interview_note')->nullable();
            $table->longText('jobseeker_post_interview_review')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('invitations');
    }
}
