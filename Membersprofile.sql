DROP TABLE IF EXISTS Members,images;

-- Create the new tables

CREATE TABLE Members (
          StudentName varchar(40),
          Major varchar(40),
          university varchar(50),
          id int NOT NULL AUTO_INCREMENT primary key

) Engine=InnoDB;
--Populate table
insert into Members values ('Hafedh Al Toubi', 'Computer Science ', 'University of Mississippi',ID);
insert into Members values ('Mohammed Al-khawaldi', 'Geological Engineering ', 'University of Mississippi',ID);
insert into Members values ('Ali Al-nabhani', 'Mechanical Engineering ', 'University of Mississippi',ID);
insert into Members values ('Yahya Al-zaabi', 'Mechanical Engineering', 'University of Mississippi',ID);
insert into Members values ('Asim Al-amri', 'Mechanical Engineering', 'University of Mississippi',ID);
insert into Members values ('Abdalaziz Al-toubi', 'Computer Science ', 'University of Mississippi',ID);
insert into Members values ('Dawood Al-nassri', 'Information System Management ', 'University of Mississippi',ID);
insert into Members values ('Abdulah Al-siyabi', 'Mechanical Engineering ', 'University of Mississippi',ID);
insert into Members values ('Anas Al-abri', 'Chemical Engineering ', 'University of Mississippi',ID);
insert into Members values ('Saqer Awladthani', 'Chemical Engineering ', 'University of Mississippi',ID);
insert into Members values ('Mazin Al-siyabi', 'Civil Engineering ', 'University of Mississippi',ID);
insert into Members values ('Mohammed Al-harthi', 'Geoligical Engineering ', 'University of Mississippi',ID);
insert into Members values ('Asad Al-Zakwani', 'Mechanical Engineering', 'University of Mississippi',ID);
insert into Members values ('Ahmed Al-Saadi', 'Geoligical Engineering', 'University of Mississippi',ID);
insert into Members values ('Hood Al-hamdani', 'Geoligical Engineering', 'University of Mississippi',ID);
insert into Members values ('Khamis Al-bulushi', 'Computer Science ', 'University of Mississippi',ID);


  CREATE TABLE `images` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `image` longblob NOT NULL,
    `name` varchar(200) NOT NULL,
   PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
