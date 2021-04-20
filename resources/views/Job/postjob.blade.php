@extends('Job.layout.master')
@section('content')

    <!-- login section start -->
    <section class="login-wrapper">
        <div class="container">
            <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                <form action="{{route('jobs.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Job Name:</label>
                        <input type="text" class="form-control input-lg" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="brand">Job Description:</label>
                        <textarea class="form-control input-lg" name="description" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="vacancy">Vacancy:</label>
                        <input type="number" class="form-control input-lg" name="vacancy" required>
                    </div>
                    <div class="form-group">
                        <label for="salary">Salary:</label>
                        <input type="text" class="form-control input-lg" name="salary" required>
                    </div>

                    <div class="form-group">
                        <label for="job_type">Job Type:</label>
                        <select class="form-control input-lg" name="job_type">
                            <option value="full_time">Full Time</option>
                            <option value="part_time">Part Time</option>
                            <option value="internship">Internship</option>
                            <option value="freelance">Freelance</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="salary">Tags:</label>
                        <input type="text" class="form-control input-lg" name="tags" required>
                    </div>

                    @if (Auth::user()->isAdmin())
                        <div class="form-group">
                            <label for="company_id">Company:</label>
                            <select class="form-control input-lg" name="company_id">
                                @foreach ($job_company as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="dept_id">Category:</label>
                        <select class="form-control input-lg" name="category_id">
                            @foreach ($job_category as $department)
                                <option value="{{$department->id}}">{{$department->job_category}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="posted_date">Posted At:</label>
                        <input type="date" class="form-control input-lg" name="posted_date" required>
                    </div>

                    <div class="form-group">
                        <label for="apply_before">Apply Before:</label>
                        <input type="date" class="form-control input-lg" name="apply_before" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Post</button>

                </form>
            </div>
        </div>
    </section>
    <!-- login section End -->
@endsection


