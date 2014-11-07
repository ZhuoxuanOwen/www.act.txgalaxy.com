<?php

/*
 * 后台产品管理
 * auth:卓轩
 */

class Controller_Console_Product extends Controller_Template
{


    public function before()
    {
        $this->template = 'template/template_console';


        $action = $this->request->action();
        $output['nav_l1'] = '平台工具';
        $output['nav_l2'] = '接口测试';
        $output['action'] = $action;

        Zwidget::zadd('console/container', $output, 'page-content');

        return parent::before();
    }


    public function action_index()
    {

        $productList = Model_Portal_Product::instance()->get_product_list();


        $output = array('productList' => $productList);

        Zwidget::zadd('console/product_list', $output, 'page-container');

    }

    /**
     * 初始化 添加产品 页面
     */
    public function action_add()
    {

        $ptypeList = Model_Portal_Product::instance()->get_product_type();

        $output['ptypeList'] = $ptypeList;

        Zwidget::zadd('console/product_add', $output, 'page-container');

    }

    /**
     * 保存产品
     */
    public function action_save()
    {

        $title = request('productTitle');
        $type = request("productType");
        $model = request("productModel");
        $description = request('description');

        //保存图片
        $returnValue = self::saveImage($type);
        if(!$returnValue['success']){
           parent::showErrorMsg($returnValue['errorMsg']);
        }

        $product['product_type_id'] = $type;
        $product['product_title'] = $title;
        $product['product_img'] = $returnValue['image'];
        $product['product_model'] = $model;
        $product['product_description'] = $description;
        //调用数据库接口保存成功
        $rows = Model_Portal_Product::instance()->save_product($product);
        if($rows == 0){
            parent::showErrorMsg('保存产品失败');
        }else{
            parent::showMsg('保存产品成功');
        }
    }






}

?>
