<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _before_index(){
        //头部类别菜单
        $category = D('category');
        $category_list = $category->order('display_order')->select();
        $this->assign('category_list', $category_list);

        //热门文章
        $hot_article_list = [];
        $this->assign('hot_article_list', $hot_article_list);
        //标签
        $tag = D('tag');
        $tag_list = $tag->order('display_order')->select();
        $this->assign('tag_list', $tag_list);
        //最新文章
        $new_article_list = [];
        $this->assign('new_article_list', $new_article_list);
    }
}