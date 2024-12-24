<x-layout>
    <div>
        <div class="mb-8 font-semibold text-xl text slate-900">
            تسجيل الدخول
        </div>

        <form action="{{ route('login.store') }}" method="POST">
            @csrf

            <table class="mx-auto">
                <tr>
                    <td>
                        <x-label for="email">البريد الالكتروني</x-label>
                        <x-input type="text" name="email" id="email" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <x-label for="password">كلمة المرور</x-label>
                        <x-input type="password" name="password" id="password" />
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="flex justify-center mt-2">
                            <input type="checkbox" name="remember" id="remember">
                            <p class="text-md font-medium mr-1">تذكر كلمة المرور</p>
                        </div>
                    </td>
                </tr>
            </table>

            <x-button>
                تسجيل دخول
            </x-button>
        </form>
    </div>

</x-layout>
