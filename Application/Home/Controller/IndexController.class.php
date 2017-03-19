<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        //推荐文章
        $article = D('article');
        $article_list = $article->getRecommandArticle();
        $this->assign('article_list', $article_list);
        $this->display('Front/homepage');
    }
}