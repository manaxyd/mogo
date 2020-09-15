<?php 
class Cms5f607407ac790457138343_5f8e190eb6b3c5df12fdce3576917028Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if (!$this->post)
        return App::make('Cms\Classes\Controller')->setStatusCode(404)->run('/404');
}
}
