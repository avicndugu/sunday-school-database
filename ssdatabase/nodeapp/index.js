var express = require('express');
var bodyParser = require('body-parser');
var app = express();
var path = require('path');
var data;
// var connection  = require('./db');

var mysql=require('mysql');
var connection=mysql.createConnection({
   host:'localhost',
   user:'root',
   password:'avic2016',
   database:'studentinfo'
});

connection.connect(function(error){
   if(error){
     console.log(error);
   }else{
     console.log('Connected!:)');
   }
 });

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: true}))

app.get('/', function (req, res) {
    res.sendFile(path.join(__dirname + '/add-student.html'));
    // res.send("Hello world");
});

// connection.connect(function(err){
//   if (err) throw err
//     console.log("new connection")
// })


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// NEW CODE THAT IS WORKING WELL

// // Get the results of the whole class table as a json object\
app.get('/viewClass', function (req, res) {
   // console.log(req.body);
   connection.query('select * from class1', function (error, results, fields) {
      if (error) throw error;
      res.end(JSON.stringify(results));
    });
});
// // End of Get the results of the whole class table as a json object\

// Get the results of the a single student as a json object\
app.get('/viewClass/:id', function (req, res) {
   connection.query('select * from class1 where student_id=?', [req.params.id], function (error, results, fields) {
      if (error) throw error;
      res.end(JSON.stringify(results));
    });
});
// Get the results of the a single student as a json object\



// iNSERT data of one student into mysql
app.post('/submit', function (req, res) {
   // console.log(req.body);
   var postData = req.body;
   console.log(postData);
   var sql = 'insert into class1 SET ?';
   connection.query(sql, postData, function (error, results, fields) {
      if (error) throw error;
      res.end(JSON.stringify(results));
    });
});
// end of INSERT data of one student into mysql

// END OF NEW CODE THAT IS WORKING WELL
///////////////////////////////////////////////////////////////////////////////////////////////////////


// Start of test route
// app.post('/submit', function (req, res) {
//     var postData = req.body;
//     console.log(postData);
//     // console.log(req.body.phone);
//     console.log(typeof(postData));
//     res.send("Submited");
//     connection.query('INSERT INTO class1 SET ?', postData, function (error, results, fields) {
//       if (error) throw error;
//       res.end(JSON.stringify(results));
//     });

//     var sql= 'INSERT INTO `class1`(`student_id`, `name`, `phone`, `phone2`) VALUES (null, req.body.name ,"valuwhat","ever")';

//      // '"+ req.body.name +"', '"+ req.body.phone +"', '"+ req.body.phone2 +"')'
//     connection.query(sql, function (err, rows, fields) {
//         // if (err) throw err
//         // res.render('index', { title: 'Data saved', message: 'Data Saved Successfully'})
//     })
//     // connection.end()
// });

// End of test route




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
// app.get('/newclass', (req, res) =>{
//     let sql= 'CREATE TABLE pp1_pp2(student_id int AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), PRIMARY KEY(student_id))';
//     connection.query(sql, (err, result) =>{
//         if (err) throw err;
//         console.log(result);
//         res.send('Class table created');
//     })
// })

// app.get('/newclass', (req, res) =>{
//     let sql= 'CREATE TABLE class1(student_id int AUTO_INCREMENT, name VARCHAR(255), phone VARCHAR(255), phone2 VARCHAR(255), PRIMARY KEY(student_id))';
//     connection.query(sql, (err, result) =>{
//         if (err) throw err;
//         console.log(result);
//         res.send('Class table created');
//     })
// })


// Old code that I was using
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

// Read all students
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