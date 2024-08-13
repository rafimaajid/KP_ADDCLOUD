<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <a href="/dashboard/products/add" class="bg-blue-500 text-white font-semibold py-1 inline-block rounded-sm px-3 hover:bg-blue-700 mb-4">Add Product</a>
                    
                    @if (session('success'))
                        <div class="py-2 px-4 rounded-md bg-green-50 text-green-700 my-3">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <table class="table-auto w-full mt-4">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td align="center">
                                        <img src="{{ asset('storage/'. $product->image) }}" alt="{{ $product->name }}" class="w-12 h-12 object-contain mx-auto">
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td align="center">
                                        <div class="flex flex-col md:flex-row justify-center gap-2">
                                            <a href="/dashboard/products/{{ $product->id }}" class="bg-blue-500 text-white font-semibold py-1 rounded-sm px-3 hover:bg-blue-700">Detail</a>
                                            <a href="/dashboard/products/{{ $product->id }}/edit" class="bg-green-500 text-white font-semibold py-1 rounded-sm px-3 hover:bg-green-700">Edit</a>
                                            <form action="/dashboard/products/{{ $product->id }}" method="post" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 text-white font-semibold py-1 rounded-sm px-3 hover:bg-red-700">Delete</button>
                                            </form>
                                        </div>
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
