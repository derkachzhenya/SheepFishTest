<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{

    public function index()
    {
        $companies = Company::paginate(10);
        return view('company.index', compact('companies'));
    }


    public function create()
    {
        return view('company.create');
    }


    public function store(StoreCompanyRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Company::firstOrCreate($data);
        return redirect()->route('company.index');
    }


    public function show(Company $company)
    {

    }


    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }


    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $data = $request->validated();
        $company->update($data);
        return redirect()->route('company.index', compact('company'));
    }


    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('company.index', compact('company'));
    }
}
