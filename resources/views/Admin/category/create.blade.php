<x-app-layout>
<div>
    <form action="/category/post" method="post">
        @csrf
        <lable>Title for category</lable>
        <input name="title" type="text">
        <button type="submit">Submitt</button>
    </form>
</div>
</x-app-layout>

