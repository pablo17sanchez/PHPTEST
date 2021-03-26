# TEST FOR TAL SOFTWARE
This is a test application made to present a simple webapi in php WITH a simple API CRUD (Create, Read, Update, Delete).


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
