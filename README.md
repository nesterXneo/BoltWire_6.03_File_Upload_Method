# BoltWire_6.03_File_Upload_Method
*FOR EDUCATIONAL PURPOSES ONLY*

This allows attackers to manually upload a PHP reverse shell on BoltWire 6.03 within the admin panel. 
To do this, admin access is required and the "/dev/pages/" directory must be accessible through a web browser. 

This was tested on Linux 4.19.0-16-amd64 #1 SMP Debian 4.19.181-1 x86_64 GNU/Linux.

Step 1: Login to admin page
![admin](https://github.com/nesterXneo/BoltWire_6.03_File_Upload/assets/52898555/29d32728-f490-46de-9809-ee51d3659701)


Step 2: At the top, hit create to create page. Name it shell.php and copy/paste the reverse shell. Click Save.
![create](https://github.com/nesterXneo/BoltWire_6.03_File_Upload/assets/52898555/d10d55e4-0e90-456c-a3e6-a558388d2806)


Step 3: Set up netcat listener. Go to the "/dev/pages" directory and click on your shell.php.
![pages](https://github.com/nesterXneo/BoltWire_6.03_File_Upload/assets/52898555/b4c05f06-618b-40be-a45d-8bb8efc87caa)

![shell](https://github.com/nesterXneo/BoltWire_6.03_File_Upload/assets/52898555/c6cd6f68-713d-4ba9-9a24-3e6ffdc11ca5)
