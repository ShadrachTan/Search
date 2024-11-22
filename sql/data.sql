CREATE TABLE search_users_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255),
    gender VARCHAR(255),
    address VARCHAR(255),
    nationality VARCHAR(255),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (1, 'Darrin', 'Fawlks', 'dfawlks0@xinhuanet.com', 'Male', '1st Floor', 'Argentina', '2024-05-09 22:12:22');
INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (2, 'Cindi', 'Baily', 'cbaily1@tripod.com', 'Female', 'Room 485', 'China', '2024-06-17 03:17:53');
INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (3, 'Caressa', 'Amerighi', 'camerighi2@mit.edu', 'Female', 'Room 123', 'Armenia', '2024-10-23 19:16:05');
INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (4, 'Mufi', 'Lisett', 'mlisett3@pagesperso-orange.fr', 'Female', '16th Floor', 'Estonia', '2024-09-09 19:48:10');
INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (5, 'Yvon', 'Fendt', 'yfendt4@who.int', 'Male', '7th Floor', 'Albania', '2024-04-19 19:25:56');
INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (6, 'Bert', 'Filipychev', 'bfilipychev5@abc.net.au', 'Male', 'PO Box 43044', 'Japan', '2024-02-22 02:38:49');
INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (7, 'Juliana', 'Ashlee', 'jashlee6@stanford.edu', 'Female', 'Room 213', 'Russia', '2024-09-18 22:49:52');
INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (8, 'Elfrieda', 'Deshorts', 'edeshorts7@a8.net', 'Female', 'Suite 24', 'Vietnam', '2024-07-24 22:34:56');
INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (9, 'Kiel', 'Sacks', 'ksacks8@ihg.com', 'Male', 'PO Box 22222', 'France', '2024-01-25 22:26:12');
INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (10, 'Ike', 'Laguerre', 'ilaguerre9@economist.com', 'Male', 'Suite 78', 'China', '2024-01-15 11:59:48');
INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (11, 'Sawyer', 'Redholes', 'sredholesa@google.com.au', 'Male', 'Room 1103', 'Sweden', '2024-04-01 23:09:30');
INSERT INTO search_users_data (id, first_name, last_name, email, gender, address, nationality, date_added) VALUES (12, 'Pincas', 'Halton', 'phaltonb@ustream.tv', 'Male', 'Apt 649', 'Malaysia', '2023-12-21 03:40:44');
