-- sum = ใช้หาผลรวมของฟิลด์ที่เราต้องการทราบค่า
SELECT sum(coin)
FROM users
WHERE firstname LIKE "%นาย%";

SELECT sum(coin), gender
FROM users
WHERE coin >1
GROUP BY gender;

-- count + group by
-- count จะนับแค่ว่ามีจำนวนคนกี่ท่านไม่ได้นับรวมจำนวนเหรียญถ้าต้องการต้องใช้ sum
-- จากตัวอย่าง คือ สรุปจำนวนเงินที่มีแยกตามเพศ
SELECT count(coin), gender
FROM users
WHERE coin = 1
GROUP BY gender;