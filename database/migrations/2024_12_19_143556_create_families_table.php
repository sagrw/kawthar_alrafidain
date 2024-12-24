<?php

use App\Models\User;
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
        Schema::create('families', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            
            $table->string('governorate'); // المحافظة
            $table->date('survay_date'); // تاريخ الاستبيان
            $table->string('deceased_name'); // اسم المتوفى
            $table->date('birth_date'); // التولد
            $table->string('academic_achievement'); // التحصيل الدراسي
            $table->string('profession'); // المهنة
            $table->date('death_date'); // تاريخ الوفاة
            $table->string('death_status'); // حالة الوفاة
            $table->string('current_residence'); // محل السكن الحالي
            $table->string('phone_number'); // هاتف
            $table->string('widowed_name'); // اسم الأرملة
            $table->date('widowed_burth_date'); // التولد
            $table->string('widowed_academic_achievement'); // التحصيل الدراسي
            $table->string('widowed_profession'); // المهنة
            $table->string('deceased_salary')->enum('نعم', 'لا'); // هل يتقاضى المتوفى راتب تقاعدي
            $table->string('deceased_salary_value'); // قيمة الراتب
            $table->string('mony_sources')->enum('نعم', 'لا'); // هل يوجد للعائة مصدر للمال
            $table->string('sources_type'); // نوع المصدر
            $table->string('mony_value'); // قيمة المال
            $table->string('family_assistance')->enum('نعم', 'لا'); // هل تحصل  العائلة على مساعدات من جهة  اخرى
            $table->string('entity_name'); // اسم الجهة
            $table->string('assistance_value'); // قيمة المساعدة
            $table->string('family_house')->enum('ملك', 'ورث', 'ايجار'); // البيت الذي تسكن فيه العائلة
            $table->string('rent_value'); // قيمة الايجار
            $table->string('renter_name'); //  المتكفل بالايجار
            $table->string('living_status')->enum('جيد', 'متوسط', 'ضعيف',  'ضعيف جدا'); // الحالة المعيشية
            $table->string('wife_living_with'); // هل الزوجة تعيش مع والدها أو مع عائلة الزوج ام تعيش على انفراد
            $table->string('family_patient')->enum('نعم', 'لا'); // هل يوجد مريض في العائلة
            $table->string('patient_name'); // اسم المريض
            $table->string('disease_type'); //  يذكر نوع المرض
            $table->string('families_in_house');  // عدد العوائل في السكن
            $table->string('orphans_family_count'); // عدد افراد   اسرة اليتيم
            $table->string('sponsored_orphans_count');  // عدد الايتام المكفولين في الاسرة
            $table->string('orphans_type')->enum('نعم', 'لا'); // هل الايتام سادة

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
