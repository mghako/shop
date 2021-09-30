<x-backend.layout>
    @section('title')
        Products List
    @endsection
    @section('addData')
        <x-form.link href="{{ route('admin.products.create') }}" :btn="'primary'">Add Product</x-form.link>
    @endsection
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg space-y-6">
                    <div class="flex justify-end align-middle">
                        <div>
                            <form action="{{ route('admin.products.index') }}" method="GET">
                                <input type="text" name="search" value="{{ request('search') }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 sm:text-sm border border-gray-300 rounded-md">
                            </form>
                        </div>
                        <div class="mr-2 pt-1">
                            <x-form.link href="{{route('admin.products.index')}}" :btn="'default'">Reset</x-form.link>
                        </div>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Slug
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Category
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($products as $product)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                    {{$product->name}}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$product->slug}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    {{$product->category->name}}
                                    </span>
                                </td>
                                </td>
                                <td class="flex align-middle px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-4">
                                    <x-form.link href="{{route('admin.products.edit', $product->id)}}" :btn="'warning'">Edit</x-form.link>
                                    <form action="{{route('admin.products.destroy', $product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="uppercase inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="my-6">
                    {{ $products->links()}}
                </div>
            </div>
        </div>
    </div>
  
</x-backend.layout>