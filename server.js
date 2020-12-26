// ===============================
// ======= DEPENDENCIES  =========
// ===============================
// -- packages
const express = require('express');
const app = express();

require('dotenv').config();
const PORT = process.env.PORT

// ===============================
// ========= MIDDLEWARE ==========
// ===============================
app.use( express.urlencoded( { extended:false } ) );
app.use( express.static('public'))

// --routes
app.get('/', (req, res) => {
  res.render('index.ejs');
});

app.get('/index', (req, res) => {
  res.render('index.ejs');
});

app.get('/services', (req, res) => {
  res.render('services.ejs');
});

app.get('/about', (req, res) => {
  res.render('about.ejs');
});

app.get('/appointment', (req, res) => {
  res.render('appointment.ejs');
});

app.get('/befaft', (req, res) => {
  res.render('befaft.ejs');
});

app.get('/cient', (req, res) => {
  res.render('client.ejs');
});

app.get('/contact', (req, res) => {
  res.render('contact.ejs');
});

app.get('/gallery', (req, res) => {
  res.render('gallery.ejs');
});

app.get('/hours', (req, res) => {
  res.render('hours.ejs');
});

app.get('/testimonials', (req, res) => {
  res.render('testimonials.ejs');
});

// --listen for when someone goes to localhost:3000/
app.listen(PORT, () => {
  console.log('Listening on port', PORT);
});
