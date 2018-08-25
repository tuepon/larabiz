@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard<span class="pull-right"><a href="/listings/create" class="btn btn-success">Add Listing</a></span></div>

            <div class="card-body">
                <h3>Your Listings</h3>
                @if(count($listings))
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($listings as $listing)
                            <tr>
                                <td>{{$listing->name}}</td>
                                <td><a class="pull-right btn btn-light" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                                <td></td>                               
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
