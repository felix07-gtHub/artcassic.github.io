//const { createServer } = require('node:http');
const express = require('express');
const mysql = require('mysql')
const cors = require('cors');
const bodyParser = require('body-parser');

const connection = mysql.createConnection({
  host: '127.0.0.1',
  user: 'root',
  password: 'MySql47183',
  database: 'dbdb'
})

const app = express();
const hostname = '127.0.0.1';
const port = 3000;

app.use(express.json());
app.use(cors());

connection.connect((err) => {
  if (err) {
    console.error('MySQL connection error:', err);
    return;
  } else
    console.log('Connected to MySQL database');
});

app.post('/contact_form', (req, res) => {
  const { name, email, subject, message } = req.body;
  const insertQuery = 'INSERT INTO contact_form (name, email, subject, message) VALUES (?, ?, ?, ?)';

  connection.query(insertQuery, [name, email, subject, message], (err, result) => {
    if (err) {
      console.error('Insert failed:', err);
    } else {
      console.log('Insert successful, ID:', result.insertId);
    }
  });
});

app.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/contact_form`);
});
