# GlobeSync

This is a  social network website designed with core php and of course with the aid of the html, css and core javascript.
It supports the following functionalities:
* User registeration
* Creation of post with possibility of stamping a picture along with it
* Sending and recieving friend requests as well as accepting or ignoring them
* Viewing profiles and your relation with them
* Channging profile picture
* Simple search

<br>

## To install this application:
* Create a database from DDM.sql file which is found within database folder.
* For a simple data test, use DML.sql to create a simple instance of data (passwords of users are equivalent to the first names).
* You need a webserver (either local or global) to launch .php files. Programs like Xampp, WampServer provides a local webserver that uses MySQL database.
* copy all other files to your a new folder (folder name is of your choice that is the website name) inside htdocs folder within your program and run.

## Files and Directories
* data
The data directory contains files related to data management, such as data storage, retrieval, and manipulation.

* database
The database directory holds files associated with the database schema, migrations, or any other database-related operations.

* functions
The functions directory includes files containing reusable functions utilized throughout the application for various tasks.

* images
The images directory stores image files used within the application, such as user profile pictures or post images.

* includes
The includes directory contains files that are included or required across multiple pages of the application, such as header, footer, or navigation files.

* resources
The resources directory houses additional resources used in the application, such as CSS stylesheets, JavaScript files, or font files.

* friends.php
friends.php is a PHP file responsible for managing a user's friends list and interactions with friends within the GlobeSync platform.

* home.php
home.php is the main landing page of the GlobeSync application, displaying a user's feed, updates, or relevant information.

* index.php
index.php is the entry point of the GlobeSync application, typically serving as the login or registration page.

* logout.php
logout.php is a PHP script handling the logout functionality, allowing users to securely log out of their GlobeSync accounts.

* profile.php
profile.php is a PHP file responsible for displaying and managing user profiles within the GlobeSync platform.

* requests.php
requests.php is a PHP file handling friend requests and notifications related to friend requests within the GlobeSync platform.

* search.php
search.php is a PHP file used for searching and discovering users, posts, or content within the GlobeSync platform.

## To do list:
* Download the specified font along with website as it is accessed to ensure layout consistency
* Ability of removing posts of a friend from friendlist
* Supporting post likes
* Real time notifications for post likes and friend requests
* Using search engine instead
* Full profile edit
* Using plugins to avoid redirection or refresh of pages when making requests
* Full protection of data from injections

<br>

## Notes:
* Home shows all public posts. It doesn't show private posts except if the poster is on your friend list.
* Posts are displayed in chronological order from latest to oldest.
* Home also shows your own posts.
* Initially created accounts have a default profile picture based on their gender.
* Different users may suffer layout inconsistency or rather not the required smooth interface if the specified font isn't installed on the user's device (to be solved).
<br>


