# TEST FOR TAL SOFTWARE
Assessment of technical skills


### Exercise for Backend:

Ø Make a REST API (preferably without using a framework) to manage a contact list.

Ø We have to be able to add new contacts (name, surname, email), list the contacts and delete a contact.




### Installation
Clone the repo into a apache server or other types of server thant can render php aplications
   ```sh
   git clone https://github.com/pablo17sanchez/PHPTEST.git
   ```
   
   Create dabase and table
   
     ```sql
   create database db;
   
   
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `Nombres` varchar(80) NOT NULL,
  `Apellidos` varchar(80) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;


   ```



## PHP API DOCUMENTATION

* `GET - http://localhost/APP/api/read.php` Fetch ALL Records

* `GET - http://localhost/APP/api/single_read.php?id=2` Fetch Single Record

* `POST - http://localhost/APP/api/create.php` Create Record
   ```JS
  { 
   "nombres":"John", 
   "apellidos":"Smith", 
   "telefono":"333-333-3333",
   "email":"john.smith@mymail.com"
  }

   ```
* `PUT - http://localhost/APP/api/update.php` Update Record

   ```JS
  { 
    "id":"1"
    "nombres":"John", 
    "apellidos":"Smith", 
    "telefono":"333-333-3333",
    "email":"john.smith@mymail.com"
  }

   ```
* `DELETE - http://localhost/APP/api/delete.php` Remove Records

   ```JS
  { 
    "id":"1"
    "nombres":"John", 
    "apellidos":"Smith", 
    "telefono":"333-333-3333",
    "email":"john.smith@mymail.com"
  }

   ```
   
   # Abount me 🔥

   I love code and I love C# and Js (I learn fast)
   
   
   
   
<div align="center">


<i>Follow me:</i><br>

<a href="https://www.linkedin.com/in/pablo-ismael-sanchez-rijo-078b26ab/" target="_blank"><img src="https://img.shields.io/badge/LinkedIn-%230077B5.svg?&style=flat-square&logo=linkedin&logoColor=white" alt="LinkedIn"></a>


</div>

