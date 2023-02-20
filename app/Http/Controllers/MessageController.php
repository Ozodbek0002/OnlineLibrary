<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MessageController extends Controller
{

    public function index(): Response
    {
        return response(view('admin.messages.index'));

    }


    public function create(): Response
    {
        //
    }


    public function store(Request $request): RedirectResponse
    {
        //
    }


    public function show(string $id): Response
    {
        //
    }


    public function edit(string $id): Response
    {
        //
    }


    public function update(Request $request, string $id): RedirectResponse
    {

    }


    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
