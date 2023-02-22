<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Store New Skill
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8 shadow-md rounded-md bg-white">
            @if ($errors->any())
                <div class="text-red-500 py-2 px-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="p-4" method="POST" action="{{ route('skills.store') }}" enctype="multipart/form-data">
                {{-- enctype html attribute cause we have to upload image in form --}}
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" autofocus />
                </div>

                <!-- Image -->
                <div class="mt-4">
                    <x-input-label for="image" :value="__('Image')" />

                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" />
                </div>
                <div class="flex items-center justify-end mt-4 ">
                    <x-primary-button class="ml-3">
                        Store
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
