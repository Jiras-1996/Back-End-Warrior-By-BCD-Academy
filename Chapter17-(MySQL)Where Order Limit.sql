-- การดึงข้อมูลจาก database โดยผ่าน id
SELECT * FROM users 
WHERE id = 1;

-- การดึงข้อมูลจาก database โดยใช้ string จะต้องกรอกให้ถูกต้องแบบเป๊ะๆ
SELECT * FROM users
WHERE firstname = "นาย AA";

-- การดึงข้อมูลจาก database โดยใช้ Regular Expression
SELECT * FROM users
WHERE firstname LIKE "%AA%";

-- การดึงข้อมูลจาก database โดยใช้ AND หรือ OR 
-- AND case
SELECT * FROM users
WHERE firstname LIKE "%AA%" AND tel LIKE "%081%";

-- OR case
SELECT * FROM users
WHERE firstname LIKE "%AA%" OR tel LIKE "%081%";

-- การดึงข้อมูลจาก database โดยใช้ ORDER BY
-- ORDER BY สามารถพิมพ์ต่อท้าย WHERE หรือไม่ต่อท้ายก็ได้ เอาไว้ทำการ sorting
--  ORDER BY ตามด้วยชื่อฟิลด์ที่ต้องการ sorting และรูปแบบการ sorting
SELECT * FROM users
WHERE tel LIKE "%08%"
ORDER BY firstname DESC;

-- การดึงข้อมูลจาก database โดยใช้ LIMIT
SELECT * FROM users
WHERE tel LIKE "%08%"
ORDER BY id DESC
LIMIT 2;

-- การดึงข้อมูลจาก database โดยใช้ OFFSET(การข้ามไป)
-- ใช้บ่อยเวลาที่เราต้องการจัดหน้า
SELECT * FROM users
WHERE tel LIKE "%08%"
ORDER BY id DESC
LIMIT 3
OFFSET 1;