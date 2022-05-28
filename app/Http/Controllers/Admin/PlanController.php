<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    //
    private $paginate = 5;

    public function index()
    {
        // latest('nome_do_campo') faz um orderBy! pelo campo definido. Muito bom!
        $plans = Plan::latest('id')->paginate($this->paginate);

        return view('admin.pages.plans.index', [
            'plans' => $plans
        ]);
    }
}
