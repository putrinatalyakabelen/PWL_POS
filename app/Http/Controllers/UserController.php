<?php

namespace App\Http\Controllers;
use App\Models\UserModel; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        
    //$data =[
    //    'nama' => 'Pelanggan Pertama',
   // ];
   // UserModel::where('username', 'customer-1')->update ($data);


       //data = [
          //'username' => 'customer-1',
         // 'nama' => 'pelanggan',
         // 'password' => Hash::make('12345'),
         // 'level_id' => 1
       //;
    //  UserModel::insert($data);

      //  $user = UserModel::all(); // ambil semua data tabel
      //  return view('user', ['data' => $user]);

        // js 4
       // $data=[
          //  'level_id' =>2,
           // 'username' => 'manager_tiga',
           // 'nama' => 'Manager 3',
        //    'password' => Hash::make('12345')
      //  ];
     //   UserModel::create($data);
        
      //  $user = UserModel::all();
      //  return view('user',['data' => $user]);

     // $user = UserModel::find(1);
    //  return view('user',['data' => $user]);

   // $user = UserModel::where('username','manager9')->findOrFail(1);
   // return view('user',['data' => $user]);

  // $user = UserModel::where('level_id', 2)->count();
  // return view('user',['data'=> $user]);

  $user = UserModel::FirstOrNew(
    [
      'username' => 'manager33',
      'nama' => 'Manager Tiga Tiga',
     'password' => Hash::make('12345'),
     'level_id'=>2
    ],
  );
  $user->save();
  return view('user',['data'=>$user]);
}
}
