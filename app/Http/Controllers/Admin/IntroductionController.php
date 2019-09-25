<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Introduction;
use App\Http\Requests\IntroductionRequest;

class IntroductionController extends Controller
{
    public function create()
    {
    	$data = Introduction::first()?? [];
    	return view('admin.introduction.create', ['data' => $data]);
    }

    public function store(IntroductionRequest $request)
    {
    	$data = Introduction::first();
    	if($data)
    	{
    		$data->delete();
    	}
    	if($request->hasFile('pictures'))
    	{
    		foreach($request->pictures as $pic)
    		{
    			$path[] = $pic->store('uploads'); 
    		}
    	}
    	$post = $request->content;
    	if(!empty($path))
    	{
    		$post['pictures'] = $path;
    	}
    	Introduction::create($post);
    } 
}
