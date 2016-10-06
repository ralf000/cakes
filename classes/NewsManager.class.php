<?php

 class NewsManager extends AManager {

     static $add     = 'INSERT INTO news (title, description, image, body, created_time) VALUES (?, ?, ?, ?, NOW())';
     static $find    = 'SELECT * FROM news WHERE id = ?';
     static $findAll = 'SELECT * FROM news ORDER BY created_time DESC';
     static $update  = '';
     static $delete = 'DELETE FROM news WHERE id = ?';

 }
 