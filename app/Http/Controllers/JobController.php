<?php

// app/Http/Controllers/JobController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;
use Session;

class JobController extends Controller
{
    // Menampilkan form input data
    public function createStep1()
    {
        return view('create-job-step1');
    }

    // Menyimpan data sementara di session admin
    public function storeStep1(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'company-name' => 'required|string|max:255',
            'regency-city' => 'required|string|max:255',
            'company-address' => 'required|string',
        ]);

        // Simpan data di session admin
        Session::put('job_data', $validated);

        return redirect()->route('admin.jobs.create.step2');
    }

    // Menampilkan halaman step 2 (lanjutan form)
    public function createStep2()
    {
        return view('create-job-step2');
    }

    // Menyimpan data dari step 2 dan menyimpannya ke database
    public function storeStep2(Request $request)
    {
        // Ambil data dari session
        $jobData = Session::get('job_data');
    
        // Gabungkan data dari step 1 dan step 2
        $data = array_merge($jobData, $request->only([
            'job-title', 'work-shift', 'minimum-education', 'company-logo', 'description'
        ]));
    
        // Simpan data ke database
        $loker = new Loker();
        $loker->nama_perusahaan = $data['company-name'];
        $loker->nama_loker = $data['job-title'];
        $loker->workshift = $data['work-shift'];
        $loker->kategori = $data['minimum-education'];
        $loker->deskripsi = $data['description'];
        $loker->kota = $data['regency-city'];
        $loker->alamat_perusahaan = $data['company-address'];
    
        // Simpan logo jika ada
        if ($request->hasFile('company-logo')) {
            $file = $request->file('company-logo');
            $path = $file->storeAs('logo_company', $file->getClientOriginalName(), 'public');
            $logoPath = 'logo_company/' . $file->getClientOriginalName();
            $loker->logo_company = $logoPath; // Simpan path logo ke database
        }
    
        $loker->save();
    
        // Hapus session setelah data disimpan
        Session::forget('job_data');
    
        return redirect()->route('admin.jobs.index')->with('success', 'Job has been posted successfully');
    }
    
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'nama_loker' => 'required|string|max:255',
            'workshift' => 'required|string|in:Full-time,Part-time,Internship,Contract',
            'kategori' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'kota' => 'nullable|string|max:255',
            'alamat_perusahaan' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:10240',  // Validasi untuk logo
        ]);
    
        // Menyimpan file logo jika ada
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logo_company', 'public');
        } else {
            $logoPath = null;  // Jika tidak ada file logo, set null
        }
    
        // Menyimpan data ke tabel 'loker'
        Loker::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_loker' => $request->nama_loker,
            'workshift' => $request->workshift,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'kota' => $request->kota,
            'alamat_perusahaan' => $request->alamat_perusahaan,
            'logo_company' => $logoPath,  // Menyimpan path logo jika ada
            'status_loker' => $request->status_loker,
        ]);
    
        return redirect()->route('loker.index');  // Mengarahkan ke halaman index loker
    }    
}



