@extends('layout')

{{-- The Section that you want to inject in the layout page--}}
@section('content')

<div class="content">
    <br/>
    <div class="card">
        <div class="card-body">
            <h1>Welcome to "My Book Collection!"</h1>
        </div>
    </div>
    <br/>

    <form action="/" method="POST"  class="">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Author's:</span>
            </div>
            <input type="text" name="firstName" class="form-control" placeholder="First Name">
            <input type="text" name="lastName" class="form-control" placeholder="Last Name">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Book's:</span>
            </div>
            <input type="text" name="bookTitle" class="form-control" placeholder="Title">
            <input type="text" name="releaseDate" class="form-control" placeholder="Release Date">
        </div>



        <button type="submit">Add Book</button>

        {{--Validation for cross-origin--}}
        @csrf
    </form>


    <div class="container">
        <h2>My collection</h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Author</th>
                    <th>Book</th>
                    <th>Release Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->name }}</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection

