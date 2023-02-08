-- การ join table เหมือนกับ vloookup ใน excel
-- ต้องมีตารางอย่างน้อย 2 ตาราง ขึ้นไป
-- inner join = แสดงข้อมูลของทั้งสองตาราง
SELECT * 
FROM users
INNER JOIN kratoos
ON  users.id = kratoss.user.id
WHERE users.tel LIKE "%081%";

-- left join = การแสดงผลจะพยายามแสดงผลของตารางฝั่งซ้าย โดยไม่สนว่าฝั่งขวาจะมีข้อมูลหรือไม่
SELECT * 
FROM users
LEFT JOIN kratoos
ON  users.id = kratoss.user.id;

-- right join = การแสดงผลจะพยายามแสดงผลของตารางฝั่งขวา โดยไม่สนว่าฝั่งซ้ายจะมีข้อมูลหรือไม่
SELECT * 
FROM users
RIGHT JOIN kratoos
ON  users.id = kratoss.user.id;

