<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\Model_Pendidikan;
use Exception;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Model_Pendidikan::all();
        if($data){
            return ApiFormatter::createApi(200, 'success', $data);
        }else{
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_pelamar' => 'required',
                'riwayat' => 'required',
                'tahun' => 'required',
            ]);

            $input = Model_Pendidikan::create([
                'id_pelamar' => $request->id_pelamar,
                'riwayat' => $request->riwayat,
                'tahun' => $request->tahun
            ]);

            $data = Model_Pendidikan::where('id', '=', $input->id)->get();
            if($data){
                return ApiFormatter::createApi(200, 'success', $data);
            }else{
                return ApiFormatter::createApi(400, 'failed');
            }

        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
