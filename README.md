# BoltWire6.03_File_Upload
*FOR EDUCATIONAL PURPOSES ONLY*

This allows attackers to manually upload a PHP reverse shell on BoltWire 6.03 within the admin panel due to web misconfigurations. 
To do this, admin access is needed and the "/dev/pages/" directory must be accessible through a web browser. 

This was tested on Linux 4.19.0-16-amd64 #1 SMP Debian 4.19.181-1 x86_64 GNU/Linux.

Step 1: Login to admin page


Step 2: At the top, hit create to create page. Name it shell.php and copy/paste the reverse shell. Click Save.


Step 3: Set up netcat listener. Go to the "/dev/pages" directory and click on your shell.php.


