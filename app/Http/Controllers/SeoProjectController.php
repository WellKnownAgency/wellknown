<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProjectRequest;
use App\Rules\Host;
use App\SeoProject;
use App\UseCases\Seo\ProjectService;
use Illuminate\Http\Request;

class SeoProjectController extends Controller
{
    private $service;

    public function __construct(ProjectService $service)
    {
        $this->service = $service;
    }

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

    /**
     * @param SeoProject $seoProject
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(SeoProject $seoProject)
    {
        $project = SeoProject::where('id', $seoProject->id)->with(['pages.keywords'])->first();
        return view('admin.seo.edit', compact('project'));
    }

    public function update(SeoProject $seoProject, UpdateProjectRequest $request)
    {
        $project = $this->service->update($seoProject->id, $request);
        return response()->json(compact('project'), 200);
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

    public function keywordsPositions()
    {
        return response()->json(null, 200);
    }


}
