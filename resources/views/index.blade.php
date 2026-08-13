@extends('layouts.app')

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div style="margin-bottom:20px;">
    <a href="{{ route('students.create') }}">
        <button class="btn-update">ADD STUDENT</button>
    </a>
</div>

<table>
    <thead>
        <tr>
            <th>Bil</th>
            <th>Name</th>
            <th>CGPA</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>

    @php
        $num = ($students->currentPage()-1) * $students->perPage() + 1;
    @endphp

    @forelse($students as $student)

    <tr>
        <td>{{ $num++ }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->cgpa }}</td>

        <td>
            <button class="btn-update">
                <a href="{{ route('students.edit',$student->id) }}">UPDATE</a>
            </button>
        </td>

        <td>
            <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn-delete"
                    onclick="return confirm('Delete this record?')">
                    DELETE
                </button>
            </form>
        </td>

    </tr>

    @empty

    <tr>
        <td colspan="5" style="text-align:center;padding:20px;">
            No Student Found
        </td>
    </tr>

    @endforelse

    </tbody>
</table>

<div class="pagination-container">
    {{ $students->links() }}
</div>

@endsection 