var express = require('express');
var router = express.Router();

/* GET login file. */
router.get('/', function(req, res) {
  res.render('login');
});

module.exports = router;
