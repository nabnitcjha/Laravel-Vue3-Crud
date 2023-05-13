<?php

namespace App\Http\Controllers\Api;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;

class CompanyController extends Controller
{
    public $rules;

    public function __construct()
    {
        $this->rules = [
            'name' => 'required',
            'email' => 'required|email|unique:companies',
            'address' => 'nullable',
            'website' => 'nullable',
        ];
    }
    public function index()
    {
        return CompanyResource::collection(Company::all());
    }

    public function store(CompanyRequest $request)
    {
        $validated = $request->validated();

        $company = Company::create($validated);

        return new CompanyResource($company);
    }

    // public function store(Request $request)
    // {
    //     $data = $request->validate($this->rules);
    //     $company = Company::create($data);

    //     return new CompanyResource($company);
    // }

    public function show(Company $company)
    {
        return new CompanyResource($company);
    }

    public function update(Request $request, Company $company)
    {
        $company->update($request->validated());

        return new CompanyResource($company);
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return response()->noContent();
    }
}
