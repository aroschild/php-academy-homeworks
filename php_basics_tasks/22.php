<?php
/*
 * 22. Приведите число -20 к типу boolean. Объясните результат.
 */

$a = -20;

var_dump((bool)$a); //bool(true)

//При приведении числовых значений к логическим результатом будет true если исходное значение было больше или меньше 0.