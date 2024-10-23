<x-app-layout>
<div class="px-8">
    <a href="/category"><button>Add new</button></a>
    <div>
    
        <table class="w-full mt-2" id="Category">
                <thead>
                    <tr class=" border-t border-b border-slate-300">
                        <th class="py-1 text-slate-500 text-sm  px-2 font-normal border-r border-slate-300">Category</th>
                        <th class="py-1 text-slate-500 text-sm  px-2 font-normal border-r border-slate-300">Total product</th>
                        <th class="py-1 text-slate-500 text-sm  px-2 font-normal border-r border-slate-300">Action</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $categories)
                    <tr class="border-t border-b border-slate-300">
                        <td class="text-center text-slate-900 py-1 text-sm border-r border-slate-300 ">{{$categories->title}}</td>
                        <td class="text-center text-slate-900 py-1 text-sm border-r border-slate-300 "> </td>
                        <td class="py-1">
                            <div class="flex justify-center  ">
                                <a href="/category/edit/{{$categories->id}}"> Edit</a>

                                <form action="/category/delete/{{$categories->id}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Delete</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            
        </table>
    </div>
</div>
</x-app-layout>