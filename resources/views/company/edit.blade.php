@extends('layouts.base')
@section('content')
    <div class="container col-8 mt-3 ">

        <form action="{{ route('company.update', $company->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Edit name company') }}</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $company->name }}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">{{ __('Edit address') }}</label>
                <input type="text" name="address" class="form-control" id="address" value="{{ $company->address }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Edit email') }}</label>
                <input type="text" name="email" class="form-control" id="email" value="{{ $company->email }}">
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">{{ __('Edit website') }}</label>
                <input type="text" name="website" class="form-control" id="website" value="{{ $company->website }}">
            </div>

            <button type="submit" class="btn btn-primary mb-3">{{ __('Edit') }}</button>
        </form>


    </div>
@endsection
