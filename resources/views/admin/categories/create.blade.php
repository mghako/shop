<x-backend.layout>
    @section('title')
        Add Category:
    @endsection
    
   
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{route('admin.categories.store')}}" method="POST">
                @csrf
                @method('POST')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
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