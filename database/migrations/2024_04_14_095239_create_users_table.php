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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_image', 255)->nullable();
            $table->unsignedBigInteger('first_name_id');
            $table->unsignedBigInteger('middle_name_id');
            $table->unsignedBigInteger('last_name_id');
            $table->unsignedBigInteger('suffix_name_id');
            $table->integer('age');
            $table->date('birth_date');
            $table->unsignedBigInteger('gender_id');
            $table->string('address', 55);
            $table->string('contact_number', 55);
            $table->string('email_address', 55);
            $table->string('username', 55)->unique();
            $table->string('password', 255);
            $table->unsignedBigInteger('role_id');
            $table->tinyInteger('is_online')->default(0);
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();

            $table->foreign('first_name_id')
                ->references('first_name_id')
                ->on('first_names')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('middle_name_id')
                ->references('middle_name_id')
                ->on('middle_names')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('last_name_id')
                ->references('last_name_id')
                ->on('last_names')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('suffix_name_id')
                ->references('suffix_name_id')
                ->on('suffix_names')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('gender_id')
                ->references('gender_id')
                ->on('genders')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('role_id')
                ->on('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
