<?php
/*
 * 后台登录系统首页
 * auth:卓轩
 */
class Controller_Console_Login extends  Controller_Template {


    public function before(){
        $this->template = 'template/template_console_login';


        $action = $this->request->action();
        $output['nav_l1'] = '平台工具';
        $output['nav_l2'] = '接口测试';
        $output['action'] = $action;

        Zwidget::zadd('console/login', $output, 'page-content');

		return parent::before();
    }


    public function action_index()
    {



       // Zwidget::zadd('zadmin/tool/servicecall', array(), 'work-continer');

    }
}
?>
