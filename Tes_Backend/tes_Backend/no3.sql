CREATE VIEW user_active as
SELECT users.name AS 'user', COUNT(map_user_hobby.id_hobby) AS 'total_userActive'
FROM map_user_hobby
INNER JOIN users
	ON map_user_hobby.id_user = users.id
GROUP BY users.name, map_user_hobby.status HAVING map_user_hobby.status = 'active'
ORDER BY users.id DESC;

SELECT * FROM user_active;
