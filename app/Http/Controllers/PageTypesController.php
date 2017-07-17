<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageTypeRequest;
use App\PageType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PageTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pageTypes = PageType::all();
        return view('admin.pagetypes.index', compact('pageTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pagetypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PageTypeRequest $request
     * @return Response
     */
    public function store(PageTypeRequest $request)
    {
        PageType::create($request->all());

        return redirect()->action('PageTypesController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  PageType  $pageType
     * @return Response
     */
    public function edit(PageType $pageType)
    {
        return view('admin.pagetypes.edit', compact('pageType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PageTypeRequest  $request
     * @param  PageType  $pageType
     * @return Response
     */
    public function update(PageTypeRequest $request, PageType $pageType)
    {
        $pageType->update($request->all());
        return redirect()->action('PageTypesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  PageType  $pageType
     * @return Response
     */
    public function destroy(PageType $pageType)
    {
        /*$this->authorize('destroy', $pageType);*/
        $pageType->delete();
        return back();
    }
}
