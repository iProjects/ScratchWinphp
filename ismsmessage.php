<?php

if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {
 if (
 isset( $_REQUEST['phoneNumber'], $_REQUEST['carrier'], $_REQUEST['smsMessage'] ) &&
  !empty( $_REQUEST['phoneNumber'] ) &&
  !empty( $_REQUEST['carrier'] )
 ) {
  $message = wordwrap( $_REQUEST['smsMessage'], 70 );
  $to = $_REQUEST['phoneNumber'] . '@' . $_REQUEST['carrier'];
  $result = @mail( $to, '', $message );
  print 'Message was sent to ' . $to;
 } else {
  print 'Not all information was submitted.';
 }
}



class Foo
{
    public static $my_static = 'foo';

    public function staticValue() {
        return self::$my_static;
    }
}
print Foo::$my_static . "\n";
$foo = new Foo();
print $foo->staticValue() . "\n";

 
?>


<?php
 
$json_string = '{"1":"title","2":"author","3":"yearofpublication","4":"publisher","5":"price"}';
$pass = 'JSON';
$method = 'aes128';
 
$encrypt = openssl_encrypt ($json_string, $method, $pass);
echo 'The encrypted JSON string is: '.$encrypt.'<br><br>';
 
$decrypt = openssl_decrypt($encrypt,$method,$pass);
echo 'The decrypted JSON string is: '.$decrypt;
 
?> 






















