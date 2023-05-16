<?php
//visibility exercise
class A
{
    public $p1='Public property';
    private $p2= 'private property';
    protected $p3= 'protected property';
}
class B extends A
{
    public function get()
    {
        return $this->p3;
    }
}
$ob= new B;
echo $ob->get();


echo '<br><br>';



// Trait exercise

trait DB
{
    public function connect()
    {
        return '<h1>Connected to database</h1>';
    }
}
trait Notification 
{
    public function notification()
    {
        return '<h2>Sending Notification.</h2>';
    }
}
class Database
{
    use DB;
    use Notification;
}
$database= new Database;

echo $database->connect();
echo '';
echo $database->notification();