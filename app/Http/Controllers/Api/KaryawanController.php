<?php

namespace App\Http\Controllers\Api;

use App\Karyawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['status' => 'success', 'data' => Karyawan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'gaji' => 'required',
            'status_karyawan'
        ]);

        $save = new Karyawan($request->all());

        if($save->save()) {
            return response()->json(['status' => 'success', 'message' => 'Data has been created' ], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Internal server error' ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $Karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'gaji' => 'required',
            'status_karyawan' => 'required',
        ]);

        $Karyawan = Karyawan::find($id);

        if(is_null($Karyawan)) {
            return response()->json(['status' => 'Not found', 'message' => 'Not found'], 404);
        }

        if($Karyawan) {
            $Karyawan->update($request->all());
            return response()->json(['status' => 'success', 'message' => 'Data has been updated' ], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Internal server error' ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $Karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Karyawan = Karyawan::find($id);

        if(is_null($Karyawan)) {
            return response()->json(['status' => 'Not found', 'message' => 'Not found'], 404);
        }

        if ($Karyawan) {
            $Karyawan->delete($id);
            return response()->json(['status' => 'success', 'message' => 'Data has been deleted'], 200);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Internal server error' ], 500);
        }
    }
}
