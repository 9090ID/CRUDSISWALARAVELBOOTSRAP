<?php

namespace App\Http\Controllers;
//use App\Siswa;
use Illuminate\Http\Request;
use Str;
class SiswaController extends Controller
{
    public function index(Request $request)
    {	
    	if($request->has('cari'))
    	{
    		$data_siswa = \App\Siswa::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
    	}
    	else
    	{
    		$data_siswa = \App\Siswa::all();
    	}
    
    	return view('siswa.index',['data_siswa'=> $data_siswa]);
    }
    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_depan' => 'min:5',
            'nama_belakang' => 'required',
            'email'=>'required|email|unique:users',
            'jenis_kelamin' =>'required',
            'agama' => 'required',
            'alamat' => 'required',
            'avatar' => 'mimes:jpg,png',
        ]);
        //insert user
    	$user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        //insert siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = \App\Siswa::create($request->all());
         if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
    	return redirect('/siswa')->with('sukses','Data Berhasil Diinput');

    }

     public function edit($id)
    {

    	$siswa = \App\Siswa::find($id);
    	return view('siswa/edit',['siswa' => $siswa]);

    }

      public function update(Request $request,$id)
    {

    	$siswa = \App\Siswa::find($id);
    	$siswa->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
    	return redirect('/siswa')->with('sukses','Data Berhasil Terupdate');
    }

    public function delete($id)
    {

    	$siswa = \App\Siswa::find($id);
    	$siswa->delete();
   		return redirect('/siswa')->with('sukses','Data Berhasil dihapus');
    }

      public function profile($id)
    {

        $siswa = \App\Siswa::find($id);
        $mapelajaran = \App\Mapel::all();
        return view('siswa.profile',['siswa' => $siswa, 'mapelajaran' => $mapelajaran]);
    }

       public function addnilai(Request $request,$idsiswa)
    {

       $siswa = \App\Siswa::find($idsiswa);
       if($siswa->mapel()->where('mapel_id',$request->mapel)->exists()) {
          return redirect('siswa/'.$idsiswa.'/profile')->with('error','Pelajaran Sudah Ada');
       }
       $siswa->mapel()->attach($request->mapel,['nilai' =>$request->nilai]);
       return redirect('siswa/'.$idsiswa.'/profile')->with('sukses','Nilai Suksess');

    }
}
