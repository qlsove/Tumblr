<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-17 10:49:19 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'qlsove.photos' doesn't exist [ SELECT `path` FROM `photos` WHERE `post_id` = 128751419268 AND `login` = 'ghostphotographs' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2015-09-17 10:49:19 --- DEBUG: #0 /var/www/html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `path` F...', false, Array)
#1 /var/www/html/application/classes/Model/Photos.php(21): Kohana_Database_Query->execute()
#2 /var/www/html/application/classes/Controller/Profile.php(49): Model_Photos->getPost(128751419268, 'ghostphotograph...')
#3 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_photos()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#6 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/index.php(57): Kohana_Request->execute()
#9 {main} in /var/www/html/modules/database/classes/Kohana/Database/Query.php:251
2015-09-17 11:36:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Ajax.php [ 40 ] in file:line
2015-09-17 11:36:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-17 11:37:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Ajax.php [ 40 ] in file:line
2015-09-17 11:37:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-17 11:41:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Ajax.php [ 40 ] in file:line
2015-09-17 11:41:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-17 11:51:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Ajax.php [ 40 ] in file:line
2015-09-17 11:51:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-17 11:52:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Ajax.php [ 40 ] in file:line
2015-09-17 11:52:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-17 11:52:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Ajax.php [ 40 ] in file:line
2015-09-17 11:52:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-17 14:02:31 --- EMERGENCY: Guzzle\Http\Exception\CurlException [ 0 ]: [curl] 6: Could not resolve host: api.tumblr.com [url] http://api.tumblr.com/v2/blog/ghostphotographs.tumblr.com/avatar/128?api_key=9lwcLfP1HHbHF44L0bQwmRWhkQxkol05WgdW4wQVHUwJpZ9DBk ~ APPPATH/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php [ 359 ] in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 14:02:31 --- DEBUG: #0 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(292): Guzzle\Http\Curl\CurlMulti->isCurlException(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#1 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#2 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#3 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#4 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#5 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#6 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#7 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Message/Request.php(198): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#8 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/RequestHandler.php(115): Guzzle\Http\Message\Request->send()
#9 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(468): Tumblr\API\RequestHandler->request('GET', 'v2/blog/ghostph...', Array)
#10 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(441): Tumblr\API\Client->makeRequest('GET', 'v2/blog/ghostph...', NULL, true)
#11 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(277): Tumblr\API\Client->getRedirect('v2/blog/ghostph...', NULL, true)
#12 /var/www/html/application/classes/Controller/Profile.php(28): Tumblr\API\Client->getBlogAvatar('ghostphotograph...', 128)
#13 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_info()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#16 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/index.php(57): Kohana_Request->execute()
#19 {main} in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 14:23:57 --- EMERGENCY: Guzzle\Http\Exception\CurlException [ 0 ]: [curl] 6: Could not resolve host: api.tumblr.com [url] http://api.tumblr.com/v2/blog/ghostphotographs.tumblr.com/avatar/128?api_key=9lwcLfP1HHbHF44L0bQwmRWhkQxkol05WgdW4wQVHUwJpZ9DBk ~ APPPATH/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php [ 359 ] in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 14:23:57 --- DEBUG: #0 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(292): Guzzle\Http\Curl\CurlMulti->isCurlException(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#1 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#2 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#3 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#4 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#5 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#6 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#7 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Message/Request.php(198): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#8 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/RequestHandler.php(115): Guzzle\Http\Message\Request->send()
#9 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(468): Tumblr\API\RequestHandler->request('GET', 'v2/blog/ghostph...', Array)
#10 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(441): Tumblr\API\Client->makeRequest('GET', 'v2/blog/ghostph...', NULL, true)
#11 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(277): Tumblr\API\Client->getRedirect('v2/blog/ghostph...', NULL, true)
#12 /var/www/html/application/classes/Controller/Profile.php(40): Tumblr\API\Client->getBlogAvatar('ghostphotograph...', 128)
#13 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_photos()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#16 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/index.php(57): Kohana_Request->execute()
#19 {main} in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 14:24:24 --- EMERGENCY: Guzzle\Http\Exception\CurlException [ 0 ]: [curl] 6: Could not resolve host: api.tumblr.com [url] http://api.tumblr.com/v2/blog/ghostphotographs.tumblr.com/avatar/128?api_key=9lwcLfP1HHbHF44L0bQwmRWhkQxkol05WgdW4wQVHUwJpZ9DBk ~ APPPATH/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php [ 359 ] in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 14:24:24 --- DEBUG: #0 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(292): Guzzle\Http\Curl\CurlMulti->isCurlException(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#1 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#2 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#3 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#4 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#5 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#6 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#7 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Message/Request.php(198): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#8 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/RequestHandler.php(115): Guzzle\Http\Message\Request->send()
#9 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(468): Tumblr\API\RequestHandler->request('GET', 'v2/blog/ghostph...', Array)
#10 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(441): Tumblr\API\Client->makeRequest('GET', 'v2/blog/ghostph...', NULL, true)
#11 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(277): Tumblr\API\Client->getRedirect('v2/blog/ghostph...', NULL, true)
#12 /var/www/html/application/classes/Controller/Profile.php(40): Tumblr\API\Client->getBlogAvatar('ghostphotograph...', 128)
#13 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_photos()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#16 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/index.php(57): Kohana_Request->execute()
#19 {main} in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 14:25:00 --- EMERGENCY: Guzzle\Http\Exception\CurlException [ 0 ]: [curl] 6: Could not resolve host: api.tumblr.com [url] http://api.tumblr.com/v2/blog/ghostphotographs.tumblr.com/avatar/128?api_key=9lwcLfP1HHbHF44L0bQwmRWhkQxkol05WgdW4wQVHUwJpZ9DBk ~ APPPATH/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php [ 359 ] in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 14:25:00 --- DEBUG: #0 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(292): Guzzle\Http\Curl\CurlMulti->isCurlException(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#1 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#2 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#3 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#4 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#5 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#6 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#7 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Message/Request.php(198): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#8 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/RequestHandler.php(115): Guzzle\Http\Message\Request->send()
#9 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(468): Tumblr\API\RequestHandler->request('GET', 'v2/blog/ghostph...', Array)
#10 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(441): Tumblr\API\Client->makeRequest('GET', 'v2/blog/ghostph...', NULL, true)
#11 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(277): Tumblr\API\Client->getRedirect('v2/blog/ghostph...', NULL, true)
#12 /var/www/html/application/classes/Controller/Profile.php(40): Tumblr\API\Client->getBlogAvatar('ghostphotograph...', 128)
#13 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_photos()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#16 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/index.php(57): Kohana_Request->execute()
#19 {main} in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 14:25:59 --- EMERGENCY: Guzzle\Http\Exception\CurlException [ 0 ]: [curl] 6: Could not resolve host: api.tumblr.com [url] http://api.tumblr.com/v2/blog/ghostphotographs.tumblr.com/avatar/128?api_key=9lwcLfP1HHbHF44L0bQwmRWhkQxkol05WgdW4wQVHUwJpZ9DBk ~ APPPATH/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php [ 359 ] in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 14:25:59 --- DEBUG: #0 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(292): Guzzle\Http\Curl\CurlMulti->isCurlException(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#1 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#2 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#3 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#4 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#5 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#6 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#7 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Message/Request.php(198): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#8 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/RequestHandler.php(115): Guzzle\Http\Message\Request->send()
#9 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(468): Tumblr\API\RequestHandler->request('GET', 'v2/blog/ghostph...', Array)
#10 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(441): Tumblr\API\Client->makeRequest('GET', 'v2/blog/ghostph...', NULL, true)
#11 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(277): Tumblr\API\Client->getRedirect('v2/blog/ghostph...', NULL, true)
#12 /var/www/html/application/classes/Controller/Profile.php(40): Tumblr\API\Client->getBlogAvatar('ghostphotograph...', 128)
#13 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_photos()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#16 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/index.php(57): Kohana_Request->execute()
#19 {main} in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 16:02:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Ajax.php [ 55 ] in file:line
2015-09-17 16:02:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-17 16:07:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: img ~ APPPATH/classes/Controller/Ajax.php [ 52 ] in /var/www/html/application/classes/Controller/Ajax.php:52
2015-09-17 16:07:06 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ajax.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 52, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_crop()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(57): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ajax.php:52
2015-09-17 16:07:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: img ~ APPPATH/classes/Controller/Ajax.php [ 52 ] in /var/www/html/application/classes/Controller/Ajax.php:52
2015-09-17 16:07:55 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ajax.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/a...', 52, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_crop()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(57): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ajax.php:52
2015-09-17 16:12:24 --- EMERGENCY: Guzzle\Http\Exception\CurlException [ 0 ]: [curl] 6: Could not resolve host: api.tumblr.com [url] http://api.tumblr.com/v2/blog/ghostphotographs.tumblr.com/avatar/128?api_key=9lwcLfP1HHbHF44L0bQwmRWhkQxkol05WgdW4wQVHUwJpZ9DBk ~ APPPATH/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php [ 359 ] in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 16:12:24 --- DEBUG: #0 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(292): Guzzle\Http\Curl\CurlMulti->isCurlException(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#1 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#2 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#3 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#4 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#5 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#6 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#7 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Message/Request.php(198): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#8 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/RequestHandler.php(115): Guzzle\Http\Message\Request->send()
#9 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(468): Tumblr\API\RequestHandler->request('GET', 'v2/blog/ghostph...', Array)
#10 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(441): Tumblr\API\Client->makeRequest('GET', 'v2/blog/ghostph...', NULL, true)
#11 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(277): Tumblr\API\Client->getRedirect('v2/blog/ghostph...', NULL, true)
#12 /var/www/html/application/classes/Controller/Profile.php(40): Tumblr\API\Client->getBlogAvatar('ghostphotograph...', 128)
#13 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_photos()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#16 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/index.php(57): Kohana_Request->execute()
#19 {main} in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 16:12:44 --- EMERGENCY: Guzzle\Http\Exception\CurlException [ 0 ]: [curl] 6: Could not resolve host: api.tumblr.com [url] http://api.tumblr.com/v2/blog/ghostphotographs.tumblr.com/avatar/128?api_key=9lwcLfP1HHbHF44L0bQwmRWhkQxkol05WgdW4wQVHUwJpZ9DBk ~ APPPATH/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php [ 359 ] in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 16:12:44 --- DEBUG: #0 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(292): Guzzle\Http\Curl\CurlMulti->isCurlException(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#1 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#2 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#3 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#4 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#5 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#6 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#7 /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Message/Request.php(198): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#8 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/RequestHandler.php(115): Guzzle\Http\Message\Request->send()
#9 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(468): Tumblr\API\RequestHandler->request('GET', 'v2/blog/ghostph...', Array)
#10 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(441): Tumblr\API\Client->makeRequest('GET', 'v2/blog/ghostph...', NULL, true)
#11 /var/www/html/application/vendor/tumblr/tumblr/lib/Tumblr/API/Client.php(277): Tumblr\API\Client->getRedirect('v2/blog/ghostph...', NULL, true)
#12 /var/www/html/application/classes/Controller/Profile.php(40): Tumblr\API\Client->getBlogAvatar('ghostphotograph...', 128)
#13 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_photos()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#16 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/html/index.php(57): Kohana_Request->execute()
#19 {main} in /var/www/html/application/vendor/guzzle/guzzle/src/Guzzle/Http/Curl/CurlMulti.php:292
2015-09-17 17:18:53 --- EMERGENCY: ErrorException [ 2 ]: getimagesize() expects parameter 1 to be string, array given ~ APPPATH/classes/Controller/Ajax.php [ 55 ] in file:line
2015-09-17 17:18:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'getimagesize() ...', '/var/www/html/a...', 55, Array)
#1 /var/www/html/application/classes/Controller/Ajax.php(55): getimagesize(Array)
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_crop()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(57): Kohana_Request->execute()
#8 {main} in file:line
2015-09-17 17:24:42 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Ajax.php [ 55 ] in /var/www/html/application/classes/Controller/Ajax.php:55
2015-09-17 17:24:42 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ajax.php(55): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/html/a...', 55, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_crop()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(57): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ajax.php:55
2015-09-17 17:30:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: path ~ APPPATH/classes/Controller/Ajax.php [ 55 ] in /var/www/html/application/classes/Controller/Ajax.php:55
2015-09-17 17:30:34 --- DEBUG: #0 /var/www/html/application/classes/Controller/Ajax.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/html/a...', 55, Array)
#1 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_crop()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/index.php(57): Kohana_Request->execute()
#7 {main} in /var/www/html/application/classes/Controller/Ajax.php:55
2015-09-17 21:27:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Default' not found ~ APPPATH/classes/Controller/Profile.php [ 3 ] in file:line
2015-09-17 21:27:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-17 21:28:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Default' not found ~ APPPATH/classes/Controller/Profile.php [ 3 ] in file:line
2015-09-17 21:28:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-17 21:28:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template_Default' not found ~ APPPATH/classes/Controller/Profile.php [ 3 ] in file:line
2015-09-17 21:28:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-09-17 21:34:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::html() ~ APPPATH/classes/Controller/Ajax.php [ 41 ] in file:line
2015-09-17 21:34:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line