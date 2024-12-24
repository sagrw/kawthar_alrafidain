<x-layout>
    <form action="{{ route('orphans.store', [$orphansCount, $family]) }}" method="POST">
        @csrf
        @method('POST')

        @for ($i = 1; $i <= $orphansCount; $i++)
            <div class="mb-10">
                <div class="flex gap-6 mb-4 mr-8">
                    <div>
                        <x-label for="orphans_name_{{ $i }}">اسم اليتيم {{ $i }}:</x-label>
                        <x-input type="text" name="orphans_name_{{ $i }}"
                            id="orphans_name_{{ $i }}" />
                    </div>

                    <div>
                        <x-label for="birth_date_{{ $i }}">المواليد:</x-label>
                        <x-input type="date" name="birth_date_{{ $i }}"
                            id="birth_date_{{ $i }}" />
                    </div>

                    <div>
                        <x-label for="academic_achievement_{{ $i }}">التحصيل الدراسي:</x-label>
                        <x-input type="text" name="academic_achievement_{{ $i }}"
                            id="academic_achievement_{{ $i }}" />
                    </div>

                    <div>
                        <x-label for="hobbies_{{ $i }}">الهواية:</x-label>
                        <x-input type="text" name="hobbies_{{ $i }}" id="hobbies_{{ $i }}" />
                    </div>
                </div>

                <div class="flex gap-6 mb-4 mr-8">
                    <div>
                        <x-label for="guarantor_name_{{ $i }}">اسم الكفيل:</x-label>
                        <x-input type="text" name="guarantor_name_{{ $i }}"
                            id="guarantor_name_{{ $i }}" />
                    </div>

                    <div>
                        <x-label for="mediator_{{ $i }}">الوسيط:</x-label>
                        <x-input type="text" name="mediator_{{ $i }}"
                            id="mediator_{{ $i }}" />
                    </div>

                    <div>
                        <x-label for="bail_amount_{{ $i }}">مبلغ الكفالة:</x-label>
                        <x-input type="text" name="bail_amount_{{ $i }}"
                            id="bail_amount_{{ $i }}" />
                    </div>

                    <div>
                        <x-label for="notes_{{ $i }}">الملاحظات:</x-label>
                        <x-input type="text" name="notes_{{ $i }}" id="notes_{{ $i }}" />
                    </div>
                </div>

            </div>
        @endfor

        <x-button>حفظ</x-button>
    </form>
</x-layout>
