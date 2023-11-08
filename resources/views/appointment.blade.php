<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Request Patient') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Information
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Date Request
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $item)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium w-5/12 text-gray-900 dark:text-white">
                                            <p>{{ $item->user->name }}</p>
                                            <p>{{ $item->user->identity_id }}</p>
                                            <p>Address : {{ $item->user->address }}</p>
                                        </th>
                                        <td class="px-6 py-4 text-gray-950 text-center">
                                            <div class="flex flex-row">
                                                <div class="basis-2/4">Date</div>
                                                <div class="basis-2/4">Time</div>
                                            </div>
                                            <div class="flex flex-row">
                                                <div class="basis-2/4">8/11/2023</div>
                                                <div class="basis-2/4">09:30</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 flex justify-center">
                                            <button type="button"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</button>
                                            <a href="{{ route('appointmentweb.edit', $item->id) }}"
                                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 ml-5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Process</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
