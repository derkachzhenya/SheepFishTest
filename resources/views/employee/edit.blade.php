@extends('layouts.base')
@section('content')
    <div class="container col-8 mt-3 ">

        <form action="{{ route('employee.update', $employee->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="first_name" class="form-label">{{ __('Edit first name') }}</label>
                <input type="text" name="first_name" class="form-control" id="first_name"
                    value="{{ $employee->first_name }}">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">{{ __('Edit last name') }}</label>
                <input type="text" name="last_name" class="form-control" id="last_name"
                    value="{{ $employee->last_name }}">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">{{ __('Edit company') }}</label>
                <select class="form-select" name="company_id" aria-label="Default select example">
                    @foreach ($companies as $company)
                        <option {{ $company->id == $employee->company->id ? 'selected' : '' }} value="{{ $company->id }}">
                            {{ $company->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Edit email') }}</label>
                <input type="text" name="email" class="form-control" id="email" value="{{ $employee->email }}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">{{ __('Edit phone') }}</label>
                <input type="text" name="phone" class="form-control" id="phone" value="{{ $employee->phone }}">
            </div>

            <button type="submit" class="btn btn-primary mb-3">{{ __('Edit') }}</button>
        </form>

    </div>
@endsection
