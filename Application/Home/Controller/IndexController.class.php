<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //推荐文章
        $article = D('article');
        $article_list = $article->getRecommandArticle();
        $this->assign('article_list', $article_list);
        //标签
        $tag = D('tag');
        $tag_list = $tag->order('display_order')->select();
        $this->assign('tag_list', $tag_list);
        $this->display('front/homepage');
    }
}