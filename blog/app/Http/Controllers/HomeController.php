<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Task;
use Response;
use Redirect;

class HomeController extends Controller
{
    public function index(){
        
        return view('index');
    }
    public function home(){
        if(Auth::guest()){
            return Redirect::to('auth/login');
        }
        else{
            $tasks = Task::orderBy('created_at', 'asc')->get();
            return view('home',['tasks' => $tasks]);
        }
    }
    public function task(Request $request){
            $this->validate($request, [
                'name' => 'required',
                'task' => 'required',
            ]);
            $task= new Task;
            $task->name=$request['name'];
            $task->task=$request['task'];
            $task->save();
            
           return response()->json($task);

    }
    public function destroy( Request $request ) {
        $id = $request->get('id');
        $productid= Task::findOrFail($id);
        if ( $request->ajax()){
            $productid->delete( $request->all() );
            return response(['msg' => 'Product deleted', 'status' => 'success']);
        }
        return response(['msg' => 'Failed deleting the product', 'status' => 'failed']);
    }
}
