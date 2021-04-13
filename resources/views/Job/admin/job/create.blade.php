@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if (Auth::user()->isAdmin())
                    <h3 class="m-0 text-dark pl-2">Add Job</h3>
                @endif
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="{{route('jobs.index')}}" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a>
    </div>

    <div class="col-md-10 offset-md-1 col-sm-12">

        <form action="{{route('jobs.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Job Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="brand">Job Description:</label>
                <textarea class="form-control" name="description" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="vacancy">Vacancy:</label>
                <input type="number" class="form-control" name="vacancy" required>
            </div>
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="text" class="form-control" name="salary" required>
            </div>


            <div class="form-group">
                <label for="job_type">Job Type:</label>
                <select name="job_type">
                    <option value="full_time">Full Time</option>
                    <option value="part_time">Part Time</option>
                    <option value="internship">Internship</option>
                    <option value="freelance">Freelance</option>
                </select>
            </div>

            @if (Auth::user()->isAdmin())
                <div class="form-group">
                    <label for="company_id">Company:</label>
                    <select class="form-control" name="company_id">
                        @foreach ($job_company as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            <div class="form-group">
                <label for="dept_id">Category:</label>
                <select class="form-control" name="category_id">
                    @foreach ($job_category as $department)
                        <option value="{{$department->id}}">{{$department->job_category}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="posted_date">Posted At:</label>
                <input type="date" class="form-control" name="posted_date" required>
            </div>

            <div class="form-group">
                <label for="apply_before">Apply Before:</label>
                <input type="date" class="form-control" name="apply_before" required>
            </div>
            <div class="form-group">
                <label for="salary">Tags:</label>
                <input type="text" class="form-control" name="tags" required>
            </div>

            <input class="form-control btn btn-primary mb-4" type="submit" value="Submit">
        </form>

    </div>
@endsection

