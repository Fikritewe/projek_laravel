<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = User::get();

        return response()->json([
            'message' => 'Data user berhasil ditemukan',
            'data' => $query,
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return "Data Berhasil Masuk";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataUser = User::find($id);

        if (empty($dataUser)) {
            return response()->json([
                'status' => false,
                'data' => 'Data Tidak Ditemukan'
            ],404);
        }

        return response()->json([
            'status'=> true,
            'message' => 'Data Berhasil Ditemukan',
            'data' => $dataUser,
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataUser = User::find($id);
        if (empty($dataUser)) {
            return response()->json([
                'status' => false,
                'data' => 'Data tidak ditemukan'
            ], 404);
        }

        $dataUser->name = $request->name;
        $dataUser->email = $request->email;
        $dataUser->password = $request->password;

        $dataUser->save();

        return response()->json([
            'status' => true,
            'message' => 'Berhasil mengedit data',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        //delete
        return response()->json([
            'status'=>true,
            'message'=>'Data Berhasil Dihapus',
        ],200);
    }
}
