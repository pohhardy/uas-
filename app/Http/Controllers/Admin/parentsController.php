<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\parent;
use Illuminate\Http\Request;

class parentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $parents = parent::where('nama_lengkap', 'LIKE', "%$keyword%")
                ->orWhere('employee_id', 'LIKE', "%$keyword%")
                ->orWhere('nama_ibu', 'LIKE', "%$keyword%")
                ->orWhere('nama_ayah', 'LIKE', "%$keyword%")
                ->orWhere('no_ktpibu', 'LIKE', "%$keyword%")
                ->orWhere('no_ktpayah', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $parents = parent::latest()->paginate($perPage);
        }

        return view('admin.parents.index', compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.parents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        parent::create($requestData);

        return redirect('admin/parents')->with('flash_message', 'parent added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $parent = parent::findOrFail($id);

        return view('admin.parents.show', compact('parent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $parent = parent::findOrFail($id);

        return view('admin.parents.edit', compact('parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $parent = parent::findOrFail($id);
        $parent->update($requestData);

        return redirect('admin/parents')->with('flash_message', 'parent updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        parent::destroy($id);

        return redirect('admin/parents')->with('flash_message', 'parent deleted!');
    }
}
