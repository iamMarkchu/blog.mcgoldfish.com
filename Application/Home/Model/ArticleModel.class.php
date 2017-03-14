<?php
namespace Home\Model;
use Think\Model;
class ArticleModel extends Model {

    public function getRecommandArticle()
    {
        $result = $this->field('article.*,category.category_name')->join('category ON article.category_id = category.id', 'LEFT')->select();
        return $result;
    }
}