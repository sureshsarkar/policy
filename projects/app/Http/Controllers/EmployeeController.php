<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Models\Deal;
use App\Models\Question;
use App\Models\Vote;


class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $CategoryId = '';
        if (isset($request->category_id) && $request->category_id != '') {
            $CategoryId = base64_decode($request->category_id);
        }

        $data = new \stdClass();
        $data->title = "User Dashboard ";
        $data->meta_title = "User Dashboard";
        $data->meta_keywords = "User Dashboard";
        $data->meta_description = "User Dashboard";
        $user = Auth::guard('employee')->user();
        $questionCategory = Deal::where('publish', 'published')
            ->select('id', 'title', 'publish')
            ->get();

        $questions = Question::where('publish', 'published')
            ->when($CategoryId, function ($query, $CategoryId) {
                return $query->where('category_id', $CategoryId);
            })
            ->with(['votes' => function ($query) use ($user) {
                $query->where('user_id', $user->id)
                    ->select('question_id'); // add columns you want
            }])
            ->select('id', 'title', 'publish', 'category_id')
            ->get();


            $vodetQuestions = Question::where('publish', 'published')
              ->whereHas('votes', function ($query) use ($user) {
               $query->where('user_id', $user->id);
                })
                ->select('id', 'title', 'publish', 'category_id')
                ->get();
            


        return view('front.user.dashboard', compact('user', 'data', 'questionCategory', 'questions','vodetQuestions'));
    }

    public function voteNow(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->with("danger", $validator->errors()->first())->withErrors($validator->errors());
        }
        $user = Auth::guard('employee')->user();
        $exist = Vote::where('question_id',$request->id)->where('user_id',$user->id)->first();

        if(!$exist){
            $data['question_id'] = $request->id;
            $data['user_id'] = $user->id;
            $data = Vote::create($data);
            return response()->json(['success' => true, 'message' => 'Voted.']);
        }else{
            return response()->json(['success' => false, 'message' => 'Already Voted.']);
        }
    }
}
