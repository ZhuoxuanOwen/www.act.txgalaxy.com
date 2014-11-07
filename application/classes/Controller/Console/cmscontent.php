<?php

/*
 * 后台产品管理
 * auth:卓轩
 */

class Controller_Console_CmsContent extends Controller_Template
{


    public function before()
    {
        $this->template = 'template/template_console';


        $action = $this->request->action();

        $output['action'] = $action;

        Zwidget::zadd('console/container', $output, 'page-content');

        return parent::before();
    }


    public function action_index()
    {

        $cmsList = Model_Portal_CmsContent::instance()->get_cms_content_list();


        $output = array('cmsList' => $cmsList);

        Zwidget::zadd('console/cmscontent_list', $output, 'page-container');

    }

    /**
     * 初始化页面
     */
    public function action_add()
    {


        Zwidget::zadd('console/cmscontent_add', null, 'page-container');

    }

    /**
     * 保存产品
     */
    public function action_save()
    {



        $title = request('cmsTitle');
        $key = request('cmsKey');
        $desc = request('cmsDesc');
        $content = request('cmsContent');

        $cmsContent = array(
            'cms_key' => $key,
            'title' => $title,
            'description' => $desc,
            'content' => $content
        );

        //调用数据库接口保存成功
        $rows = Model_Portal_CmsContent::instance()->save_cms_content($cmsContent);
        if($rows > 0){
            parent::jsonReturn(1001,'保存区块内容成功');
        }else{
            parent::jsonReturn(1002,'保存区块内容失败');
        }
    }






}

?>
