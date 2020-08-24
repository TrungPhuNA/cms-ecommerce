<?php

if(!function_exists('link_article'))
{
    function link_article($article)
    {
        return '/bai-viet/'.$article->a_slug.'-a';
    }
}

if(!function_exists('link_tag'))
{
    function link_tag($tag)
    {
        return '/bai-viet/'.$tag->t_slug.'-t';
    }
}
