<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Post;
use App\Tag;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body'  => 'required',
            'photos' => '',
            'tags' => ''
        ));

        $id = DB::table('posts')->insertGetId([
            'title'         => $request->title,
            'body'          => $request->body,
            'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        $tags = $request->tags;
        $tags = strtolower($tags);
        $tags = preg_split("/[\s,]+/", $tags);

        $new_post = Post::find($id);

        foreach ($tags as $tag) {

          $ex_tag = DB::table('tags')
                    ->where('tag_name', $tag)
                    ->first();

          if (!$ex_tag) {

            $tag_id = DB::table('tags')
                        ->insertGetId(['tag_name' => $tag]);
            DB::table('posts_tags')->insertGetId(['post_id' => $id, 'tag_id' => $tag_id]);

          } else {

            DB::table('posts_tags')->insertGetId(['post_id' => $id, 'tag_id' => $ex_tag["tag_id"]]);

          }

        }

        $files = $request->file('photos');

        if ($request->hasFile('photos')) {
            foreach ($files as $file) {
                $path = $file->store(
                    '/public/'.$id
                );
                //deploy
                // Storage::disk('local')->put('/public/'.$id, $file);

                // development
                $path = 'storage/'.substr($path, 7);

                $photo_id = DB::table('photos')->insertGetId([
                    'photo_path'    => $path,
                    'post_id'      => $id,
                    'created_at'    => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'    => Carbon::now()->format('Y-m-d H:i:s')
                ]);
            }
        }

        return redirect()->route('posts.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = DB::table('posts')->where('posts.post_id', '=', $id)->first();
        $photos = DB::table('photos')->where('photos.post_id', '=', $id)->get();
        $tags = DB::table('posts_tags')->join('tags', 'tags.tag_id', '=', 'posts_tags.tag_id')
                ->where('posts_tags.post_id', '=', $id)->get();

        return view('posts.show')->with(['post' => $post,
                                        'photos' => $photos,
                                        'tags' => $tags]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
