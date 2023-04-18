<x-layout>
    <h1>Members</h1>
    <a href="{{route('member.create')}}">Add Member</a>
    <p>
        @foreach($members as $member)
            $member->name();
        @endforeach;
    </p>
</x-layout>