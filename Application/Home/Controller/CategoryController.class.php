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

    public function all()
    {
        $this->_before_index();
        $category = D('category');
        $all_category_list = $category->select();
        $this->assign('all_category_list', $all_category_list);
        $this->display('Front/categories');
    }
}