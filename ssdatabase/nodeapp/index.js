var express = require('express');
var app = express();
var data;
var connection  = require('./db');


app.get('/', function (req, res) {
    res.send('Hello World!');
});

// // Creates a new database that will contain the tables for each class
// app.get('/newschool', (req,res) => {
//     let sql= 'CREATE DATABASE stjames';
//     connection.query(sql, (err, result) =>{
//         if (err) throw err;
//         console.log(result);
//         res.send('Database created');
//     })
// });

// Create a new classl table
app.get('/newclass', (req, res) =>{
    let sql= 'CREATE TABLE pp1_pp2(student_id int AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), PRIMARY KEY(student_id))';
    connection.query(sql, (err, result) =>{
        if (err) throw err;
        console.log(result);
        res.send('Class table created');
    })
})

// Insert a new student
app.get('/newstudent', (req, res) => {
    let student = {first_name: "John", last_name:"Doe"};
    let sql= 'INSERT INTO pp1_pp2 set ?';
    connection.query(sql, student, (err, result) =>{
        if (err) throw err;
        console.log(result);
        res.send('First student created');
    })
})

// Insert a new student
app.get('/getstudents', (req, res) => {
    let sql= 'SELECT * FROM pp1_pp2';
    connection.query(sql, (err, result) =>{
        if (err) throw err;
        console.log(result);
        res.send('Students fetched');
    })
})


// Query an existing database
app.get('/class', function (req, res) {
    // Query the database data
    connection.query('SELECT * FROM student', (err,rows)=>{
        if (err) throw err;
        console.log('Data received!');
        console.log(rows);
        data=rows;
    });
    res.send('Hello World!');
});

// Insert data into the database
// connection.query('SELECT * FROM student', (err,rows)=>{


app.listen(3000, function () {
    console.log('Example app listening on port 3000!');
});