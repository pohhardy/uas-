<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\status_pinjaman;
use Illuminate\Http\Request;

class status_pinjamanController extends Controller
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
            $status_pinjaman = status_pinjaman::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('buku_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $status_pinjaman = status_pinjaman::latest()->paginate($perPage);
        }

        return view('admin.status_pinjaman.index', compact('status_pinjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.status_pinjaman.create');
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
        
        status_pinjaman::create($requestData);

        return redirect('admin/status_pinjaman')->with('flash_message', 'status_pinjaman added!');
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
        $status_pinjaman = status_pinjaman::findOrFail($id);

        return view('admin.status_pinjaman.show', compact('status_pinjaman'));
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
        $status_pinjaman = status_pinjaman::findOrFail($id);

        return view('admin.status_pinjaman.edit', compact('status_pinjaman'));
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
        
        $status_pinjaman = status_pinjaman::findOrFail($id);
        $status_pinjaman->update($requestData);

        return redirect('admin/status_pinjaman')->with('flash_message', 'status_pinjaman updated!');
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
        status_pinjaman::destroy($id);

        return redirect('admin/status_pinjaman')->with('flash_message', 'status_pinjaman deleted!');
    }
}
