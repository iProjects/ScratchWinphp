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