<x-layout>

    <x-add-card :user="$user" />

    <x-card-body>
        <table class="container">
            <thead>
                <tr>
                    <th>اسم المتوفي</th>
                    <th>التولد</th>
                    <th>تاريخ الاستبيان</th>
                    <th></th>
                </tr>

                <tr class="mt-4">
                    <td colspan="4">
                        <div class="border rounded-lg mt-2 mb-4 mx-2"></div>
                    </td>
                </tr>

            </thead>

            <tbody>
                @forelse ($families as $family)
                    <tr>
                        <x-table-data>{{ $family->deceased_name }}</x-table-data>

                        <x-table-data>{{ $family->birth_date }}</x-table-data>

                        <x-table-data>{{ $family->survay_date }}</x-table-data>

                        <td>
                            <div class="flex justify-center">
                                <a href="{{ route('families.show', ['family' => $family]) }}" name="show"
                                    class="text-blue-500 mr-8 ml-4 hover:text-blue-400">عرض الاستمارة</a>
                            </div>

                        </td>
                    </tr>

                    @if (!$loop->last)
                        <tr>
                            <td colspan="4">
                                <div class="border-2 rounded-full m-2 border-gray-200"></div>
                            </td>
                        </tr>
                    @endif

                @empty
                    <tr>
                        <td colspan="3">
                            <x-not-found>لا يوجد استمارات</x-not-found>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </x-card-body>

</x-layout>
