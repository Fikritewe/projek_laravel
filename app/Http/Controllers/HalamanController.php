<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function reports(){
        $messages = Message::all(); // Ambil semua pesan

        return view('admin.index', compact('messages'));
    }

    public function edit($id)
    {
        $message = Message::find($id);

        if (!$message) {
            return redirect()->route('admin.reports')->with('error', 'Error: Message not found.');
        }

        return view('admin.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        $message = Message::find($id);

        if (!$message) {
            return redirect()->route('admin.reports')->with('error', 'Error: Message not found.');
        }

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required',
        ]);

        $message->update([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'pesan' => $request->input('pesan'),
        ]);

        return redirect()->route('admin.reports')->with('success', 'Success: Message updated successfully.');
    }

    public function delete($id)
    {
        $message = Message::find($id);

        if (!$message) {
            return redirect()->route('admin.reports')->with('error', 'Error: Message not found.');
        }

        $message->delete();

        return redirect()->route('admin.reports')->with('success', 'Success: Message deleted successfully.');
    }
}
