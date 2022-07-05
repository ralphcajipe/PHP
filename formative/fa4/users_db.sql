/*
In user_db.sql, write a MySQL query to create a database with 10 different records.
Use the following fields [id(auto increment), email, username, password, userlevel(admin/user), status, image].
*/

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(255) NOT NULL,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `userlevel` varchar(255) NOT NULL,
    `status` varchar(255) NOT NULL,
    `image` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
