<?php
namespace Dao;


Abstract class AbstractDao{

    const STATUS_0= 0;
    const STATUS_1= 1; //
    const STATUS_2= 2; //
    const STATUS_3= 3; //
    const STATUS_4= 4;



    abstract public function getOneById();
}
