<x-layout>
    <h1 class="mb-4 text-xl font-medium">Add Member</h1>
    <form action="/member/store" method="post">
        @csrf
        <label for="fullName">Full name:</label>
        <input type="text" name="name" id="fullName" class="border-b-4" value="{{old('name')}}"><br/>
        <input type="submit" value="Add" class="my-4 border rounded-md drop-shadow-lg p-0.5">
        <a href="{{route('home')}}" class="border rounded-md drop-shadow-lg p-1">Cancel</a>
    </form>
</x-layout>