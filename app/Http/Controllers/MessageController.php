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
        $messages = Message::latest()->paginate(5);
        return response(view('Admin.messages.index',[
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


    public function show(string $id): RedirectResponse
    {
        $message = Message::find($id);
        $message->status = 'readed';
        $message->save();

        return redirect()->route('admin.messages')->with('message',' ');

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
        $message = Message::where('id',$id)->first();
        if ($message != null) {
            $message->delete();
            return redirect()->route('admin.messages')->with('msg','Xabar muvaffaqiyatli o`chirildi.');
        }
       return redirect()->route('admin.messages')->with('msg','Xabar muvaffaqiyatli o`chirildi.');
    }

}
