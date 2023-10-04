@extends('admin.layouts.app')

@section('title', 'Create Book')

@section('option-title', 'Create Book')

@section('content')
<div class="form" style="margin-top: 3em">
  @include('admin.includes.success')
  <form method="POST" action="{{route('books.store')}}">
    @csrf
    <div class="form-header">
      <h2>create book</h2>
    </div>
    <div class="form-body">
      <div class="input-group">
        <label for="name">name</label>
        @if ($errors->has('name'))
        <span class="error-msg">{{$errors->first('name')}}</span>
        @endif
        <input type="text" autofocus name="name" id="name" placeholder="Enter name..." value="{{old('name')}}" />
      </div>
      <div class="input-group">
        <label for="unit_price">Unit Price</label>
        @if ($errors->has('unit_price'))
        <span class="error-msg">{{$errors->first('unit_price')}}</span>
        @endif
        <input type="text" name="unit_price" id="unit_price" placeholder="Enter unit price..."
          value="{{old('unit_price')}}" />
      </div>
      <div class="input-group">
        <label for="author_name">Author Name</label>
        @if ($errors->has('author_name'))
        <span class="error-msg">{{$errors->first('author_name')}}</span>
        @endif
        <input type="text" name="author_name" id="author_name" placeholder="Enter author name..."
          value="{{old('author_name')}}" />
      </div>
    </div>
    <div class="form-footer">
      <button type="submit">Create</button>
    </div>
  </form>
</div>
@endsection