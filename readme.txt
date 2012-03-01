Readme:
To install, upload all files except readme.txt and liscense.txt
modify the connect in the Admin Folder file to your username, password, and your database name
Run the install.php file to install sql tables
Run the register.php in the admin folder and create admin name for yourself
Delete register and reguser.php after you create an admin name.
chmod the images folder to 777
go to addentry.php in your browser then go into the images folder and chmod verify.jpg to 777
Congrats! Your guestbook and admin is installed
To login into your admin go to admin/login.php

**Note** Some actions in the admin such as Ban IP will show up after you refresh the page after you've made the action

Upgrade from version 1.0 to version 1.1
________________________________________

Simply re-upload the new index.php and admin/browse.php and its upgraded.
In version 1.1 BBcode and 5 new smiley icons where added.

Upgrade from 1.1 to 1.1.1
____________________________
In this small update the admin was given the right to view the IP's of his posters.
To upgrade, go into phpmyadmin, and create an addition varchar field of length 255 for the table gbook
Then reload the admin folder and you should be upgraded.
Note: Only admins can view the IP when browsing as admin.

For 1.1.1 to 1.2
___________________
Delete smileylegend and re-upload index.php and addentry.php

From 1.2 to 1.3
------------------
No SQL update requires, just re-upload the files and chmod the images folder to 777
This update was mainly adopting the use of CSS in the guestbook and adding image verification to prevent spamming.
Customization
_________________

To change colors, look, and feel of the guestbook, edit admin/style.css
To change the logo upload your own logo.gif in the images folder
To add smilies(sorry don't have an admin panel choice for this), justupload the smilie into the image directory. Open up index.php 
and scroll down. You will see a smilies array, the rest should be self-explanatory.

Once again, you may modify and customize this script anyway you want as long as the copyright and link to chipmunk scripts stays visible.
If you have trouble please contact webmaster@chipmunk-scripts.com 
