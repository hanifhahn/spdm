<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'mahasiswas' => Mahasiswa::all(),
            // 'mahasiswas' => Mahasiswa::sortable()->paginate(5),
        ]);
    }

    public function showTambahMahasiswa()
    {
        return view('create');
    }

    public function storeNewMahasiswa(Request $request)
    {
        $data = $request->validate([
            'nim' => ['required'],
            'nama' => ['required'],
            'prodi' => ['required'],
            'semester' => ['required'],
            'kelas' => ['required'],
            'angkatan' => ['required'],
        ]);

        Mahasiswa::create($data);

        return redirect()->back()->with('success', 'Mahasiswa baru telah ditambahkan');
    }

    public function destroy(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect('/dashboard');
    }

    public function showUpdateMahasiswa(Request $request, Mahasiswa $mahasiswa)
    {
        return view('update', [
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function updateDataMahasiswa(Request $request, Mahasiswa $mahasiswa)
    {
        $data = $request->validate([
            'nim' => ['required'],
            'nama' => ['required'],
            'prodi' => ['required'],
            'semester' => ['required'],
            'kelas' => ['required'],
            'angkatan' => ['required'],
        ]);

        $id = Mahasiswa::findOrFail($mahasiswa->id);

        date_default_timezone_set('Asia/Jakarta');
        $data['updated_at'] = date('Y-m-d h:i:s A');

        $id->update($data);

        return redirect()->back();
    }
}
