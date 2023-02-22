<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MessageController extends Controller
{

    public function index(): Response
    {
        $messages = Message::latest()->paginate(6);
        return response(view('admin.messages.index',[
            'messages'=>$messages
        ]));

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
