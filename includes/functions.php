<?php

function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=Subscribe_Form', // instruction: change the host to devkinsta_db and insert your own database name
        'root',
        'eIQ1TKk22RcYiBA9' // instruction: change this to your database password
    );
}