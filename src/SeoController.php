<?php

namespace ClaudiusNascimento\Seo;

use App\Http\Controllers\Controller;
use ClaudiusNascimento\Seo\Models\Seo;
use ClaudiusNascimento\Seo\Requests\SeoRequest;

/**
 * @acl Seo - Controller
 */
class SeoController extends Controller
{

    public function store(SeoRequest $request)
    {

        $block = Seo::create($request->all());

        return redirect()->back();

    }

    public function update(SeoRequest $request, $id)
    {

        $block = Seo::findOrFail($id);

        $block->update($request->all());

        return redirect()->back();

    }

    public function destroy($id)
    {

        $block = Seo::destroy($id);

        return redirect()->back();

    }

}
