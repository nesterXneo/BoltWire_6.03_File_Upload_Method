# BoltWire6.03_File_Upload
This allows attackers to to upload a PHP reverse shell on BoltWire 6.03 within the admin panel due to misconfigurations. 
To do this, admin access is needed and the "/dev/pages/" directory must be accessible through a web browser. 

Step 1: Login to admin page
![image](https://github.com/nesterXneo/BoltWire6.03_File_Upload/assets/52898555/c7c789aa-387c-43d0-89a3-b4849576a977)

Step 2: At the top, hit create to create page. Name it shell.php and copy/paste the reverse shell. Click Save.
![image](https://github.com/nesterXneo/BoltWire6.03_File_Upload/assets/52898555/9df09aef-5740-463b-887a-b480ac1abd3d)

Step 3: Set up netcat listener. Go to the the "/dev/pages" directory and click on your shell.php.
![image](https://github.com/nesterXneo/BoltWire6.03_File_Upload/assets/52898555/c1e885eb-a849-4891-8ae6-f04242002cc3)
![image](https://github.com/nesterXneo/BoltWire6.03_File_Upload/assets/52898555/8782d6fc-f7be-422b-9f92-cb704ebe5522)

