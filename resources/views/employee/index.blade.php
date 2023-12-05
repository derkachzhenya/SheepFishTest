@extends('layouts.base')
@section('content')
    <div class="container mt-3">

        <div class="col-sm-4 text-left">
            <div class="text-center">
                <a href="{{ route('employee.create') }}"
                    class="btn btn-success mt-1 text-center">{{ __('Create new employees') }}</a>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <div class="col-12 col-sm-10 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-left">
                            <h5 class="card-title">{{ __('Employees list') }}</h5>
                        </div>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">{{ __('First name') }}</th>
                                    <th scope="col">{{ __('Last name') }}</th>
                                    <th scope="col">{{ __('Company') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Phone') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->first_name }}</td>
                                        <td>{{ $employee->last_name }}</td>
                                        <td>
                                            @if ($employee->company)
                                                {{ $employee->company->name }}
                                            @else
                                                No Company
                                            @endif
                                        </td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->phone }}</td>

                                        <td><a class="btn btn-outline-success"
                                                href="{{ route('employee.edit', $employee->id) }}">
                                                {{ __('Edit') }}</a> </td>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <td><button type="submit"
                                                    class="btn btn-outline-danger">{{ __('Delete') }}</button></td>
                                        </form>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $employees->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
