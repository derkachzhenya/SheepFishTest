@extends('layouts.base')
@section('content')
    <div class="container mt-3 col-6 ">
        <div class="text-center">
            <h5>{{ __('Create company') }}</h5>
        </div>
        <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input type="text" name="name" class="form-control" id="name">
                @error('name')
                    <div class="text-danger">{{ __('You have not filled in your Name *') }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">{{ __('Address') }}</label>
                <input type="text" name="address" class="form-control" id="address">
                @error('address')
                    <div class="text-danger">{{ __('You have not filled in your Address *') }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input type="email" name="email" class="form-control" id="email">
                @error('email')
                    <div class="text-danger">{{ __('You have not filled in your Email *') }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">{{ __('Website') }}</label>
                <input type="text" name="website" class="form-control" id="website">
                @error('website')
                    <div class="text-danger">{{ __('You have not filled in your Website *') }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" name="image" type="file" id="formFile" data-browse="Choose File">
            </div>
            
            

            <button type="submit" class="btn btn-primary mb-3">{{ __('Create') }}</button>
        </form>

    </div>
@endsection
