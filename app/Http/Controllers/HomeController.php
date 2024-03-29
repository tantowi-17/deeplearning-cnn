<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Training;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $reports = Report::all();
        $gender = [];
        $expression = [];
        $groupedGenderData = $reports->groupBy('gender');
        $genderCounts = $groupedGenderData->map->count();

        $groupedExpressionData = $reports->groupBy('expression');
        $expressionCounts = $groupedExpressionData->map->count();

        $gender['gender'][] = ['Gender', 'Count'];
        foreach ($genderCounts as $gen => $count) {
            $gender['columns'][] = [$gen, $count];
        }

        $expression['expression'][] = ['Expression', 'Count'];
        foreach ($expressionCounts as $exp => $count) {
            $expression['columns'][] = [$exp, $count];
        }

        $trainings10 = Training::where('epoch', 10)->get();
        $trainings20 = Training::where('epoch', 20)->get();
        $trainings30 = Training::where('epoch', 30)->get();
        $trainings50 = Training::where('epoch', 50)->get();
        $trainings100 = Training::where('epoch', 100)->get();

        $epochTenCount10 = Training::where('epoch', 10)->count();
        $epochTenCount20 = Training::where('epoch', 20)->count();
        $epochTenCount50 = Training::where('epoch', 50)->count();
        $epochTenCount100 = Training::where('epoch', 100)->count();

        $epoch10Accuracy = Training::where('epoch', 10)->max('accuracy');
        $epoch20Accuracy = Training::where('epoch', 20)->max('accuracy');
        $epoch50Accuracy = Training::where('epoch', 50)->max('accuracy');
        $epoch100Accuracy = Training::where('epoch', 100)->max('accuracy');

        $loss10 = ['Loss'];
        $accuracy10 = ['Accuracy'];
        foreach ($trainings10 as $training) {
            $loss10[] = round($training->loss, 2);
            $accuracy10[] = round($training->accuracy, 2);
        }

        $loss20 = ['Loss'];
        $accuracy20 = ['Accuracy'];
        foreach ($trainings20 as $training) {
            $loss20[] = round($training->loss, 2);
            $accuracy20[] = round($training->accuracy, 2);
        }

        $loss30 = ['Loss'];
        $val_loss30 = ['Val Loss'];
        foreach ($trainings30 as $training) {
            $loss30[] = round($training->loss, 2);
            $val_loss30[] = round($training->val_loss, 2);
        }

        $accuracy30 = ['Accuracy'];
        $val_accuracy30 = ['Val Accuracy'];
        foreach ($trainings30 as $training) {
            $accuracy30[] = round($training->accuracy, 2);
            $val_accuracy30[] = round($training->val_accuracy, 2);
        }

        $loss50 = ['Loss'];
        $accuracy50 = ['Accuracy'];
        foreach ($trainings50 as $training) {
            $loss50[] = round($training->loss, 2);
            $accuracy50[] = round($training->accuracy, 2);
        }

        $loss100 = ['Loss'];
        $accuracy100 = ['Accuracy'];
        foreach ($trainings100 as $training) {
            $loss100[] = round($training->loss, 2);
            $accuracy100[] = round($training->accuracy, 2);
        }

        $regions10 = [
            'data1' => [
                ['start' => 1, 'end' => 2, 'style' => 'dashed'],
                ['start' => 3]
            ],
            'data2' => [
                ['end' => 3]
            ]
        ];

        if(Auth::user()) {
            $this->data['title'] = 'Dashboard | ' . config('app.name');
            $this->data['description'] = '';
            $this->data['keywords'] = '';

            $this->data['epochTenCount10'] = $epochTenCount10;
            $this->data['epochTenCount20'] = $epochTenCount20;
            $this->data['epochTenCount50'] = $epochTenCount50;
            $this->data['epochTenCount100'] = $epochTenCount100;

            $this->data['epoch10Accuracy'] = round($epoch10Accuracy, 2);
            $this->data['epoch20Accuracy'] = round($epoch20Accuracy, 2);
            $this->data['epoch50Accuracy'] = round($epoch50Accuracy, 2);
            $this->data['epoch100Accuracy'] = round($epoch100Accuracy, 2);

            $this->data['loss10'] = $loss10;
            $this->data['accuracy10'] = $accuracy10;
            $this->data['regions10'] = $regions10;

            $this->data['loss20'] = $loss20;
            $this->data['accuracy20'] = $accuracy20;
            $this->data['regions20'] = $regions10;

            $this->data['loss30'] = $loss30;
            $this->data['valloss30'] = $val_loss30;
            $this->data['regions30'] = $regions10;


            $this->data['accuracy30'] = $accuracy30;
            $this->data['valaccuracy30'] = $val_accuracy30;
            $this->data['regions31'] = $regions10;

            $this->data['loss50'] = $loss50;
            $this->data['accuracy50'] = $accuracy50;
            $this->data['regions50'] = $regions10;

            $this->data['loss100'] = $loss100;
            $this->data['accuracy100'] = $accuracy100;
            $this->data['regions100'] = $regions10;

            $this->data['gender'] = $gender;
            $this->data['expression'] = $expression;

            return view('layout/dashboard', $this->data);
        } else {
            return redirect(route('login'));
        }
    }
    public function reports(Request $request)
    {
        $reports = Report::all();
        $gender = [];
        $expression = [];
        $groupedGenderData = $reports->groupBy('gender');
        $genderCounts = $groupedGenderData->map->count();

        $groupedExpressionData = $reports->groupBy('expression');
        $expressionCounts = $groupedExpressionData->map->count();

        $gender['gender'][] = ['Gender', 'Count'];
        foreach ($genderCounts as $gen => $count) {
            $gender['columns'][] = [$gen, $count];
        }

        $expression['expression'][] = ['Expression', 'Count'];
        foreach ($expressionCounts as $exp => $count) {
            $expression['columns'][] = [$exp, $count];
        }

        return response()->json([
            'gender' => $gender,
            'expression' => $expression
        ]);
    }
}
