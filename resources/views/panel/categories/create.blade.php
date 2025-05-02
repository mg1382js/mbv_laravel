@extends('panel.master')

@section('content')
    <h1>Create Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" required>
        
        <label for="slug">Slug</label>
        <input type="text" name="slug" required>
        
        <button type="submit">Create</button>
    </form>
@endsection
