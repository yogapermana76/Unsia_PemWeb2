<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function all()
    {
        $blogs = Blog::all();

        return response()->json($blogs, 200);
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->topik = $request->input('topik');
        $blog->materi = $request->input('materi');
        $blog->konten = $request->input('konten');
        $blog->keterangan = $request->input('keterangan');
        $blog->save();

        return response()->json($blog, 201);
    }

    public function show($id)
    {
        $blog = Blog::find($id);

        return response()->json($blog, 200);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->topik = $request->input('topik');
        $blog->materi = $request->input('materi');
        $blog->konten = $request->input('konten');
        $blog->keterangan = $request->input('keterangan');
        $blog->save();

        return response()->json($blog, 200);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return response()->json(null, 200);
    }
}
