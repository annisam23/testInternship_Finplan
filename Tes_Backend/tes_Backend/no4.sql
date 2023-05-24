CREATE VIEW user_avg as
SELECT users.name AS 'name', ROUND(AVG(Hobbies.level)) AS 'Level_avg'
FROM map_user_hobby
INNER JOIN users
	ON map_user_hobby.id_user = users.id
INNER JOIN Hobbies
	ON map_user_hobby.id_hobby = Hobbies.id
GROUP BY users.name;

SELECT * FROM user_avg;
