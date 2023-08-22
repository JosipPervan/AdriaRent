<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.reservations.create') }}"
                   class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Nova Rezervacija </a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Ime i Prezime
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Broj telefona
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Datum rezervacije
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ponuda(Broj opreme)
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reservations as $reservation)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $reservation->first_name }} {{ $reservation->last_name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $reservation->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $reservation->tel_number }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $reservation->res_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $reservation->offer->name }} ({{$reservation->quantity}})
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.reservations.edit', $reservation->id) }}"
                                   class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                                <form
                                    class="px-4 py-2 bg-red-500 hover:bg-gray-700 rounded-lg text-white"
                                    method="POST"
                                    action="{{ route('admin.reservations.destroy', $reservation->id) }}"
                                    onsubmit="return confirm('Jeste li sigurni?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </div>                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
