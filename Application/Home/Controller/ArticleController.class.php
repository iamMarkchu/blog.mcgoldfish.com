<?php
namespace Home\Controller;
use Think\Controller;
use Common\Util\Parsedown;
class ArticleController extends Controller {
    public function index(){

    }

    public function view()
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
        $parsedown = new Parsedown();
        $content = htmlspecialchars_decode($result['content']);
        $result['markdown'] = $parsedown->text($content);
        $this->assign('result', $result);
        $this->display('front/article');
    }
}