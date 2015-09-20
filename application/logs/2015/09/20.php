<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-20 00:55:50 --- EMERGENCY: ErrorException [ 2 ]: getimagesize(http://36.media.tumblr.com/3b5c49f208e93863d8121c01eaac58c5/tumblr_nqdap3DfNM1uq538fo1_1280.jpg): failed to open stream: HTTP request failed!  ~ APPPATH/classes/Controller/Ajax.php [ 143 ] in file:line
2015-09-20 00:55:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'getimagesize(ht...', '/var/www/html/a...', 143, Array)
#1 /var/www/html/application/classes/Controller/Ajax.php(143): getimagesize('http://36.media...')
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(57): Kohana_Request->execute()
#8 {main} in file:line
2015-09-20 02:05:48 --- EMERGENCY: ErrorException [ 2 ]: getimagesize(http://36.media.tumblr.com/3b5c49f208e93863d8121c01eaac58c5/tumblr_nqdap3DfNM1uq538fo1_1280.jpg): could not make seekable - http://36.media.tumblr.com/3b5c49f208e93863d8121c01eaac58c5/tumblr_nqdap3DfNM1uq538fo1_1280.jpg ~ APPPATH/classes/Controller/Ajax.php [ 142 ] in file:line
2015-09-20 02:05:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'getimagesize(ht...', '/var/www/html/a...', 142, Array)
#1 /var/www/html/application/classes/Controller/Ajax.php(142): getimagesize('http://36.media...')
#2 /var/www/html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_gallery()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 /var/www/html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/html/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/html/index.php(57): Kohana_Request->execute()
#8 {main} in file:line