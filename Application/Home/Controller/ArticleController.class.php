<?php
namespace Home\Controller;
use Common\Util\Parsedown;
class ArticleController extends CommonController {
    public function index()
    {
        if(!I('get.id', 0, 'intval')) $this->error('文章不存在！');
        $id = I('get.id');
        $article = D('article');
        //获取文章内容
        $maps = [
            'article.id' => $id,
            'article.status' => 'active',
        ];
        $result = $article->field('article.*,category.`category_name` as cate_name')
            ->join('LEFT JOIN category ON article.category_id = category.id')
            ->where($maps)->find();
        if(empty($result)) $this->error('文章不存在!');
        $parsedown = new Parsedown();
        $content = htmlspecialchars_decode($result['content']);
        $result['markdown'] = $parsedown->text($content);
        $result['markdown'] = stripslashes($result['markdown']);
        $this->assign('result', $result);
        $this->display('Front/article');
    }
    public function search()
    {
        $keyword = I('get.keyword', '');
        if(empty($keyword))
        {
            $search_list = [];
        }else{
            $keyword = trim($keyword);
            $article = D('article');
            $maps = [
                'status' => 'active',
                'title' => ['LIKE', "%{$keyword}%"]
            ];
            $search_list = $article->where($maps)->order('display_order,source')->select();
        }
        $this->assign('search_list', $search_list);
        $this->display('Public/search-block');
    }
}