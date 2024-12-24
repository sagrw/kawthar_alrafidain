<x-layout>

    <x-card-info />

    <div class="border rounded-lg mt-2 mb-4 mx-2"></div>

    <div class="text-md mb-4 mt-10">
        <form action="{{ route('families.store') }}" method="POST">
            @csrf
            @method('POST')

            <div>
                <div class="flex gap-6 mb-6 mr-8 items-end">
                    <div>
                        <x-label for="governorate">المحافظة:</x-label>
                        <x-input type="text" name="governorate" id="governorate" />
                    </div>

                    <div>
                        <x-label for="survay_date">تاريخ الاستبيان:</x-label>
                        <x-input type="date" name="survay_date" id="survay_date" />
                    </div>
                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">
                    <div>
                        <x-label for="deceased_name">اسم المتوفي:</x-label>
                        <x-input type="text" name="deceased_name" id="deceased_name" />
                    </div>

                    <div>
                        <x-label for="birth_date">التولد:</x-label>
                        <x-input type="date" name="birth_date" id="birth_date" />
                    </div>

                    <div>
                        <x-label for="academic_achievement">التحصيل الدراسي:</x-label>
                        <x-input type="text" name="academic_achievement" id="academic_achievement" />
                    </div>

                    <div>
                        <x-label for="profession">المهنة:</x-label>
                        <x-input type="text" name="profession" id="profession" />
                    </div>
                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">
                    <div>
                        <x-label for="death_date">تاريخ الوفاة:</x-label>
                        <x-input type="date" name="death_date" id="death_date" />
                    </div>

                    <div>
                        <x-label for="death_status">حالة الوفاة:</x-label>
                        <x-input type="text" name="death_status" id="death_status" />
                    </div>

                    <div>
                        <x-label for="current_residence">محل السكن الحالي:</x-label>
                        <x-input type="text" name="current_residence" id="current_residence" />
                    </div>

                    <div>
                        <x-label for="phone_number">هاتف:</x-label>
                        <x-input type="text" name="phone_number" id="phone_number" />
                    </div>

                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">

                    <div>
                        <x-label for="widowed_name">اسم الأرملة:</x-label>
                        <x-input type="text" name="widowed_name" id="widowed_name" />
                    </div>

                    <div>
                        <x-label for="widowed_burth_date">التولد:</x-label>
                        <x-input type="date" name="widowed_burth_date" id="widowed_burth_date" />
                    </div>

                    <div>
                        <x-label for="widowed_academic_achievement">التحصيل الدراسي:</x-label>
                        <x-input type="text" name="widowed_academic_achievement" id="widowed_academic_achievement" />
                    </div>

                    <div>
                        <x-label for="widowed_profession">المهنة:</x-label>
                        <x-input type="text" name="widowed_profession" id="widowed_profession" />
                    </div>

                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">
                    <div>
                        <x-label for="deceased_salary">هل يتقاضى المتوفى راتب تقاعدي:</x-label>
                        <x-input type="text" name="deceased_salary" id="deceased_salary" />
                    </div>

                    <div>
                        <x-label for="deceased_salary_value">قيمة الراتب:</x-label>
                        <x-input type="text" name="deceased_salary_value" id="deceased_salary_value" />
                    </div>

                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">

                    <div>
                        <x-label for="mony_sources">هل يوجد للعائة مصدر للمال:</x-label>
                        <x-input type="text" name="mony_sources" id="mony_sources" />
                    </div>

                    <div>
                        <x-label for="sources_type">نوع المصدر</x-label>
                        <x-input type="text" name="sources_type" id="sources_type" />
                    </div>

                    <div>
                        <x-label for="mony_value">قيمة المال:</x-label>
                        <x-input type="text" name="mony_value" id="mony_value" />
                    </div>

                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">

                    <div>
                        <x-label for="family_assistance">هل تحصل العائلة على مساعدات من جهة اخرى:</x-label>
                        <x-input type="text" name="family_assistance" id="family_assistance" />
                    </div>

                    <div>
                        <x-label for="entity_name">اسم الجهة:</x-label>
                        <x-input type="text" name="entity_name" id="entity_name" />
                    </div>

                    <div>
                        <x-label for="assistance_value">قيمة المساعدة:</x-label>
                        <x-input type="text" name="assistance_value" id="assistance_value" />
                    </div>

                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">

                    <div>
                        <x-label for="family_house">البيت الذي تسكن فيه العائلة:</x-label>
                        <x-input type="text" name="family_house" id="family_house" />
                    </div>

                    <div>
                        <x-label for="rent_value">قيمة الايجار:</x-label>
                        <x-input type="text" name="rent_value" id="rent_value" />
                    </div>

                    <div>
                        <x-label for="renter_name">المتكفل بالايجار:</x-label>
                        <x-input type="text" name="renter_name" id="renter_name" />
                    </div>

                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">

                    <div>
                        <x-label for="living_status">الحالة المعيشية:</x-label>
                        <x-input type="text" name="living_status" id="living_status" />
                    </div>

                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">

                    <div>
                        <x-label for="wife_living_with">هل الزوجة تعيش مع والدها أو مع عائلة الزوج ام تعيش على
                            انفراد:</x-label>
                        <x-input type="text" name="wife_living_with" id="wife_living_with" />
                    </div>

                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">

                    <div>
                        <x-label for="family_patient">هل يوجد مريض في العائلة:</x-label>
                        <x-input type="text" name="family_patient" id="family_patient" />
                    </div>

                    <div>
                        <x-label for="patient_name">اسم المريض:</x-label>
                        <x-input type="text" name="patient_name" id="patient_name" />
                    </div>

                    <div>
                        <x-label for="disease_type">يذكر نوع المرض:</x-label>
                        <x-input type="text" name="disease_type" id="disease_type" />
                    </div>

                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">

                    <div>
                        <x-label for="families_in_house">عدد العوائل في السكن:</x-label>
                        <x-input type="text" name="families_in_house" id="families_in_house" />
                    </div>

                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">

                    <div>
                        <x-label for="orphans_family_count">عدد افراد اسرة اليتيم:</x-label>
                        <x-input type="text" name="orphans_family_count" id="orphans_family_count" />
                    </div>

                    <div>
                        <x-label for="sponsored_orphans_count">عدد الايتام المكفولين في الاسرة:</x-label>
                        <x-input type="text" name="sponsored_orphans_count" id="sponsored_orphans_count" />
                    </div>

                </div>

                <div class="flex gap-6 mb-4 mr-8 items-end">

                    <div>
                        <x-label for="orphans_type">هل الايتام سادة:</x-label>
                        <x-input type="text" name="orphans_type" id="orphans_type" />
                    </div>

                    <div>
                        <x-label for="orphans_count">عدد الايتام:</x-label>
                        <x-input type="number" name="orphans_count" id="orphans_count" />
                    </div>

                </div>

                <x-button>اضافة ايتام</x-button>
            </div>
        </form>
    </div>

</x-layout>
