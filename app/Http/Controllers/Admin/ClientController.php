<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ClientsDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(ClientsDataTable $dataTable)
    {
        return $dataTable->render('admin.clients.index');
    }

    public function show($id)
    {
        $client = User::findOrFail($id);

        return view('admin.clients.show', compact('client'));
    }
}
