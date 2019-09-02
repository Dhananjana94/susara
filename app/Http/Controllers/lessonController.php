<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lessonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function addTutorials()
    {
        return view('admin.layout.addTutorial');
    }

    protected function add(array $data)
    {
        return Lesson::create([
            'title' => $data['title'],
            'url' => $data['url'],
            
        ]);
        return redirect("Success");
        }
}