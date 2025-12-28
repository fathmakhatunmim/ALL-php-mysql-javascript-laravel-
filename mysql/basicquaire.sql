
SELECT name,city,cityname
FROM persona
INNER JOIN city
on persona.city=city.cid;



INSERT INTO a
 (name, roll, age)
 VALUES ('fathma', 20104002, 24);



UPDATE persona
set name="ram kumar" , age=20
where id=1;

DELETE FROM persona
where id=3;