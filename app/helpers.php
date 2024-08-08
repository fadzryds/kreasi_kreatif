<?php 

use App\Models\Live;
use App\Models\partner;
use App\Models\section;
use App\Models\setting;

function get_settings_value($key) {
    $data = setting::where('key', $key)->first();
    if(isset($data->value)) {
        return $data->value;
    }else{
        return 'empty';
    }
}

function get_sections_data($id){
    $data = section::where('post_as', $id)->first();
    if(isset($data)) {
        return $data;
    }
}

function get_partners()
{
    $data = partner::all();
    return $data;
}

function get_lives()
{
    $data = Live::all();
    return $data;
}