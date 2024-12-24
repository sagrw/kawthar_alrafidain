<x-layout>

    <x-card-body>

        <x-card-info/>

        <div class="text-md mt-10">
            <div class="flex gap-6 mb-4 w-full mr-8">
                <div class="flex gap-6">
                    <x-label>المحافظة:</x-label>
                    <x-text-show>{{ $family->governorate }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>تاريخ الاستبيان:</x-label>
                    <x-text-show>{{ $family->survay_date }}</x-text-show>
                </div>
            </div>

            <div class="flex gap-6 mb-4 mr-8">
                <div class="flex gap-6">
                    <x-label>اسم المتوفي:</x-label>
                    <x-text-show>{{ $family->deceased_name }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>التولد</x-label>
                    <x-text-show>{{ $family->birth_date }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>التحصيل الدراسي:</x-label>
                    <x-text-show>{{ $family->academic_achievement }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>المهنة:</x-label>
                    <x-text-show>{{ $family->profession }}</x-text-show>
                </div>
            </div>

            <div class="flex gap-6 mb-4 mr-8">
                <div class="flex gap-6">
                    <x-label>تاريخ الوفاة:</x-label>
                    <x-text-show>{{ $family->death_date }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>حالة الوفاة:</x-label>
                    <x-text-show>{{ $family->death_status }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>محل السكن الحالي:</x-label>
                    <x-text-show>{{ $family->current_residence }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>هاتف:</x-label>
                    <x-text-show>{{ $family->phone_number }}</x-text-show>
                </div>

            </div>

            <div class="flex gap-6 mb-4 mr-8">

                <div class="flex gap-6">
                    <x-label>اسم الأرملة:</x-label>
                    <x-text-show>{{ $family->widowed_name }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>التولد:</x-label>
                    <x-text-show>{{ $family->widowed_burth_date }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>التحصيل الدراسي:</x-label>
                    <x-text-show>{{ $family->widowed_academic_achievement }}</x-text-show>
                </div class="flex gap-6">

                <div class="flex gap-6">
                    <x-label>المهنة:</x-label>
                    <x-text-show>{{ $family->widowed_profession }}</x-text-show>
                </div>

            </div>

            <div class="flex gap-6 mb-4 mr-8">
                <div class="flex gap-6">
                    <x-label>هل يتقاضى المتوفى راتب تقاعدي:</x-label>
                    <x-text-show>{{ $family->deceased_salary }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>قيمة الراتب:</x-label>
                    <x-text-show>{{ $family->deceased_salary_value }}</x-text-show>
                </div>

            </div>

            <div class="flex gap-6 mb-4 mr-8">

                <div class="flex gap-6">
                    <x-label>هل يوجد للعائة مصدر للمال:</x-label>
                    <x-text-show>{{ $family->mony_sources }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>نوع المصدر</x-label>
                    <x-text-show>{{ $family->sources_type }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>قيمة المال:</x-label>
                    <x-text-show>{{ $family->mony_value }}</x-text-show>
                </div>

            </div>

            <div class="flex gap-6 mb-4 mr-8">

                <div class="flex gap-6">
                    <x-label>هل تحصل العائلة على مساعدات من جهة اخرى:</x-label>
                    <x-text-show>{{ $family->family_assistance }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>اسم الجهة:</x-label>
                    <x-text-show>{{ $family->entity_name }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>قيمة المساعدة:</x-label>
                    <x-text-show>{{ $family->assistance_value }}</x-text-show>
                </div>

            </div>

            <div class="flex gap-6 mb-4 mr-8">

                <div class="flex gap-6">
                    <x-label>البيت الذي تسكن فيه العائلة:</x-label>
                    <x-text-show>{{ $family->family_house }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>قيمة الايجار:</x-label>
                    <x-text-show>{{ $family->rent_value }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>المتكفل بالايجار:</x-label>
                    <x-text-show>{{ $family->renter_name }}</x-text-show>
                </div>

            </div>

            <div class="flex gap-6 mb-4 mr-8">

                <div class="flex gap-6">
                    <x-label>الحالة المعيشية:</x-label>
                    <x-text-show>{{ $family->living_status }}</x-text-show>
                </div>

            </div>

            <div class="flex gap-6 mb-4 mr-8">

                <div class="flex gap-6">
                    <x-label>هل الزوجة تعيش مع والدها أو مع عائلة الزوج ام تعيش على انفراد:</x-label>
                    <x-text-show>{{ $family->wife_living_with }}</x-text-show>
                </div>

            </div>

            <div class="flex gap-6 mb-4 mr-8">

                <div class="flex gap-6">
                    <x-label>هل يوجد مريض في العائلة:</x-label>
                    <x-text-show>{{ $family->family_patient }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>اسم المريض:</x-label>
                    <x-text-show>{{ $family->patient_name }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>يذكر نوع المرض:</x-label>
                    <x-text-show>{{ $family->disease_type }}</x-text-show>
                </div>

            </div>

            <div class="flex gap-6 mb-4 mr-8">

                <div class="flex gap-6">
                    <x-label>عدد العوائل في السكن:</x-label>
                    <x-text-show>{{ $family->families_in_house }}</x-text-show>
                </div>

            </div>

            <div class="flex gap-6 mb-4 mr-8">

                <div class="flex gap-6">
                    <x-label>عدد افراد اسرة اليتيم:</x-label>
                    <x-text-show>{{ $family->orphans_family_count }}</x-text-show>
                </div>

                <div class="flex gap-6">
                    <x-label>عدد الايتام المكفولين في الاسرة:</x-label>
                    <x-text-show>{{ $family->sponsored_orphans_count }}</x-text-show>
                </div>

            </div>

            <div class="flex gap-6 mb-4 mr-8">

                <div class="flex gap-6">
                    <x-label>هل الايتام سادة:</x-label>
                    <x-text-show>{{ $family->orphans_type }}</x-text-show>
                </div>

            </div>

            <div class="relative flex flex-col text-black bg-white shadow-md rounded-xl bg-clip-border">
                <table class="text-center table-auto min-w-max">
                    <thead>
                        <tr>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    اسم اليتيم
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    المواليد
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    التحصيل الدراسي
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    الهواية
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    اسم الكفيل
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    الوسيط
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    مبلغ الكفالة
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    الملاحظات
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orphans as $orphan)
                            <tr>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $orphan->name }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $orphan->birth_date }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $orphan->academic_achievement }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $orphan->hobbies }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $orphan->guarantor_name }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $orphan->mediator }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $orphan->bail_amount }}
                                    </p>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                        {{ $orphan->notes }}
                                    </p>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                <table>
                    <tr>
                        <td><p class="mb-4 mr-8 text-start">اتعهد بصحة المعلومات اعلاه</p></td>
                        <td><p class="mb-4 mr-60 text-start">التوقيع:</p></td>
                    </tr>
                    
                    <tr>
                        <td><p class="mb-4 mr-8 text-start">منظم الاستمارة:</p></td>
                        <td><p class="mb-4 mr-60 text-start">مدير المنظمة:</p></td>
                    </tr>
                </table>
            </div>

            <x-button onClick="window.print()" class="print:hidden" id="print">طباعة</x-button>


        </div>
    </x-card-body>

</x-layout>
