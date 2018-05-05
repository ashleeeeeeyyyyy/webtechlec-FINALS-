const express = require('express');
const mysql = require('mysql');

const host = "localhost";
const port = "3000";
const db = "course_website";
const sql = "SELECT * FROM admin";
let dbData;

const con = mysql.createConnection({
    host        : host,
    user        : 'root',
    password    : '',
    database    : db
});

const app = express();

app.set('view engine', 'ejs');

app.get('/', (req, res) => {
    res.render('index', {callback: ''});
  });

app.listen('3000', () => {
    console.log('Server started on port 3000');
});

app.set('view engine', 'ejs');