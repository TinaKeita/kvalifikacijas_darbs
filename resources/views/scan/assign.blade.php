<h2>Select Your Name</h2>

<form method="POST">
    @csrf

    <select name="user_id" required>
        @foreach($members as $member)
            <option value="{{ $member->id }}">
                {{ $member->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">Assign</button>
</form>
