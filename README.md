# Personal_project
Personal Quote Website

Steps of installation and running the project:

1.Download the zip file with the codes and images.
2.Remove all files from css,html,php.
3.Then include all images within img file.
  Hence u will have total of 1 file called img.

Now ,install 'wampp' software in your laptop or desktop.

1.Open the software and click on actions 'start' of 'Apache' and 'MySql'.
2.To run the contact page part,open phpmyadmin.
  http://localhost/phpmyadmin/
3.There,create a database named 'quote_website'.
4.create table 'user'.
5.add entities like
  (i) id (INT (8)) With A.I(Auto Increment)
  (ii) name (VARCHAR (50))
  (iii) subject(VARCHAR (50))
  (iv) email (VARCHAR (50))
  (v) message (VARCHAR (100))
6.Then click on Go.Table is created for contents from contactus page to be stored.
7.To run the project,go to browser and type "localhost/database_name_given" in the file(rem! u must save the entire folder in
  "C:\xampp\htdocs\database_name_given")
  There click onhtml file and the project runs easily.
  
 My website consists of 4 pages,
 1)HOME
 2)ABOUT US
 3)QUOTES and 
 4)CONTACT US.
 - HOME consists of an introductoy page where you can be redirected to quote page and about me page.
 - ABOUT US consist of writer's introduction
 - QUOTES page consists of my very own quotes.
 - CONTACT US page,it is a working contact page form and any details which u enter will be saved in the database which you have created using phpmyadmin.
 After a message has been sent successfully,note=success appears beside the addressbar through which you can be sure of message sent successfully.
 You cabn check if the details you have entered are reflected in the created database.
 
 Hope You Liked It!
