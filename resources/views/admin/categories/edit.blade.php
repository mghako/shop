<x-backend.layout>
    @section('title')
        Edit Category: {{$category->name}}
    @endsection
    
   
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{route('admin.categories.update', $category->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        
                    <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        Name
                    </label>
                    <div class="mt-1">
                        <input type="text" id="name" name="name" value="{{$category->name}}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required/>
                    </div>
                    </div>
                    <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700">
                        Slug
                    </label>
                    <div class="mt-1">
                        <input type="text" id="slug" name="slug" value="{{$category->slug}}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" required/>
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