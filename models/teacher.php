<?php
include ('connect.php');
class Teacher extends Person
{
    private $subject;
    private $select;

    /**
     * @return mixed
     */

    public function getNames()
    {
        $user = array('name'=>'Peti');
        /*$down=mysql_query("SELECT * FROM teachers;");
        while ($line=mysql_fetch_array($down)){
            $user[]=$line;
        }*/
        return $user;
    }
    public function getSelect($select)
    {
        $down = mysql_query("SELECT * FROM teachers WHERE name=$select  ;");
        while ($line=mysql_fetch_array($down)){
            $sc[]=$line;
        }
        return $sc;
    }
    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

}