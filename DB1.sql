-- Задача №2: создать БД, состоящую из одной таблицы (информация об одногруппниках) 
-- с четырьмя полями (добавить поле «Адрес»): id, name, age, address.
-- create
CREATE TABLE EMPLOYEE (
  studId INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO EMPLOYEE VALUES (0001, 'Sasha', '25', 'Санкт-Петербург, Дыбенко 18');
INSERT INTO EMPLOYEE VALUES (0002, 'Kate', '23', 'Санкт-Петербург, Советская 4');
INSERT INTO EMPLOYEE VALUES (0003, 'Irina', '15', 'Москва, Ленина 32');
INSERT INTO EMPLOYEE VALUES (0004, 'Denis', '28', 'Самара, Московская 25');
INSERT INTO EMPLOYEE VALUES (0005, 'Maria', '10', 'Сызрань, Новостроящаяся 32');
INSERT INTO EMPLOYEE VALUES (0006, 'Sergey', '56', 'Казань, Гагарина 42');
INSERT INTO EMPLOYEE VALUES (0007, 'Oleg', '22', 'Санкт-Петербург, пр-кт Большевиков 44');
INSERT INTO EMPLOYEE VALUES (0008, 'Andrey', '35', 'Кудрово, Столичная 6');
INSERT INTO EMPLOYEE VALUES (0009, 'Pavel', '60', 'Мурино, Петровский б-р 14');
INSERT INTO EMPLOYEE VALUES (0010, 'Alex', '25', 'Мурино, б-р Минделеева 3');
INSERT INTO EMPLOYEE VALUES (0011, 'Slava', '12', 'Санкт-Петербург, пр-кт Ветеранов 152');
INSERT INTO EMPLOYEE VALUES (0012, 'Sasha', '15', 'Тихвин, Ленина 6');
INSERT INTO EMPLOYEE VALUES (0013, 'Venedikt', '29', 'Санкт-Петербург, Есенина 1');
INSERT INTO EMPLOYEE VALUES (0014, 'Georgy', '31', 'Санкт-Петербург, Луначарского 62');
INSERT INTO EMPLOYEE VALUES (0015, 'Sergey', '33', 'Санкт-Петербург, Новоизмайловский 101');

-- fetch 
SELECT * FROM EMPLOYEE WHERE age = '25';