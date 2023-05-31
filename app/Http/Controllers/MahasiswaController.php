<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\Facades\DataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.index');
    }

    public function data()
    {
        $data = MahasiswaModel::all();

        return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
    }

    public function store(Request $request)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal ditambahkan. ' . $validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::create($request->all());
        return response()->json([
            'status' => ($mhs),
            'modal_close' => false,
            'message' => ($mhs) ? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
    }

    public function update(Request $request, $id)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswa,nim,' . $id,
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal diedit. ' . $validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::where('id', $id)->update($request->except('_token', '_method'));

        return response()->json([
            'status' => ($mhs),
            'modal_close' => $mhs,
            'message' => ($mhs) ? 'Data berhasil diedit' : 'Data gagal diedit',
            'data' => null
        ]);
    }

    public function destroy($id)
    {
        $mhs = MahasiswaModel::destroy($id);

        return response()->json([
            'status' => ($mhs),
            'modal_close' => $mhs,
            'message' => ($mhs) ? 'Data berhasil dihapus' : 'Data gagal dihapus',
            'data' => null
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();

        return view('mahasiswa.create', compact('kelas'))
            ->with('url_form', url('/mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nim' => 'required|string|max:10|unique:mahasiswa,nim',
    //         'nama' => 'required|string|max:50',
    //         'kelas_id' => 'required|exists:kelas,id',
    //         'jk' => 'required|in:l,p',
    //         'tempat_lahir' => 'required|string|max:50',
    //         'tanggal_lahir' => 'required|date',
    //         'alamat' => 'required|string|max:255',
    //         'hp' => 'required|digits_between:6,15',
    //         'photo' => 'nullable|image|max:2048'
    //     ]);

    //     $mahasiswa = MahasiswaModel::create($request->except(['_token', 'photo']));

    //     if ($request->hasFile('photo')) {
    //         $mahasiswa->photo = $request->file('photo')->store('mahasiswa', 'public');
    //         $mahasiswa->save();
    //     }

    //     return redirect()->route('mahasiswa.index');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(MahasiswaModel $mahasiswa)
    {
        $mahasiswa->load('kelas');

        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Display nilai KHS Mahasiswa
     * 
     * @param \App\Models\MahasiswaModel $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function khs(MahasiswaModel $mahasiswa)
    {
        $mahasiswa->load('courses');

        return view('mahasiswa.khs', compact('mahasiswa'));
    }

    public function cetak_khs(MahasiswaModel $mahasiswa)
    {
        $mahasiswa->load('courses');

        $pdf = \PDF::loadView('mahasiswa.khs_pdf', compact('mahasiswa'));

        return $pdf->download('khs-' . $mahasiswa->nim . '.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(MahasiswaModel $mahasiswa)
    {
        $kelas = Kelas::all();

        $mahasiswa->load('kelas');

        return view('mahasiswa.create', compact('mahasiswa',  'kelas'))
            ->with('url_form', url('/mahasiswa/' . $mahasiswa->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, MahasiswaModel $mahasiswa)
    // {
    //     $request->validate([
    //         'nim' => 'required|unique:mahasiswa,nim,' . $mahasiswa->id,
    //         'nama' => 'required',
    //         'kelas_id' => 'required|exists:kelas,id',
    //         'jk' => 'required',
    //         'tempat_lahir' => 'required',
    //         'tanggal_lahir' => 'required',
    //         'alamat' => 'required',
    //         'hp' => 'required',
    //         'photo' => 'nullable|image|max:2048'
    //     ]);

    //     $mahasiswa->update($request->except(['_token', '_method', 'photo']));

    //     if ($request->hasFile('photo')) {
    //         if ($mahasiswa->photo && file_exists(storage_path('app/public/' . $mahasiswa->photo))) {
    //             \Storage::delete('public/' . $mahasiswa->photo);
    //         }

    //         $mahasiswa->photo = $request->file('photo')->store('mahasiswa', 'public');
    //         $mahasiswa->save();
    //     }

    //     return redirect()->route('mahasiswa.index');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MahasiswaModel  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    // public function destroy(MahasiswaModel $mahasiswa)
    // {
    //     $mahasiswa->delete();

    //     return redirect()->route('mahasiswa.index');
    // }
}
