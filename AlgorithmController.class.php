<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行
 * Date: 2017/10/8
 * Time: 15:12
 */

namespace M\Controller;


use Common\Model\ZmModel;
use Think\Controller;

/**
 * Class AlgorithmController
 * @package M\Controlle
 * 算法学习类 algorithm
 */
class AlgorithmController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        header("Content-Type:text/html;charset=utf-8");
    }

public function deepCate(){
    $zmModel = new ZmModel();
    $cateListDown = $zmModel->deepCatesForDown(0,6);
    $cateListUp = $zmModel->deepCatesForUp(10);

    $cateListPathDown = $zmModel->deepCatesFullPathForDown();
    $cateListPathUp = $zmModel->deepCatesFullPathForUp(10);
    //var_dump($cateListPathUp);
    $this->assign('cateListDown',$cateListDown);
    $this->assign('cateListUp',$cateListUp);

    $this->assign('cateListPathDown',$cateListPathDown);
    $this->assign('cateListPathUp',$cateListPathUp);
    $this->display();
}















}