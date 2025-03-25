<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $data = Storage::disk('data')->json('projects.json');
        return view('pages.projects', $data);
    }
    
    public function show($id)
    {
        $project = [];

        $data = Storage::disk('data')->json('projects.json');
        foreach($data['items'] as $item){
            if($item['id'] == $id){
                $project = $item;
                break;
            }
        }

        return view('pages.project_details', $project);
    }
}
