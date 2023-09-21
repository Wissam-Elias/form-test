@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Step 1') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('form.step1') }}">
                        @csrf

                        <!-- 'sex' field -->
                        <div class="mb-3">
                            <label for="sex" class="form-label">Sex</label>
                            <select id="sex" name="sex" class="form-select" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <!-- 'birth_date' field -->
                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Birth Date</label>
                            <input type="date" id="birth_date" name="birth_date" class="form-control" required>
                        </div>

                        <!-- 'marital_status' field -->
                        <div class="mb-3">
                            <label class="form-label">Marital Status</label>
                            <div>
                                <label><input type="radio" name="marital_status" value="married" required> Married</label>
                                <label><input type="radio" name="marital_status" value="bachelor" required> Bachelor</label>
                                <label><input type="radio" name="marital_status" value="absolute" required> Absolute</label>
                            </div>
                        </div>

                        <!-- 'emirate' field -->
                        <div class="mb-3">
                            <label for="emirate" class="form-label">Emirate</label>
                            <select id="emirate" name="emirate" class="form-select" required>
                                <option value="dubai">Dubai</option>
                                <option value="abu_dhabi">Abu Dhabi</option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
