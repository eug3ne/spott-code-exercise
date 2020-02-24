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
        <!-- Books' validation errors -->
        @if(!empty($errors->first()))
            <div class="alert alert-danger" role="alert">
                <li>{{ $errors->first('firstName') }}</li>
                <li>{{ $errors->first('lastName') }}</li>
                <li>{{ $errors->first('age') }}</li>
                <li>{{ $errors->first('address') }}</li>
            </div>
        @endif
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
            <input type="text" name="releaseDate"  class="form-control" placeholder="Release Date in YYYY-MM-DD"/>
        </div>

        <button type="submit" class="btn btn-outline-success">Add Book</button>

        {{--Validation for cross-origin--}}
        @csrf
    </form>

    <br/><hr>

    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-outline-secondary float-right" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Show All
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <a href="{{ url('r') }}" class="btn btn-info float-right" type="button">
                        Refresh
                    </a>

                    <h2>My Collection</h2>
                    <table id="table" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Author</th>
                            <th>Book</th>
                            <th>Release Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($collection as $datum)
                            <tr>
                                <td>{{ $datum->name }}</td>
                                <td>{{ $datum->title }}</td>
                                <td>{{ $datum->release_date }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

