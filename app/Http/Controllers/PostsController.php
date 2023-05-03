<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class PostsController extends Controller
{
    public function show(string $slug): View
    {
        $post = YamlFrontMatter::parse(
            File::get(storage_path("app/journal/{$slug}.md"))
        );

        return view('post', [
            'archived' => $post->matter('archived'),
            'writtenOn' => Carbon::parse($post->matter('date'))->format('F Y'),
            'body' => $post->body(),
            'title' => $post->matter('title'),
        ]);
    }
}
