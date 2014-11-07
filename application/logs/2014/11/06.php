<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-06 08:32:44 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php:67
2014-11-06 08:32:44 --- DEBUG: #0 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('bdshare_firstim...', NULL)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('bdshare_firstim...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php:67
2014-11-06 08:34:15 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php:67
2014-11-06 08:34:15 --- DEBUG: #0 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('bdshare_firstim...', NULL)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('bdshare_firstim...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php:67
2014-11-06 08:34:17 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php:67
2014-11-06 08:34:17 --- DEBUG: #0 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('bdshare_firstim...', NULL)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('bdshare_firstim...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php:67
2014-11-06 08:34:18 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php:67
2014-11-06 08:34:18 --- DEBUG: #0 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('bdshare_firstim...', NULL)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('bdshare_firstim...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Cookie.php:67
2014-11-06 08:35:57 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php:137
2014-11-06 08:35:57 --- DEBUG: #0 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php:137
2014-11-06 08:37:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php:137
2014-11-06 08:37:26 --- DEBUG: #0 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php:137
2014-11-06 08:38:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Zwidget' not found ~ APPPATH/views/template/template_portal.php [ 123 ] in file:line
2014-11-06 08:38:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-06 08:48:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Starsky_ReadExcel' not found ~ APPPATH/classes/Controller/Welcome.php [ 18 ] in file:line
2014-11-06 08:48:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-06 08:57:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Zwidget' not found ~ APPPATH/classes/Controller/Console/Index.php [ 18 ] in file:line
2014-11-06 08:57:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-06 08:58:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Zwidget' not found ~ APPPATH/classes/Controller/Console/Index.php [ 18 ] in file:line
2014-11-06 08:58:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-06 08:58:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Zwidget' not found ~ APPPATH/classes/Controller/Console/Index.php [ 18 ] in file:line
2014-11-06 08:58:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-06 09:05:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view template/template_console could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php:137
2014-11-06 09:05:04 --- DEBUG: #0 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template/templa...')
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template/templa...', NULL)
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template/templa...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Console/Index.php(22): Kohana_Controller_Template->before()
#4 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(69): Controller_Console_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Console_Index))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/View.php:137
2014-11-06 09:19:40 --- EMERGENCY: ErrorException [ 8192 ]: Assigning the return value of new by reference is deprecated ~ APPPATH/classes/Model/Excel/Reader.php [ 261 ] in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Core.php:511
2014-11-06 09:19:40 --- DEBUG: #0 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(8192, 'Assigning the r...', '/Users/zhuoxuan...', 261, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Excel_Rea...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Console/Index.php(29): spl_autoload_call('Model_Excel_Rea...')
#4 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Console_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Console_Index))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Core.php:511
2014-11-06 09:21:23 --- EMERGENCY: ErrorException [ 8192 ]: Assigning the return value of new by reference is deprecated ~ APPPATH/classes/Model/Excel/Reader.php [ 261 ] in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Core.php:511
2014-11-06 09:21:23 --- DEBUG: #0 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(8192, 'Assigning the r...', '/Users/zhuoxuan...', 261, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_Excel_Rea...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Console/Index.php(29): spl_autoload_call('Model_Excel_Rea...')
#4 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Console_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Console_Index))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Core.php:511
2014-11-06 23:19:54 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Welcome.php [ 18 ] in file:line
2014-11-06 23:19:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-06 23:20:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function load_cms_content() ~ APPPATH/classes/Controller/Welcome.php [ 18 ] in file:line
2014-11-06 23:20:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-06 23:22:28 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 11 ] in file:line
2014-11-06 23:22:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 11, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(11): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:26:19 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 11 ] in file:line
2014-11-06 23:26:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 11, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(11): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:26:30 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 11 ] in file:line
2014-11-06 23:26:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 11, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(11): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:26:31 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 11 ] in file:line
2014-11-06 23:26:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 11, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(11): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:26:32 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 11 ] in file:line
2014-11-06 23:26:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 11, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(11): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:26:32 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 11 ] in file:line
2014-11-06 23:26:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 11, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(11): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:26:33 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 11 ] in file:line
2014-11-06 23:26:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 11, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(11): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:27:04 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 13 ] in file:line
2014-11-06 23:27:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 13, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(13): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:28:47 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:28:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:29:27 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:29:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:29:27 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:29:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:29:28 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:29:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:31:56 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:31:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:31:57 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:31:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:31:57 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:31:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:31:58 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:31:58 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:31:58 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:31:58 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:35:36 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/test.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:35:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/test.js...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/test.js...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:35:37 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/test.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:35:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/test.js...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(18): load_cms_content('section/test.js...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:39:52 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/test.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:39:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/test.js...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(20): load_cms_content('section/test.js...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:40:17 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/test.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:40:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/test.js...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(20): load_cms_content('section/test.js...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:40:51 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(/section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:40:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('/section/2014_1...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(20): load_cms_content('/section/2014_1...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:41:54 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:41:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(20): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:43:17 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:43:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(20): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:43:18 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:43:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(20): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:43:18 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:43:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(20): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:44:08 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:44:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(20): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:44:09 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:44:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(20): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:44:09 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:44:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(20): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line
2014-11-06 23:44:10 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(section/2014_1111_tm_xiezi.json): failed to open stream: No such file or directory ~ MODPATH/starsky/function.php [ 14 ] in file:line
2014-11-06 23:44:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/zhuoxuan...', 14, Array)
#1 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/modules/starsky/function.php(14): file_get_contents('section/2014_11...')
#2 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/application/classes/Controller/Welcome.php(20): load_cms_content('section/2014_11...')
#3 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/zhuoxuan/techsite/www.act.txgalaxy.com/public/index.php(121): Kohana_Request->execute()
#9 {main} in file:line