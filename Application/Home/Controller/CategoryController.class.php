<?php
namespace Home\Controller;
class CategoryController extends CommonController {
    public function index(){
        if(!I('get.id', 0, 'intval')) $this->error('类别不存在！');
        $id = I('get.id');
        $category = D('category');
        $category_info = $category->find($id);
        $this->assign('category_info', $category_info);
        $article = D('article');
        $article_list = $article->where(['category_id'=> $id, 'status'=> 'active'])->order('display_order')->select();
        $this->assign('article_list', $article_list);
        $this->display('Front/category');
    }
}