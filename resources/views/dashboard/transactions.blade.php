<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <div class="py-2 px-4 rounded-md bg-green-50 text-green-700 my-3">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table-auto w-full mt-4">
                        <thead class="bg-gray-100 h-8">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($transactions as $transaction)
                                <tr>
                                    <td align="center">{{ $loop->iteration }}</td>
                                    <td>{{ $transaction->name }}</td>
                                    <td>{{ $transaction->email }}</td>
                                    <td>Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                                    <td>{{ $transaction->status }}</td>
                                    <td align="center">
                                        <a href="/dashboard/transactions/{{ $transaction->id }}" class="bg-blue-500 text-white font-semibold py-1 inline-block rounded-sm px-3 hover:bg-blue-700">Detail</a>
                                        <form action="/dashboard/transactions/{{ $transaction->id }}" method="post" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white font-semibold py-1 rounded-sm px-3 hover:bg-red-700">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
