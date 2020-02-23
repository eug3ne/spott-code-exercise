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
            <input type="text" name="firstName" class="form-control" placeholder="First Name"/>
            <input type="text" name="lastName" class="form-control" placeholder="Last Name"/>
            <input type="text" name="age" class="form-control" placeholder="Age"/>
            <input type="text" name="address" class="form-control" placeholder="Address"/>
        </div>

        <!-- Books' validation errors -->
        @if(!empty($errors->first()))
            <div class="alert alert-danger" role="alert">
                <li>{{ $errors->first('address') }}</li>
                <li>{{ $errors->first('releaseDate') }}</li>
            </div>
        @endif
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Book's:</span>
            </div>
            <input type="text" name="bookTitle" class="form-control" placeholder="Title"/>
            <input type="text" name="releaseDate"  class="form-control" placeholder="Release Date"/>
        </div>

        <button type="submit" class="btn btn-outline-success">Add Book</button>

        {{--Validation for cross-origin--}}
        @csrf
    </form>

    <br/>

    <p>
        <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Show Collection
        </button>
        <button class="btn btn-info" type="button">
            Refresh
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">

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

</div>

@endsection

