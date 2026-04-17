<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KeyFeature;
use App\Helper\Upload;
use Validator;

class KeyFeatureController extends Controller{
    
    public function __construct(KeyFeature $model){
        $this->model=$model;
        $this->admin_base_url="key-features.index";
        $this->admin_view="admin.key-features";
    }

    
    public function index(){
        $data=$this->model::orderBy("id","desc")->get();
        return view($this->admin_view.".index",compact("data"));
    }

    
    public function create(){
        return view($this->admin_view.".create");
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            
        ]);   
        if($validator->fails()){
            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());
        }
        $data=$request->all();
        // if ($request->hasFile("image")) {
        //     $data['image'] = Upload::fileUpload($request->file("image"),"key-features");
        // }
        // if ($request->hasFile("bannerImage")) {
        //     $data['bannerImage'] = Upload::fileUpload($request->file("bannerImage"),"key-features");
        // }
        $this->model::create($data);
        return redirect()->route($this->admin_base_url)->with("success","Successfully Added");
    }

  
    public function show($id){
        return redirect()->route($this->admin_base_url);
    }

   
    public function edit($id){
        $data=$this->model::find($id);
        if($data){
            return view($this->admin_view.".edit",compact("data"));
        }
        return redirect()->route($this->admin_base_url)->with("danger","Invalid Calling");
    }

  
    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            
        ]);   
        if($validator->fails()){
            return redirect()->back()->withInput()->with("danger",$validator->errors()->first())->withErrors($validator->errors());
        }
        $exist=$this->model::find($id);
        if($exist){
            $data=$request->all();
            // if ($request->hasFile("image")) {
            //     $data['image'] = Upload::fileUpload($request->file("image"),"key-features");
            // }
            // if ($request->hasFile("bannerImage")) {
            //     $data['bannerImage'] = Upload::fileUpload($request->file("bannerImage"),"key-features");
            // }
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
