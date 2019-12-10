<?php

class Post 
{
    public $title;

    public $published;

    public function __construct(string $title, Bool $published)
    {
        $this->title = $title;

        $this->published = $published;
    }
}

$posts = [
    new Post ('My First Post', true),
    new Post ('Will the Christmas be as usual', true),
    new Post ('Joy to the world', false),
    new Post ('The Reality of a me-first society', false),
];



$unpublishedPosts = array_filter ($posts, function($post){
      
    return ! $post->published;
});

$publishedPosts = array_filter ($posts, function ($post){

        return $post->published;
});

// Array Map: array map gets useful when you need to modified what gets returned

$modified = array_map(function ($post) {
    return (array) $post;
}, $posts);

$postTitle = array_map(function ($post){
    return['title' => $post->title];
}, $posts);


//array_column is used to get just the column of collection/array from the database

$titles = array_column($posts, 'title');

var_dump($titles);


