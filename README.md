# Pipeline
Free From docoument management system

Credits
-------
<ul>
	<li><a href="http://foundation.zurb.com/">Foundation</a> The front end framework by ZURB under <a href="http://opensource.org/licenses/MIT">MIT License</a></li>
</ul>


TO do
----


Create a file with name settings-local.php inside _core direcotory

<pre>
<?php

// ** MySQL settings - You can get this info from your web host ** //
define('DB_NAME', 'Database name'); // The name of the database to use
define('DB_USER', 'root'); // MySQL database username
define('DB_PASSWORD', 'password'); // MySQL database password
define('DB_HOST', 'localhost'); // MySQL hostname
define('DB_CHARSET', 'utf8'); // Database Charset to use in creating database tables.

define('SITE_URL', 'site url'); // Local Site URL optional

define('ENTRY_TABLE', 'uploads table'); // Main table
?>
</pre>


Uploads Table

<pre>
CREATE TABLE IF NOT EXISTS `upload_entry` (
  `SL_NO` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(300) NOT NULL,
  `FILE_LOCATION` varchar(300) NOT NULL,
  `UPLOAD_TIME` datetime NOT NULL,
  `LAST_MODIFIED_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`SL_NO`)
)</pre>
