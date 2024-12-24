<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>family form</title>

    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
    {{-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> --}}


    <script>
        let rowCounter = 0;

        function addRow() {
            const table = document.getElementById("orphans_table");
            rowCounter++;

            const newBody = document.createElement("tbody");

            newBody.innerHTML = `
            <tr class="flex gap-6 mb-4 mr-8">
                <td>
                    <x-label for="orphans_name_${rowCounter}">اسم اليتيم ${rowCounter}:</x-label>
                    <x-input type="text" name="orphans_name_${rowCounter}" id="orphans_name_${rowCounter}" />
                </td>

                <td>
                    <x-label for="birth_date_${rowCounter}" >المواليد:</x-label>
                    <x-input type="date" name="birth_date_${rowCounter}" id="birth_date_${rowCounter}" />
                </td>

                <td>
                    <x-label for="academic_achievement_${rowCounter}" >التحصيل الدراسي:</x-label>
                    <x-input type="text" name="academic_achievement_${rowCounter}" id="academic_achievement_${rowCounter}" />
                </td>

                <td>
                    <x-label for="hobbies_${rowCounter}" >الهواية:</x-label>
                    <x-input type="text" name="hobbies_${rowCounter}" id="hobbies_${rowCounter}" />
                </td>
            </tr>

            <tr class="flex gap-6 mb-4 mr-8">
                <td>
                    <x-label for="guarantor_name_${rowCounter}" >اسم الكفيل:</x-label>
                    <x-input type="text" name="guarantor_name_${rowCounter}" id="guarantor_name_${rowCounter}" />
                </td>

                <td>
                    <x-label for="mediator_${rowCounter}" >الوسيط:</x-label>
                    <x-input type="text" name="mediator_${rowCounter}" id="mediator_${rowCounter}" />
                </td>

                <td>
                    <x-label for="bail_amount_${rowCounter}" >مبلغ الكفالة:</x-label>
                    <x-input type="text" name="bail_amount_${rowCounter}" id="bail_amount_${rowCounter}" />
                </td>

                <td>
                    <x-label for="notes_${rowCounter}" >الملاحظات:</x-label>
                    <x-input type="text" name="notes_${rowCounter}" id="notes_${rowCounter}" />
                </td>
            </tr>
            `;

            table.appendChild(newBody);
            return rowCounter;
        }
    </script>


</head>

<body class="mx-auto mt-10 max-w-6xl text-center text-slate-900" dir="rtl">

    @if (session('success'))
        <div role="alart"
            class="my-8 rounded-md border-l-4 border-green-300 bg-green-100 p-4 text-green-700 opacity-75 print:hidden">

            <p class="font-bold">تمت العملية</p>
            <p>{{ session('success') }}</p>

        </div>
    @endif

    @if (session('error'))
        <div role="alart"
            class="my-8 rounded-md border-l-4 border-red-300 bg-red-100 p-4 text-red-700 opacity-75 print:hidden">

            <p class="font-bold">حدث خطأ ما</p>
            <p>{{ session('error') }}</p>

        </div>
    @endif

    {{ $slot }}

</body>

</html>
