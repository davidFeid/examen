@extends('layouts.app')

@section('template_title')
    {{ $pet->name ?? "{{ __('Show') Pet" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pet</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pets.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nick:</strong>
                            {{ $pet->nick }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $pet->name }}
                        </div>
                        <div class="form-group">
                            <strong>Dog Breed:</strong>
                            {{ $pet->dog_breed }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $pet->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $pet->age }}
                        </div>
                        <div class="form-group">
                            <strong>Human Name:</strong>
                            {{ $pet->human_name }}
                        </div>
                        <div class="form-group">
                            <strong>Tel:</strong>
                            {{ $pet->tel }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $pet->image }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
