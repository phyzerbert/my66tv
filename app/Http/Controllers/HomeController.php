<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Main;
use App\SubPage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function main(Request $request) {
        return view('admin.main');
    }

    public function main_save(Request $request) {
        $item = Main::where('name', $request->get('name'))->first();
        $item->link = $request->get('link');
        if($request->hasFile("image") && $request->file('image') != null){
            $picture = request()->file('image');
            $imageName = time().'.'.$picture->getClientOriginalExtension();
            $picture->move(public_path('images/main/'), $imageName);
            $image_url = 'images/main/'.$imageName;
            $item->image = $image_url;
        }
        $item->save();
        return back()->with('success', 'Updated Successfully');
    }

    public function sub_page(Request $request) {
        $data = SubPage::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.sub', compact('data'));
    }

    public function sub_page_save(Request $request) {
        $item = new SubPage();
        $item->title = $request->get('title');
        $item->count = $request->get('count');
        $item->url = $request->get('url');
        if($request->hasFile("image") && $request->file('image') != null){
            $picture = request()->file('image');
            $imageName = time().'.'.$picture->getClientOriginalExtension();
            $picture->move(public_path('images/sub_page/'), $imageName);
            $image_url = 'images/sub_page/'.$imageName;
            $item->image = $image_url;
        }
        $item->save();
        return back()->with('success', 'Saved Successfully');
    }

    

    public function sub_page_update(Request $request) {
        $item = SubPage::find($request->get('id'));
        $item->title = $request->get('title');
        $item->count = $request->get('count');
        $item->url = $request->get('url');
        if($request->hasFile("image") && $request->file('image') != null){
            $picture = request()->file('image');
            $imageName = time().'.'.$picture->getClientOriginalExtension();
            $picture->move(public_path('images/sub_page/'), $imageName);
            $image_url = 'images/sub_page/'.$imageName;
            $item->image = $image_url;
        }
        $item->save();
        return back()->with('success', 'Updated Successfully');
    }

    public function sub_page_delete($id) {
        SubPage::destroy($id);
        return back()->with('success', 'Deleted Successfully');
    }
}
