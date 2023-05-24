CREATE VIEW Running_Hobby as 
SELECT users.gender AS 'gender', COUNT(users.id) AS 'total' FROM map_user_hobby 
INNER JOIN users
	ON map_user_hobby.id_user = users.id
INNER JOIN Hobbies
	ON map_user_hobby.id_hobby = Hobbies.id
GROUP BY users.gender, Hobbies.name HAVING Hobbies.name LIKE 'Running'
ORDER BY users.gender DESC;

SELECT * FROM Running_Hobby;
