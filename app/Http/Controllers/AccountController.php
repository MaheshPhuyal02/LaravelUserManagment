<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FormModel;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountController extends Controller
{
    public function create()
    {
        $url = url("/login");
        $update = false;
        $user = (object)[
            "name" => "",
            "password" => "",
            "email" => "",
        ];
        $title = "Create Account";
        $pass = "Enter Password";
        $data = compact("url", "update", "user", "title", "pass");
        return view("login")->with($data);
    }
    public function updateUser($id)
    {
        $update = true;
        $title = "Update Account";
        $url = url("/users/update") . "/" . $id;
        $pass = "Enter New Password";
        $user = FormModel::find($id);
        if (!is_null($user)) {
            $data = compact("url", "user", "update", "title", "pass");
        } else {
            return redirect("/users");
        }
        // print_r($data);

        return view("login")->with($data);
    }
    public function createAccount(Request $request)
    {

        $request->validate(
            [
                "name" => "required",
                "email" => "required|email",
                "password" => "required",
                'confirm_password' => 'required|same:password|'
            ]
        );

        try {
            $form = new FormModel();
            $form->name = $request["name"];
            $form->email = $request["email"];
            $form->password = md5($request["password"]);
            $form->save();
            return redirect("/users");
        } catch (QueryException $e) {
            $title = "Create Account";
            $url = "/login";
            $user = (object)[
                "name" => $form->name,
                "password" => $form->password,
                "email" => $form->email,
            ];
            $update = false;
            $pass = "Enter Password";
            $error = "Email Address already Exists.";
            $data = compact("error", "title", "url", "user", "pass", "update");
            return view("login")->with($data);
        }
    }
    public function helper($name)
    {
        $data = compact("name");
        return view("helper")->with($data);
    }
    public function updateUserPost($id, Request $request)
    {

        $request->validate(
            [
                "name" => "required",
                "email" => "required|email",
                "password" => "required",
                'confirm_password' => 'required|same:password|'
            ]
        );

        $form = FormModel::find($id);
        if (!is_null($form)) {
            $form->name = $request["name"];
            $form->email = $request["email"];
            $form->password = md5($request["password"]);
            $form->save();
            return redirect("/users");
        } else {
            echo "No user Found";
        }
    }

    public function getAllUsers()
    {
        $users = FormModel::all();
        // print_r($users);
        $data = compact("users");
        return view("users")->with($data);
    }
    public function deleteUser($id)
    {

        $user = FormModel::find($id);
        if (!is_null($user))
            $user->delete();
        return redirect("/users");
    }
    public function confirmDeleteUser($id)
    {
        $user = FormModel::find($id);
        if (!is_null($user))
            $user->forceDelete();
        return redirect("/users");
    }
    public function getSearchResult(Request $request)
    {

        // $users = FormModel::search($request["input"])->get();
        $users = FormModel::where('name', 'LIKE', "%{$request->input}%")
            ->orWhere('id', 'LIKE', "%{$request->input}%")
            ->get();
        $data = compact("users");

        return view("users")->with($data);
    }
    //creating function for session
    public function sessionCreate(){
        return view("session-create");
    }
    public function sessionView(){
        $sessions = session()->all();
        $data = compact("sessions");
        // echo "<pre>";
        // print_r($sessions);
        // echo "<pre>";
        return view("session-view")->with($data);
    }
    public function createSession(Request $request){
        $request->session()->put($request->key, $request->value);
        return redirect(url('/view-session'));
    }
    public function deleteSession(Request $request, $key){
        $request->session()->remove($key);
        echo "done";
        return redirect(url('/view-session'));
    }
    public function getAllTrashUsers(){
        $users = FormModel::onlyTrashed()->get();
        // print_r($users);
        $data = compact("users");
        return view("trash")->with($data);
    }
    public function restoreUser($id){
        $user = FormModel::withTrashed()->find($id);
        if (!is_null($user))
            $user->restore();
        return redirect("/users");
    }
}


