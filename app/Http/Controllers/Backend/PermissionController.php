<?php

namespace App\Http\Controllers\Backend;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\Backend\StorePermissionRequest;
use App\Http\Requests\Backend\UpdatePermissionRequest;

class PermissionController extends Controller
{
    private function homepageData()
    {
        return Permission::paginate(config('app.per_page_length'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = $this->homepageData();

        return view('dashboard.roles-permissions.permissions.index', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
        Permission::create($request->validated());

        return back()->withSuccess('Permission created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permission  = Permission::findOrFail($id);
        $permissions = $this->homepageData();

        return view('dashboard.roles-permissions.permissions.index', compact('permissions', 'permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermissionRequest $request, string $id)
    {
        $permission = Permission::findOrFail($id);
        $permission->update($request->validated());

        return redirect()
            ->route('dashboard.permissions.index')
            ->withSuccess('Permission updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        try {
            $permission = Permission::findById($id);
            $permission->delete();

            return redirect()
                ->route('dashboard.permissions.index')
                ->withSuccess('Permission deleted successfully!');
        } catch (Exception $e) {
            return redirect()
                ->route('dashboard.permissions.index')
                ->withError($e->getMessage());
        }
    }
}
