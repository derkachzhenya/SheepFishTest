@extends('layouts.base')
@section('content')
    <div class="container mt-3">

        <div class="d-flex col-12 text-left ps-5">
            <div class="ms-5 ps-5">
                <a href="{{ route('company.create') }}"
                    class="btn btn-success mt-1 text-center">{{ __('Create new company') }}</a>
            </div>
            <div class="ms-5 mt-2">
                <a class="text-decoration-none text-reset fw-bold" href="{{route('employee.index')}}">Employees</a>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <div class="col-12 col-sm-10 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-left">
                            <h5 class="card-title">{{ __('Companies list') }}</h5>
                        </div>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Address') }}</th>
                                    <th scope="col">{{ __('Website') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col"></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    <tr>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->address }}</td>
                                        <td>{{ $company->website }}</td>
                                        <td>{{ $company->email }}</td>

                                        <td><a class="btn btn-outline-success"
                                                href="{{ route('company.edit', $company->id) }}">
                                                {{ __('Edit') }}</a> </td>
                                        <form action="{{ route('company.destroy', $company->id) }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <td><button type="submit"
                                                    class="btn btn-outline-danger">{{ __('Delete') }}</button></td>
                                        </form>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $companies->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
