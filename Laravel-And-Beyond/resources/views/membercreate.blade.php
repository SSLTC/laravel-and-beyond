<x-layout>
    <h1>Add Member</h1>
    <form action="/member/store" method="post">
        @csrf
        <label for="fullName">Full name:</label>
        <input type="text" name="name" id="fullName" value="{{old('name')}}">
        <input type="submit" value="Add">
    </form>
</x-layout>