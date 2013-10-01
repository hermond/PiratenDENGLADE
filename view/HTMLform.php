<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hello World
 * Date: 2013-10-01
 * Time: 15:54
 * To change this template use File | Settings | File Templates.
 */

namespace view;


class HTMLform {
    public function getAddMemberForm()
    {
      return "
      <form>
        <label>Namn på medlemmen</label>
        <input type='text' name='membername'>
        <label>Personnummer</label>
        <input type='text' name='socialnumber'>
        <label>Antal båtar</label>
        <input type='text' name='amountofboats'>
        <input type='submit' name='posted'>
      </form>

      ";
    }

    public function isPosted()
    {
        return isset($_POST['posted']);


    }

    public function getName()
    {
        return $_POST['membername'];
    }

    public function getSocialNumber()
    {
        return $_POST['socialnumber'];
    }

    public function getAmountOfBoats()
    {
        return $_POST['amountofboats'];
    }
}