<?php
class DatabaseSingletonClass
{
 
  //set this constants to connect to your database - the default settings are just for testing tasks
  const MYSQL_HOST = "127.0.0.1";
  const MYSQL_USER = "root";
  const MYSQL_PASS = "";
  const MYSQL_DB = "hallmark";
 
  //A static member variable representing the class instance
  private static $_instance = null;
 
  //Have a single globally accessible static method
  public static function getInstance()
  {
    if( !is_object(self::$_instance) ) { //or if( is_null(self::$_instance) ) or if( self::$_instance == null )     
        self::$_instance = new MySQLi(self::MYSQL_HOST, self::MYSQL_USER, self::MYSQL_PASS, self::MYSQL_DB);
            if(self::$_instance->connect_error)
            {
                throw new Exception('MySQL connection failed: ' . self::$_instance->connect_error);
            }
     }
    return self::$_instance;
  }
}
?> 