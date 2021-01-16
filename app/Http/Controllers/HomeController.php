<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\Mahasiswa;
use App\Models\organization;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpParser\Mode\Expr\New_;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // 

    public function MyInformation()
    {
        return view('MyInformation');
    }

    public function index()
    {
        return view('dashboard');
    }
    
    // public function detail()
    // {
    //     return view('detail');
    // }

    // public function list()
    // {
    //     $mahasiswa = Mahasiswa::all();
    // // dd($mahasiswa);
    //     return view('list', compact('mahasiswa'));
    // }

    public function list()
    {
        $mahasiswa = Mahasiswa::paginate(5);
        // dd($mahasiswa);
        return view('list', compact('mahasiswa'));
    }
    
  //menampilkan hasil tinker  
    // public function Dosen()
    // {
    //     $dosen = dosen::all();
    // dd($dosen);
    //     return view('dosen');
    // }

    // public function index()
    // {
    //     return view('detail');
    // }

    // public function detail()
    // {
    //     return view('dashboard');
    // }


    //menampilkan hasil tinker 
    // public function list()
    // {
    //     $mahasiswa = Mahasiswa::all();
    //     dd($mahasiswa);
    //     return view('list');
    // }

   
    //Menampilkan data dosen dengan tabel nya
    public function Dosen()
    {
        $dosen = dosen::all();
        //dd('$dosen');
        return view('dosen', compact('dosen'));
    }

    public function organization()
    {
        $organization = organization::all();
         //dd($organization);
         return view('organization', compact('organization'));
    }

    // public function Organization()
    // {
    //     $organization = organization::all();
    //      dd($organization);
    //      return view('organization');
    // }

    // public function create()
    // {
    //     return view ('createmhs');
    // }

    public function create()
    {
        $org = organization::all();
        return view ('createmhs',compact ('org'));
    }

    // public function store()
    // {
    //     dd ('Berhasil');
    // }

    public function store(Request $request)
    {
        $post = new mahasiswa;
        $post ->organization_id = $request ->organization_id;
        $post->NPM = $request ->NPM;
        $post->Name = $request ->Name;
        $post ->slug = Str::slug($request ->NPM);
        $post->Class = $request ->Class;
        $post->Address = $request ->Address;

        // dd ($post);

        $post->save();
        return redirect('/list');
    }
    
    public function detail(Mahasiswa $mahasiswa)
    {
        $org = organization::all();
         //dd($organization);
         return view('editmhs', compact('mahasiswa','org'));
    }

    public function update(Mahasiswa $mahasiswa)
    {
        $mhs = request()->all();
        //dd($mhs);
        $mahasiswa->update($mhs);
        return redirect('/list');
    }

    public function delete(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('/list');
    }
}