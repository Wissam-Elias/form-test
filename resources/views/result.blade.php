@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Result') }}</div>

                    <div class="card-body">
                        <h3 class="text-center">Your Profile</h3>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Name:</strong> {{ Auth::user()->name }}</li>
                            <li class="list-group-item"><strong>Sex:</strong> {{ $information->sex }}</li>
                            <li class="list-group-item"><strong>Birth Date:</strong> {{ $information->birth_date }}</li>
                            <li class="list-group-item"><strong>Marital Status:</strong> {{ $information->marital_status }}
                            </li>
                            <li class="list-group-item"><strong>Emirate:</strong> {{ $information->emirate }}</li>
                            <li class="list-group-item"><strong>Annual Income:</strong> {{ $information->annual_income }}
                            </li>
                            <li class="list-group-item"><strong>Has Car:</strong> {{ $information->has_car ? 'Yes' : 'No' }}
                            </li>
                            <li class="list-group-item"><strong>Has Job:</strong> {{ $information->has_job ? 'Yes' : 'No' }}
                            </li>
                        </ul>

                        <hr>
                        <h3 class="text-center">Analysis</h3>
                        <p class="text-center">
                            Based on your information, you are in the
                            <strong>{{ $userCategory }}</strong> category.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
