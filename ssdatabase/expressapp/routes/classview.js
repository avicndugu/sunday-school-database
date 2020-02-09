var express = require('express');
var router = express.Router();
var connection  = require('../lib/db');
var data;

/* GET users listing. */
connection.query('SELECT * FROM employees',(err,rows) => {
    if (err) throw err;
    console.log('Data received!');
    data=rows;
    console.log(data);
});

/* GET login file. */
router.get('/', function(req, res) {
  res.render('classview', {arrays:data});
});

module.exports = router;