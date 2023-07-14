@extends('layout')

@section('title')
    Review
@endsection

@section('main_content')
    <h1>Add review</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action='/review/check' class='mb-3'>
        @csrf
        <input type="email" name="email" id="email" placeholder="Email" class="form-control" /><br>
        <input type="text" name="title" id="title" placeholder="Title" class="form-control" /><br>
        <textarea name="text" id="text" placeholder="Review" class="form-control"></textarea><br>
        <button class="btn btn-primary" type="submit" >Submit</button>
    </form>

    <h1>All reviews:</h1>
    @foreach ($reviews as $item)
        <div class="alert alert-warning">
            <h3>{{ $item->title }}</h3>
            <b>{{ $item-> email }}</b>
            <p>{{ $item->text }}</p>
        </div>
    @endforeach
@endsection