@extends('panel.master')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" required>
        
        <label for="slug">Slug</label>
        <input type="text" name="slug" required>
        
        <label for="number">Number</label>
        <input type="number" name="number" required>
        
        <label for="category_id">Category</label>
        <select name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        
        <label for="price">Price</label>
        <input type="text" name="price" required>
        
        <button type="submit">Create</button>
    </form>
@endsection
