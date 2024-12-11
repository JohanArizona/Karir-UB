<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;
use App\Models\ArtikelBerita;
use Session;
use Carbon\Carbon;

class JobController extends Controller
{   
    
    public function dashboardUser()
    {
        // Mengambil semua artikel
        $articles = ArtikelBerita::all(); 
    
        // Ambil data dari Loker
        $jobs = Loker::orderBy('created_at', 'desc')->get();
        $jobs->transform(function ($loker) {
            $loker->days_ago = Carbon::parse($loker->created_at)->diffForHumans();
            return $loker;
        });

        // Kirim data ke view
        return view('dashboard', compact('jobs', 'articles'));
    }

    public function destroy($id_loker)
    {
        $loker = Loker::findOrFail($id_loker);
        
        try {
            $loker->delete();
            return redirect()->route('admin.dashboard')->with('success', 'Lowongan kerja berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard')->with('error', 'Gagal menghapus lowongan kerja');
        }
    }

    public function edit($id_loker)
    {
        $loker = Loker::findOrFail($id_loker);
        return view('admin.loker.edit', compact('loker'));
    }

    public function update(Request $request, $id_loker)
    {
        // Validasi data
        $validated = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'alamat_perusahaan' => 'required|string|max:255',
            'logo_company' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_loker' => 'required|string|max:255',
            'workshift' => 'required|string|max:255',
            'jenjang_minimum' => 'required|string|max:255',
            'tipe' => 'required|string|max:255',
            'gaji' => 'required|numeric',
            'maksimal_usia' => 'required|numeric',
            'deskripsi' => 'required|string',
            'no_telp_perusahaan' => 'required|string|max:255',
        ]);
    
        // Ambil data loker berdasarkan id_loker
        $loker = Loker::findOrFail($id_loker);
    
        // Simpan logo perusahaan jika ada file baru
        if ($request->hasFile('logo_company')) {
            $logo_path = $request->file('logo_company')->store('logos', 'public');
            $loker->logo_company = $logo_path;
        }
    
        // Update data loker
        $loker->nama_perusahaan = $validated['nama_perusahaan'];
        $loker->kota = $validated['kota'];
        $loker->alamat_perusahaan = $validated['alamat_perusahaan'];
        $loker->nama_loker = $validated['nama_loker'];
        $loker->workshift = $validated['workshift'];
        $loker->jenjang_minimum = $validated['jenjang_minimum'];
        $loker->tipe = $validated['tipe'];
        $loker->gaji = $validated['gaji'];
        $loker->maksimal_usia = $validated['maksimal_usia'];
        $loker->deskripsi = $validated['deskripsi'];
        $loker->no_telp_perusahaan = $validated['no_telp_perusahaan'];
    
        // Simpan perubahan
        $loker->save();
    
        return redirect()->route('admin.loker.edit', $id_loker)->with('success', 'Lowongan Kerja berhasil diperbarui.');
    }
    
    
    // Menampilkan form input data step 1
    public function createStep1()
    {
        return view('create-job-step1');
    }

    // Menyimpan data sementara di session untuk step 1
    public function storeStep1(Request $request)
    {
        // Validasi data step 1
        $validated = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'alamat_perusahaan' => 'required|string',
            'logo' => 'required|image|mimes:jpg,jpeg,png,gif|max:10240',
            'kode_negara' => 'required|string|max:5',
            'no_telp_perusahaan' => 'required|string|max:20',
        ]);
        
    
        // Simpan logo
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logo_company', 'public');
            
            // Simpan path logo ke session, bukan file itu sendiri
            Session::put('job_data_step1', [
                'nama_perusahaan' => $validated['nama_perusahaan'],
                'kota' => $validated['kota'],
                'alamat_perusahaan' => $validated['alamat_perusahaan'],
                'logo_path' => $logoPath,
                'kode_negara' => $validated['kode_negara'],
                'no_telp_perusahaan' => $validated['no_telp_perusahaan'],
            ]);
        }
    
        return redirect()->route('admin.jobs.create.step2');
    }

    // Menampilkan halaman step 2
    public function createStep2()
    {
        return view('create-job-step2');
    }

    // Menyimpan data akhir dan simpan ke database
    public function store(Request $request)
    {
        // Ambil data dari session step 1
        $step1Data = Session::get('job_data_step1');

        // Validasi data step 2
        $validated = $request->validate([
            'nama_loker' => 'required|string|max:255',
            'workshift' => 'required|in:Full-time,Part-time,Internship,Contract',
            'jenjang_minimum' => 'required|in:D3,D4,S1,S2,S3',
            'tipe' => 'required|in:Onsite,Hybrid,Remote',
            'gaji' => 'required|string',
            'maksimal_usia' => 'required|integer',
            'deskripsi' => 'required|string'
        ]);

        // Gabungkan data dari kedua step
        $finalData = array_merge($step1Data, $validated);

        // Simpan data ke database
        $loker = new Loker();
        $loker->nama_perusahaan = $finalData['nama_perusahaan'];
        $loker->kota = $finalData['kota'];
        $loker->alamat_perusahaan = $finalData['alamat_perusahaan'];
        $loker->logo_company = $finalData['logo_path'];
        
        $loker->nama_loker = $finalData['nama_loker'];
        $loker->workshift = $finalData['workshift'];
        $loker->jenjang_minimum = $finalData['jenjang_minimum'];
        $loker->tipe = $finalData['tipe'];
        $loker->gaji = $finalData['gaji'];
        $loker->maksimal_usia = $finalData['maksimal_usia'];
        $loker->deskripsi = $finalData['deskripsi'];
        $loker->no_telp_perusahaan = $finalData['kode_negara'] . $finalData['no_telp_perusahaan'];
        
        // Tambahkan status default atau sesuaikan
        $loker->status_loker = 'aktif';

        $loker->save();

        // Hapus session
        Session::forget('job_data_step1');

        // Tambahkan sweet alert untuk notifikasi berhasil
        return redirect()->route('admin.jobs.create.step2')->with('success', 'Lowongan kerja berhasil ditambahkan!');
    }  

    //Search Loker
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $results = Loker::where('nama_loker', 'like', '%' . $query . '%')
            ->orWhere('nama_perusahaan', 'like', '%' . $query . '%')
            // ->with('nama_perusahaan') // Eager loading relasi perusahaan jika ada
            ->get()
            ->map(function($loker) {
                return [
                    'title' => $loker->nama_loker,
                    'company' => $loker->nama_perusahaan,
                    'company_logo' => $loker->logo_company,
                    'location' => $loker->kota,
                    'work_type' => $loker->tipe,
                    'posted_at' => $loker->created_at,
                    'salary' => $loker->gaji,
                    'description' => $loker->deskripsi,
                    // Tambahkan field lain sesuai kebutuhan
                ];
            });
        
        return view('findjobs_guest', [
            'jobs' => $results, 
            'query' => $query
        ]);
    }

    //Search Loker
    public function searchLogin(Request $request)
    {
        $query = $request->input('query');
        
        $results = Loker::where('nama_loker', 'like', '%' . $query . '%')
            ->orWhere('nama_perusahaan', 'like', '%' . $query . '%')
            // ->with('nama_perusahaan') // Eager loading relasi perusahaan jika ada
            ->get()
            ->map(function($loker) {
                return [
                    'title' => $loker->nama_loker,
                    'company' => $loker->nama_perusahaan,
                    'company_logo' => $loker->logo_company,
                    'location' => $loker->kota,
                    'work_type' => $loker->tipe,
                    'posted_at' => $loker->created_at,
                    'salary' => $loker->gaji,
                    'description' => $loker->deskripsi,
                    // Tambahkan field lain sesuai kebutuhan
                ];
            });
        
        return view('findjobs_afterlogin', [
            'jobs' => $results, 
            'query' => $query
        ]);
    }
}