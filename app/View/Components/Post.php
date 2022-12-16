<?php

namespace App\View\Components;

use Illuminate\View\Component;
use \App\Models\Post as PostModel;

class Post extends Component
{
    /**
     * The post object
     *
     * @var PostModel
     */
    public PostModel $post;

    /**
     * Create a new component instance.
     *
     * @param PostModel $post
     * @return void
     */
    public function __construct(PostModel $post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post');
    }
}
