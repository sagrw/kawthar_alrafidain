<div class="flex justify-between items-start mb-8">
    <div class="flex space-x-3">

        <a href="{{ route('families.create') }}"
            class="flex items-center border border-blue-50 rounded-md px-1 py-0.5 shadow-sm bg-gray-100 ml-2 hover:bg-gray-300">

            <p class="ml-1 text-slate-900">اضافة استمارة</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path
                    d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
            </svg>
        </a>

    </div>

    <div>
        <div>
            <form action="{{ route('login.destroy', $user) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-sm font-semibold text-slate-900 hover:text-red-400">تسجيل خروج</button>
            </form>
        </div>
    </div>
</div>
