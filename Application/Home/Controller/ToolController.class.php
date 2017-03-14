<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 2017/3/12
 * Time: 下午11:49
 */
namespace Home\Controller;
use Think\Controller;
use Think\Build;
class ToolController extends Controller
{
    public function generate_controller()
    {
        $controller = I('get.controller');
        Build::buildController('Home', ucfirst($controller));
        echo 'success';
    }
    public function generate_model()
    {
        $model = I('get.model');
        Build::buildModel('Home', ucfirst($model));
        echo 'success';
    }
}