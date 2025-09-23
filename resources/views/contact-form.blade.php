<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if (session('success'))
                    <p class="text-red bg-red-300 px-2 py-2  inline-block">
                        {{ session('success') }}
                    </p>
                @endif
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-black">Contact Form</h3>
                    <div class="h-1 w-14 bg-black my-3"></div>
                    <form action="{{ route('attach.send') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 gap-4">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="w-full border-gray-800 rounded-lg "
                                        required>
                                </div>
                                <div class="">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="w-full border-gray-800 rounded-lg "
                                        required>
                                </div>
                            </div>
                            <div class="">
                                <label for="">Phone</label>
                                <input type="number" name="phone" class="w-full border-gray-800 rounded-lg "
                                    required>
                            </div>
                            <div class="">
                                <label for="">Subject</label>
                                <input type="text" name="subject" class="w-full border-gray-800 rounded-lg "
                                    required>
                            </div>
                            <div class="">
                                <label for="">Message</label>
                                <textarea name="message" id="" cols="30" rows="5"
                                    class="w-full hover:border-gray-500 border-gray-800 rounded-lg " required></textarea>
                            </div>
                            <div class="">
                                <label for="">Attachment</label>
                                <input type="file" name="file"
                                    class="w-full border-gray-800 hover:border-gray-500 rounded-lg h-10" required>
                            </div>
                            <div>
                                <button class="bg-slate-700 text-white py-2 px-5 rounded-lg hover:bg-slate-800"
                                    type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
