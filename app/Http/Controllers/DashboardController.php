<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranSim;
use App\Models\PerpanjangSim;
use App\Models\InputNilai;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('Dashboard');
    }

    public function pendaftaran(){
        return view('pendaftaran');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nik' => 'required', $request->nik,
            'nama_pengguna' => 'required', $request->nama_pengguna,
            'tanggal_lahir' => 'required', $request->tanggal_lahir,
            'alamat' => 'required', $request->alamat,
            'tempat_lahir' => 'required', $request->tempat_lahir,
            'lokasi' => 'required', $request->lokasi,
            'jenis_sim' => 'required', $request->jenis_sim,
            'pekerjaan' => 'required', $request->pekerjaan,
            'tanggal_ujian' => 'required', $request->tanggal_ujian,
        ]);

        PendaftaranSim::create($validatedData);

        $request->session()->flash('sucess', 'Pendaftaran SIM Baru Berhasil');

        return redirect('/dashboard');
    }

    public function perpanjang(){
        return view('perpanjang');
    }

    public function store_perpanjang(Request $request){
        $validatedDataa = $request->validate([
            'nik' => 'required', $request->nik,
            'nama_pengguna' => 'required', $request->nama_pengguna,
            'alamat' => 'required', $request->alamat,
            'jenis_sim' => 'required', $request->jenis_sim,
            'sim_lama' => 'required', $request->sim_lama,
        ]);

        PerpanjangSim::create($validatedDataa);

        return redirect('/dashboard');
    }

    public function inputnilai(){
        return view('inputnilai');
    }

    public function store_inputnilai(Request $request){
        $InputNilai = InputNilai::create([
            'Nilai_Ujian_Tulis' => $request->Nilai_Ujian_Tulis,
            'Nilai_Ujian_Praktek' => $request->Nilai_Ujian_Praktek,
        ]);

        return redirect("/dashboard");

    }

    public function store_ceklulus($InputNilai){
        if ($request->Nilai_UjianTulis >= 75 && $request->Nilai_UjianTulis >= 75 ) {
            return redirect("/lulus");
        } else {
            return redirect("/tidaklulus");
        }
    }

    public function pengambilan(){
        return view ('pengambilan');
    }
}
