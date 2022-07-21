<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', ['news' => $news]);
    }
    public function create()
    {
        return view('admin.news.create');
    }
    public function postCreate(NewsRequest $request)
    {
        $news = $request->all();
        if ($request->hasFile('news_image')) {
            $file = $request->file('news_image');
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            $imageName = null;
        }
        $p = new News($news);
        $p->news_title = $news['news_title'];
        $p->news_desc = $news['news_desc'];
        $p->news_content = $news['news_content'];
        $p->news_image = $imageName;
        $p->save();
        return redirect()->route('admin.news.index');
    }
    public function update($news_id)
    {
        $p = News::find($news_id);
        return view('admin.news.update', ['p' => $p]);
    }
    public function postUpdate(Request $request, $news_id)
    {
        $news = $request->all();
        if ($request->hasFile('news_image')) {
            $file = $request->file('news_image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect()->route('admin.news.update')->with('thongbao', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            $p = News::find($news_id);
            $imageName = $p->news_image;
        }
        $p = News::find($news_id);
        $p->news_title = $news['news_title'];
        $p->news_desc = $news['news_desc'];
        $p->news_content = $news['news_content'];
        $p->news_image = $imageName;
        $p->save();
        return redirect()->route('admin.news.index');
    }

    public function delete($news_id)
    {
        $p = News::find($news_id);
        $p->delete();
        return redirect()->route('admin.news.index');
    }

    public function details($news_id)
    {
        $p = News::find($news_id);
        return view('admin.news.details', ['p' => $p]);
    }

    public function news()
    {
        $news = News::all();
        return view('user.pages.news', ['news' => $news]);
    }

    public function news_details($news_id)
    {
        $p = News::find($news_id);
        return view('user.pages.news_details', ['p' => $p]);
    }
}
