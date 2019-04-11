<?php
define(TITLE, 'Futallaby-powered image board');		//Name of this image board
define(SQLLOG, 'CHANGEME');		//Table (NOT DATABASE) used by image board
define(SQLHOST, 'localhost');		//MySQL server address, usually localhost
define(SQLUSER, 'root');		//MySQL user (must be changed)
define(SQLPASS, '9d6ha5o4');		//MySQL user's password (must be changed)
define(SQLDB, 'test');		//Database used by image board
define(ADMIN_PASS, 'janny3000');	//Janitor password  (CHANGE THIS YO)
define(SHOWTITLETXT, '1');		//Show TITLE at top (1: yes  0: no)
define(SHOWTITLEIMG, '0');		//Show image at top (0: no, 1: single, 2: rotating)
define(TITLEIMG, 'title.jpg');		//Title image (point to php file if rotating)
define(IMG_DIR, 'src/');		//Image directory (needs to be 777)
define(THUMB_DIR,'thumb/');		//Thumbnail directory (needs to be 777)
define(HOME,  '../');			//Site home directory (up one level by default
define(MAX_KB, '15000');		//Maximum upload size in KB
define(MAX_W,  '250');			//Images exceeding this width will be thumbnailed
define(MAX_H,  '250');			//Images exceeding this height will be thumbnailed
define(PAGE_DEF, '5');			//Images per page
define(LOG_MAX,  '500');		//Maximum number of entries
//define(RE_COL, '789922');               //Color of replies (lines proceeded by greater than sign) (THIS IS DEPRECIATED IN 040103)
define(PHP_SELF, 'index.php');	//Name of main script file
define(PHP_SELF2, 'index.htm');	//Name of main htm file
define(PHP_EXT, '.htm');		//Extension used for board pages after first
define(RENZOKU, '5');			//Seconds between posts (floodcheck)
define(RENZOKU2, '10');		//Seconds between image posts (floodcheck)
define(MAX_RES, '30');		//Maximum topic bumps
define(USE_THUMB, 1);		//Use thumbnails (1: yes  0: no)
define(PROXY_CHECK, 0);		//Enable proxy check (1: yes  0: no)
define(DISP_ID, 0);		//Display user IDs (1: yes  0: no)
define(BR_CHECK, 0);		//Max lines per post (0 = no limit)
//NEW FOR FUTALLABY 040103
define(TRIPKEY, '#');		//this character is displayed before tripcodes
define(CSSFILE, 'futaba.css');	//location of the css file
?>
