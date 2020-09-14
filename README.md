# Description
The project is build by PHP an MYSQL. In order to deploy it, you have to install apache and mysql
<BR>
live demo:
https://yudan.ch/shareboard/


# DataBase Structure

Database: `shareboard`
<code>
CREATE TABLE `shares` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) 


CREATE TABLE `users` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT current_timestamp()
) 

</code>

