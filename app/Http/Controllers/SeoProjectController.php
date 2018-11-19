<?php

namespace App\Http\Controllers;

use App\Rules\Host;
use App\SeoPage;
use App\SeoProject;
use Illuminate\Http\Request;

class SeoProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = SeoProject::with(['pages.keywords']);
        $total = $projects->count();

        // options
        if ($request->has('limit'))
            $projects->limit($request->input('limit'));

        if ($request->has('offset'))
            $projects->offset($request->input('offset'));

        if ($request->filled('sort'))
            $projects->orderBy($request->input('sort'), $request->input('order') ?? 'asc');


        // get
        $projects = $projects->get();

        return response()->json(compact('projects', 'total'), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'site' => [
                'required',
                'unique:seo_projects,site',
                new Host()
            ]
        ]);

        $data = SeoProject::create($request->all());
        $data = SeoProject::with(['pages.keywords'])->where('id', $data->id)->first();
        $total = SeoProject::count();

        return response()->json(compact('data', 'total'), 201);
    }

    public function destroy(SeoProject $seoProject)
    {
        return response()->json($seoProject->delete(), 200);
    }
}
