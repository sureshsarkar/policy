<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BreakingNews;
use App\Helper\Upload;
use Carbon\Carbon;

class BreakingNewsController extends Controller{

    public function __construct(BreakingNews $model){
        $this->model=$model;
        $this->admin_base_url="breaking-news.index";
        $this->admin_view="admin.breaking-news";
    }


    public function index(){
        $data=$this->model::orderBy("id","desc")->get();
        return view($this->admin_view.".index",compact("data"));
    }


    public function create(){
        return view($this->admin_view.".create");
    }

    public function store(Request $request){
        $data=$request->all();
        if ($request->hasFile("image")) {
            $data['image'] = Upload::fileUpload($request->file("image"),"breaking-news");
        }
        if ($request->hasFile("image2")) {
            $data['image2'] = Upload::fileUpload($request->file("image2"),"breaking-news");
        }
        $this->model::create($data);
        return redirect()->route($this->admin_base_url)->with("success","Successfully Added");
    }


    public function show($id){
        return redirect()->route($this->admin_base_url);
    }

    public function copyData($id){
        $data=$this->model::find($id);
        if($data){

            $newPost = $data->replicate();
            $newPost->created_at = Carbon::now();
            $newPost->save();
            return redirect()->route($this->admin_base_url)->with("success","Successfully Coppied");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }


    public function edit($id){
        $data=$this->model::find($id);
        if($data){
            return view($this->admin_view.".edit",compact("data"));
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }
    public function active($id){
        $data=$this->model::find($id);
        if($data){
            $data->status="active";
            $data->save();
            return redirect()->route($this->admin_base_url)->with("success","Successfully active");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }
    public function deactive($id){
        $data=$this->model::find($id);
        if($data){
            $data->status="deactive";
            $data->save();
            return redirect()->route($this->admin_base_url)->with("success","Successfully deactive");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }


    public function update(Request $request, $id){
        $exist=$this->model::find($id);
        if($exist){
            $data=$request->all();
            if ($request->hasFile("image")) {
                $data['image'] = Upload::fileUpload($request->file("image"),"breaking-news");
            }
            if ($request->hasFile("image2")) {
                $data['image2'] = Upload::fileUpload($request->file("image2"),"breaking-news");
            }

            $this->model::find($id)->update($data);
            return redirect()->route($this->admin_base_url)->with("success","Successfully Updated");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }

    public function destroy($id){
        $exist=$this->model::find($id);
        if($exist){
            $exist->delete();
            return redirect()->route($this->admin_base_url)->with("success","Successfully Deleted");
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }
}
