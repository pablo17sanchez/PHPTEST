# TEST FOR TAL SOFTWARE
Assessment of technical skills


### Exercise for Backend:

Ø Make a REST API (preferably without using a framework) to manage a contact list.

Ø We have to be able to add new contacts (name, surname, email), list the contacts and delete a contact.




### Installation
Clone the repo into a apache server
   ```sh
   git clone https://github.com/pablo17sanchez/PHPTEST.git
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
