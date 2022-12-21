<?php

namespace App\View\Components\Post;

use Illuminate\View\Component;

class Form extends Component
{
    /**
     * The form method
     *
     * @var string
     */
    public $method;

    /**
     * The form action
     *
     * @var string
     */
    public $action;

    /**
     * The post title
     *
     * @var string
     */
    public $title;

    /**
     * The post content
     *
     * @var string
     */
    public $content;

    /**
     * The button title
     *
     * @var string
     */
    public $button;

    /**
     * The cancel button
     *
     * @var string|boolean
     */
    public $cancelButton;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($method, $action, $title = null, $content = null, $button, $cancelButton = false)
    {
        $this->method = $method;
        $this->action = $action;
        $this->title = $title;
        $this->content = $content;
        $this->button = $button;
        $this->cancelButton = $cancelButton;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post.form');
    }
}
