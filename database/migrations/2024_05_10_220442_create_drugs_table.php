<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('registration_number')->nullable();
            $table->text('composition')->nullable();
            $table->text('dose')->nullable();
            $table->text('indication')->nullable();
            $table->text('description')->nullable();
            $table->text('adverse_drug_reaction')->nullable();
            $table->json('tags')->nullable();

            $table->fullText(['name', 'composition', 'description']);

            $table->foreignId('drug_classification_id')->nullable();
            $table->foreign('drug_classification_id')->references('id')->on('drug_classifications');
            $table->foreignId('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('drugs');
    }
};
