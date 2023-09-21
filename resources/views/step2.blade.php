@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Step 2') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('form.step2') }}">
                            @csrf

                            <!-- annual_income field -->
                            <div class="mb-3">
                                <label class="form-label">Annual Income</label>
                                <div>
                                    <label><input type="radio" name="annual_income" value="50000"> 50k</label>
                                    <label><input type="radio" name="annual_income" value="100000"> 100k</label>
                                    <label><input type="radio" name="annual_income" value="200000"> 200k</label>
                                </div>
                            </div>

                            <!-- has_car field -->
                            <div class="mb-3">
                                <label class="form-label">Do you have a car?</label>
                                <div>
                                    <label><input type="radio" name="has_car" value="1" required> Yes</label>
                                    <label><input type="radio" name="has_car" value="0" required> No</label>
                                </div>
                            </div>

                            <!-- has_job field -->
                            <div class="mb-3">
                                <label class="form-label">Do you have a job?</label>
                                <div>
                                    <label><input type="radio" name="has_job" value="1" required> Yes</label>
                                    <label><input type="radio" name="has_job" value="0" required> No</label>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
