CREATE table Hobbies (
 id integer(11) AUTO_INCREMENT PRIMARY KEY,
 name varchar(255) NOT null,
 level integer(11) not null
)

INSERT into Hobbies VALUES 
(DEFAULT,'Running',8),
(DEFAULT,'Skipping',5),
(DEFAULT,'Push Up',10);

CREATE table users (
 id integer(11) AUTO_INCREMENT PRIMARY KEY,
 name varchar(255) NOT null,
 gender char(1) not null,
 status varchar(255) NOT null
)

INSERT into users VALUES 
(DEFAULT,'Frasch', 'F', 'active'),
(DEFAULT,'Garmuth', 'M', 'active'),
(DEFAULT,'Goliath', 'M', 'active'),
(DEFAULT,'Luna', 'F', 'active'),
(DEFAULT,'Zeus', 'M', 'active'),
(DEFAULT,'Aphrodite', 'F', 'active'),
(DEFAULT,'Ares', 'M', 'active'),
(DEFAULT,'Lina', 'F', 'active'),
(DEFAULT,'Lanaya', 'F', 'active'),
(DEFAULT,'Hades', 'M', 'active');

CREATE table map_user_hobby (
 id integer(11) AUTO_INCREMENT PRIMARY KEY,
 id_user integer(11) NOT NULL,
 id_hobby integer(11) NOT NULL,
 status varchar(255) NOT NULL
)

ALTER TABLE map_user_hobby
ADD FOREIGN KEY (id_user) REFERENCES users(id);

ALTER TABLE map_user_hobby
ADD FOREIGN KEY (id_hobby) REFERENCES Hobbies(id);


INSERT INTO map_user_hobby VALUES
(DEFAULT,1, 1, 'active'),
(DEFAULT,3, 1, 'Active'),
(DEFAULT,8, 3, 'deleted'),
(DEFAULT,2, 2, 'active'),
(DEFAULT,4, 1, 'deleted'),
(DEFAULT,6, 2, 'active'),
(DEFAULT,5, 3, 'active'),
(DEFAULT,8, 1, 'active'),
(DEFAULT,7, 2, 'active'),
(DEFAULT,4, 2, 'active'),
(DEFAULT,9, 3, 'deleted'),
(DEFAULT,10, 2, 'deleted'),
(DEFAULT,3, 2, 'active'),
(DEFAULT,2, 3, 'active'),
(DEFAULT,10, 2, 'active');
