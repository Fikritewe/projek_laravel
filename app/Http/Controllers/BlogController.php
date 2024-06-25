<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequests;
use App\Models\Message;

class BlogController extends Controller
{
    public function store(PostRequests $request)
    {
        echo 'Nama: ' . $request->nama . '<br>';
     return back()->with('success','Data Added Successfully');

    }

    public function home(){
        return view('home');
    }

    public function tentang(){
        return view('tentang');
    }

    public function kontak(){
        return view('kontak');
    }

    public function sbmtkntk(PostRequests $request){
        $nama = $request->input('nama');
        $email = $request->input('email');
        $pesan = $request->input('pesan');

        Message::create([
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesan,
        ]);

        $successMessage = "Form submitted successfully!";

        return redirect()->route('Kontak.pesan')->with([
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesan,
            'success' => $successMessage,
        ]);
    }

    public function showMessage()
    {
        if (session('nama') || session('email') || session('nomer') || session('pesan')) {
            return view('hasil'); 
        }

        return redirect()->route('Kontak');
    }

    public function pesan(){
        return view('pesan');
    }

   

}