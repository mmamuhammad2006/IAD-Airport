<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChangeContent;
use Illuminate\Http\Request;

class ChangeContentController extends Controller
{
    public function allPages()
    {
        return view('admin.dashboard.allPages');
    }

    public function editContent($page)
    {
        $contents = ChangeContent::where('page', $page)->get();
        return view('admin.dashboard.changeContent', compact('contents'));
    }

    public function updateContent(Request $request)
    {
        // return $request;
        try {
            foreach ($request->all() as $key => $value) {
                ChangeContent::updateOrCreate(['key' => $key], ['value' => $value]);
            }
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    // public function editContent()
    // {
    //     $contents = ChangeContent::all();
    //     return $contents;
    // }
}
