-- Step1 : Create database file in phpmyadmin

-- Step2 : Insert data in database with query
INSERT INTO users (firstname, lastname, tel, email)
VALUES ("นาย C", "นามสกุล D", "0823334455", "C@C.com");

-- Step3 : Update data in database
UPDATE users
SET firstname = "นาย CC", lastname = "นามสกุล DD"
WHERE id = 2;

-- Step4 : delete data form database
DELETE FROM users 
Where id = 2;