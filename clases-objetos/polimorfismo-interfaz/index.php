<?php

interface Search{
    public function all();
}

class User implements Search{
    public function all(){
        return 'user`';
    }
}

class Post implements Search
{
    public function all(){
        return 'post';
    }
}


$user = new User();
$post = new Post();

echo $user->all();
echo $post->all();