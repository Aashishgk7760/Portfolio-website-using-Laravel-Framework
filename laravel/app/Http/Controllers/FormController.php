<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Quotation;
use App\Form;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('forms.signup');
    }
    public function signup()
    {
        return view('users.signup');
    }
    public function homepage()
    {
        return view('users.homepage');
    }
    public function aboutme()
    {
        return view('users.aboutme');
    }
    public function skills()
    {
        return view('users.skills');
    }
    public function resume()
    {
        return view('users.resume');
    }
    public function portfolio()
    {
        return view('users.portfolio');
    }
    public function reference()
    {
        return view('users.reference');
    }
    public function hireme()
    {
        return view('users.hireme');
    }
    public function logout()
    {
        return view('users.index');
    }
    
    public function logs(Request $request){
        $username=$request->input('uname');
        $pass=$request->input('psw');
        $data=DB::select('SELECT * FROM forms  WHERE username= ? && PSD=?',[$username,$pass]);
        if (count($data)){
            
           return view('users.homepage');
        }
        else{
           
            return view('/users.index');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Lname'=> 'required',
            'email'=>'required',
            'user'=>'required',
            'psw'=>'required',
            'pswrep'=>'required'
            ]);
            $form= new Form();
            $form->Firstname=$request->get('Name');
            $form->Lastname=$request->get('Lname');
            $form->Email=$request->get('email');
            $form->userName=$request->get('user');
            $form->PSD=$request->get('psw');
            $form->CPSD=$request->get('pswrep');
            $form->save();
            return view('/users.index')->with('success', 'user has been registered successfully');
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
