<?php

$db = new PDO('sqlite:host=localhost; dbname=Biblio_SQLite', 'root', '');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);