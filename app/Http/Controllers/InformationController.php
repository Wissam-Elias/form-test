<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function showStep1()
    {
        return view('step1');
    }

    public function storeStep1(Request $request)
    {
        $validatedData = $request->validate([
            'sex' => 'required',
            'birth_date' => 'required|date',
            'marital_status' => 'required',
            'emirate' => 'required',
        ]);

        session()->put('step1', $validatedData);

        return redirect()->route('form.step2');
    }

    public function showStep2()
    {
        return view('step2');
    }

    public function storeStep2(Request $request)
    {
        $validatedData = $request->validate([
            'annual_income' => 'required',
            'has_car' => 'required',
            'has_job' => 'required',
        ]);

        $data = array_merge(session()->get('step1'), $validatedData);
        Information::create([
            'sex' => $data['sex'],
            'birth_date' => $data['birth_date'],
            'marital_status' => $data['marital_status'],
            'emirate' => $data['emirate'],
            'annual_income' => $data['annual_income'],
            'has_car' => $data['has_car'],
            'has_job' => $data['has_job'],
            'user_id' => auth()->user()->id
        ]);

        session()->forget('step1');

        return redirect()->route('form.result');
    }

    public function showResult()
    {
        $information = Information::where('user_id', auth()->user()->id)->first();
        $userCategory = $this->analyzeUser($information);

        return view('result', compact('information', 'userCategory'));
    }


    private function analyzeUser($information)
    {
        if ($information->has_job && $information->has_car) {
            return 'Well-Established';
        } elseif ($information->annual_income == 50000) {
            return 'Low-Income';
        } else {
            return 'Average';
        }
    }
}
