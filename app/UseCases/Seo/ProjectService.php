<?php

namespace App\UseCases\Seo;

use App\Http\Requests\UpdateProjectRequest;
use App\SeoKeyword;
use App\SeoPage;
use App\SeoProject;
use Illuminate\Support\Collection;

class ProjectService
{
    public function create()
    {

    }

    /**
     * @param int $projectId
     * @param UpdateProjectRequest $request
     * @return SeoProject
     */
    public function update(int $projectId, UpdateProjectRequest $request) : SeoProject
    {
        /** @var SeoProject $project */
        $seoProject = SeoProject::findOrFail($projectId);

        $seoProject->update($request->only([
            'name',
            'site',
        ]));

        // delete pages for sync
        $req_pages = $request->input('pages');
        $db_pages = $seoProject->pages;
        $this->deleteSyncEntities($req_pages, $db_pages, SeoPage::class);

        // pages to db
        foreach ($req_pages as $req_page) {
            $curPage = SeoPage::updateOrCreate([
                'id' => $req_page['id'] ?? null,
                'url_path' => $req_page['url_path'],
                'project_id' => $seoProject->id
            ]);

            // delete keywords for sync
            $db_keywords = $curPage->keywords;
            $this->deleteSyncEntities($req_page['keywords'], $db_keywords, SeoKeyword::class);

            // keywords to db
            foreach ($req_page['keywords'] as $req_keyword) {
                SeoKeyword::updateOrCreate([
                    'id' => $req_keyword['id'] ?? null,
                    'phrase' => $req_keyword['phrase'],
                    'page_id' => $curPage->id
                ]);
            }
        }

        return SeoProject::with('pages.keywords')->where('id', $seoProject->id)->first();
    }

    /**
     * @param array $input_items
     * @param Collection $db_items
     * @param $entity
     */
    private function deleteSyncEntities(array $input_items, Collection $db_items, $entity) : void
    {
        $ids_deleted = [];
        foreach ($db_items as $db_item) {
            $is_deleted = true;
            foreach ($input_items as $input_item) {
                if (isset($input_item['id']) and $db_item['id'] == $input_item['id']) {
                    $is_deleted = false;
                    break;
                }
            }
            if ($is_deleted)
                $ids_deleted[] = $db_item['id'];
        }
        $entity::destroy($ids_deleted);
    }
}
