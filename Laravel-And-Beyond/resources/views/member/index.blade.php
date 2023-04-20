<x-layout>
    <h1 class="mb-4 text-xl font-medium">Members</h1>
    <a href="{{route('home')}}" class="border rounded-md drop-shadow-lg p-1">Home</a>
    <a href="{{route('member.create')}}" class="border rounded-md drop-shadow-lg p-1">Add Member</a>
    
        @foreach($members as $member)
        <div class="w-9/12 my-4 pb-2 border-b border-b-slate-200 flex justify-between flex-row ...">
            <div>{{ $member->name }}</div>
            <div>
                <a href="{{route('member.edit', ['id' => $member->id])}}" class="border rounded-md drop-shadow-lg p-1">Edit</a>
                <a href="{{route('member.destroy', ['id' => $member->id])}}" class="border rounded-md drop-shadow-lg p-1">Delete</a>
            </div>
        </div>
        @endforeach
    
</x-layout>