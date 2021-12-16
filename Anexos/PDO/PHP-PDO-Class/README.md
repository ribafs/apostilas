# Simple-PDO-Class
This class is a very simple class made for programmers who are tired of using quotes to escape string from being read as constants or receiving syntax errors. This class will allow you to call different databases on different variables as well as allowing you to define values in an array as the second parameter of a function.

##### Calling a new class and setting the parameters for authentication

Calling class on variable $db (this can be any variable name). Find construction calls below in order:
* Database host address
* Username for authentication
* Password for authentication
* Database name

**Please note: the data array is NOT required. All question marks (?) found in the query will be replaced with the data (in order) found in the array of the second parameter.**
**You do NOT need to use quotes as PDO sorts this out for you during query preperation.**

```
$db = new db("localhost", "root", "password", "database");
```

https://github.com/MiksZvirbulis/PHP-PDO-Class

