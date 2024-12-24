<?php

use App\Models\Family;
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
        Schema::create('orphans', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Family::class);

            $table->string('name'); // اسم اليتيم
            $table->string('birth_date'); // المواليد
            $table->string('academic_achievement'); // التحصيل الدراسي
            $table->string('hobbies'); // الهواية
            $table->string('guarantor_name'); // اسم الكفيل
            $table->string('mediator'); // الوسيط
            $table->string('bail_amount'); // مبلغ الكفالة
            $table->string('notes'); //  الملاحظات

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orphans');
    }
};
