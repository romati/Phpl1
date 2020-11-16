<?php

const SERVER = "localhost";
const DB = "november15";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die("Ошибка при коннекте к базе данных");
