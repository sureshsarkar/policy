<?php

use App\Models\Vote;


if (!function_exists('pre')) {
    function pre($data)
    {
        echo "<pre>";
        print_r($data);
        exit;
    }
}


if (!function_exists('voted')) {
    function voted($q_id)
    {
        $user = auth()->guard('employee')->user();
         $vote = Vote::where('question_id', $q_id)->where('user_id', $user->id)->select('id')->first();
    //    pre($vote);
        if (isset($vote->id) && !empty($vote->id)) {
            return true;
        } else {
            return false;
        }
        exit;
    }
}
