@extends('layouts.app')

@section('template_title')
    Pet
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pet') }}
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Nick</th>
										<th>Name</th>
										<th>Dog Breed</th>
										<th>Gender</th>
										<th>Age</th>
										<th>Human Name</th>
										<th>Tel</th>
										<th>Image</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pets as $pet)
                                        <tr>
											<td>{{ $pet->nick }}</td>
											<td>{{ $pet->name }}</td>
											<td>{{ $pet->dog_breed }}</td>
											<td>{{ $pet->gender }}</td>
											<td>{{ $pet->age }}</td>
											<td>{{ $pet->human_name }}</td>
											<td>{{ $pet->tel }}</td>
                                            <td><img src="/images/{{ $pet->image }}" width="100px"></td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
