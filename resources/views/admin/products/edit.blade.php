<x-backend.layout>
    @section('title')
        Edit Product: {{ ucwords($product->name) }}
    @endsection
    
   
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{route('admin.products.update', $product->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category_id" name="category_id" autocomplete="category" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach (\App\Models\Category::all() as $category)
                                <option
                                    value="{{ $category->id }}"
                                    {{ old('category_id') ?? $product->category->id == $category->id ? 'selected' : '' }}
                                >{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>
                      </div>
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            Name
                        </label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name" value="{{old('name') ?? $product->name}}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required/>
                        </div>
                    </div>
                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700">
                            Slug
                        </label>
                        <div class="mt-1">
                            <input type="text" id="slug" name="slug" value="{{old('slug') ?? $product->slug}}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required/>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update
                    </button>
                </div>
                </div>
            </form>
        </div>
  
</x-backend.layout>