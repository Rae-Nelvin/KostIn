<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button
        class="py-2 px-4 font-medium text-base w-full text-left text-[#7C7C7C] hover:bg-red-500 hover:text-white transition-colors duration-300 ease-in-out rounded-md">
        Sign out
    </button>
</form>