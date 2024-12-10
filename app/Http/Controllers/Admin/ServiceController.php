<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ServicesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function index(ServicesDataTable $dataTable)
    {
        confirmDelete('Delete Service', 'Are you sure you want to delete this service?');

        return $dataTable->render('admin.services.index');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.show', compact('service'));
    }

    public function destroy($id)
    {
        Service::destroy($id);

        toast('Service deleted successfully', 'success');

        return redirect()->route('admin.services.index');
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deposit_price' => 'required|numeric',
            'type' => 'required',
            'duration' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('service-images', 'public');
        }

       Service::create($data);

        toast('Service created successfully', 'success');

       return redirect()->route('admin.services.index');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deposit_price' => 'required|numeric',
            'type' => 'required',
            'duration' => 'required',
        ]);

        $service = Service::find($id);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('service-images', 'public');
        }

        $service->update($data);

        toast('Service updated successfully', 'success');

        return redirect()->route('admin.services.index');
    }
}
