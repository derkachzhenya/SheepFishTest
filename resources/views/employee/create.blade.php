@extends('layouts.base')
@section('content')
    <div class="container mt-3 col-6 ">
        <div class="text-center">
            <h5>{{ __('Create employee') }}</h5>
        </div>
        <form action="{{ route('employee.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="first_name" class="form-label">{{ __('First name') }}</label>
                <input type="text" name="first_name" class="form-control" id="first_name">
                @error('first_name')
                    <div class="text-danger">{{ __('You have not filled in your First name*') }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">{{ __('Last name') }}</label>
                <input type="text" name="last_name" class="form-control" id="last_name">
                @error('last_name')
                    <div class="text-danger">{{ __('You have not filled in your Last name *') }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">{{ __('Company') }}</label>
                <select class="form-select" name="company_id" aria-label="Default select example">
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input type="email" name="email" class="form-control" id="email">
                @error('email')
                    <div class="text-danger">{{ __('You have not filled in your Email *') }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">{{ __('Phone') }}</label>
                <input type="number" name="phone" class="form-control" id="phone">
                @error('phone')
                    <div class="text-danger">{{ __('You have not filled in your Phone *') }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-3">{{ __('Create') }}</button>
        </form>


    </div>
@endsection
