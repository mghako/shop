<x-backend.layout>
    @section('title')
        Add Product:
    @endsection
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{route('admin.products.store')}}" method="POST">
                @csrf
                @method('POST')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="category_id" name="category_id" autocomplete="category" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{ucwords($category->name)}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div>
                            <x-form.input name="name" required/>
                        </div>
                        <div>
                            <x-form.input name="slug" required/>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-form.button>Add</x-form.button>
                    </div>
                </div>
            </form>
        </div>
  
</x-backend.layout>