<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\JobVacancies;
use App\Http\Requests\StoreJobVacanciesRequest;
use App\Http\Requests\UpdateJobVacanciesRequest;

class JobVacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobVacanciesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobVacanciesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function filterBySpecialization($specializationId)
    {
        return DB::table('job_vacancies')
                    ->join('jobs', 'job_vacancies.job_id', 'jobs.id')
                    ->join('companies', 'job_vacancies.company_id', 'companies.id')
                    ->select('job_vacancies.id', 'job_vacancies.name as position', 'companies.name as company_name', 'companies.logo as company_logo')
                    ->where('jobs.specialization_id', $specializationId)
                    ->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return JobVacancies::with([
            'job', 'company'
        ])->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobVacancies  $jobVacancies
     * @return \Illuminate\Http\Response
     */
    public function edit(JobVacancies $jobVacancies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobVacanciesRequest  $request
     * @param  \App\Models\JobVacancies  $jobVacancies
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobVacanciesRequest $request, JobVacancies $jobVacancies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobVacancies  $jobVacancies
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobVacancies $jobVacancies)
    {
        //
    }
}
