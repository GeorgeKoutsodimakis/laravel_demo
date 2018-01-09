<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Event;
class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $user = User::all();
        return view('users.index',compact('user'));
    }

    public function show($id)
    {
        //
        $userEvent = Event::with('user')->where('user_id',$id)->get();
        return view('users.events',compact('userEvent'));
    }
}