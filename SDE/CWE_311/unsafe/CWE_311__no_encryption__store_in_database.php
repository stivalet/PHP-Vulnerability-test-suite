<?php
/* 
Unsafe sample
sanitize : no_encryption
construction : store sensitive data in a database
*/



/*Copyright 2015 Bertrand STIVALET 

Permission is hereby granted, without written agreement or royalty fee, to

use, copy, modify, and distribute this software and its documentation for

any purpose, provided that the above copyright notice and the following

three paragraphs appear in all copies of this software.


IN NO EVENT SHALL AUTHORS BE LIABLE TO ANY PARTY FOR DIRECT,

INDIRECT, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE 

USE OF THIS SOFTWARE AND ITS DOCUMENTATION, EVEN IF AUTHORS HAVE

BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.


AUTHORS SPECIFICALLY DISCLAIM ANY WARRANTIES INCLUDING, BUT NOT

LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A

PARTICULAR PURPOSE, AND NON-INFRINGEMENT.


THE SOFTWARE IS PROVIDED ON AN "AS-IS" BASIS AND AUTHORS HAVE NO

OBLIGATION TO PROVIDE MAINTENANCE, SUPPORT, UPDATES, ENHANCEMENTS, OR

MODIFICATIONS.*/


$password = “password”;
$username = “username”;

//flaw
$conn = pg_pconnect("dbname=publisher");
if (!$conn) {
  echo "An error occured.\n";
  exit;
}
$query  = sprintf("INSERT INTO users(name,pwd) VALUES('%s','%s');",
            pg_escape_string($username),
            pg_escape_string($password));

$result = pg_query($conn, $query);



?>