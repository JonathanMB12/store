<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct() 
     {
        $this->middleware('auth');
      }
     
      public function profile() 
      {
        $user = Auth::user();
        return view('usuarios.indexUsuarios', ['users' => $user], compact('user'));
      }
     
      public function update_profile(Request $request) {
        $this->validate($request, [
          'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');

            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('img/upload/avatars/' . $filename));
            
         
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('usuarios.editUsuarios', ['users' => $user], compact('user'));
      }
      public function index()
      {

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
        //
        

        //Debe estar $fillable o $guarded declarados en el Modelo
        User::create($request->all());
      
        return redirect()->route('user.profile');
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
    public function edit(User $user)
    {
        //
        return view ('usuarios.editUsuarios')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //

        User::where('id', $user->id)->update($request->except('_token', '_method'));
      
        return redirect()->route('user.profile', $user->id);
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
