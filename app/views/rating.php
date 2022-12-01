<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <style media="screen">
  body {
    background: #ffcccb;
  }

.rating {
width: 265px;
padding: 10px;
background: rgb(255, 255, 255);
position: relative;
direction: rtl;
}
.rating input {
position: absolute;
width: 35px;
height: 50px;
cursor: pointer;
transform: translateX(52px);
opacity: 0;
z-index: 5;
}

.rating input:nth-of-type(1) {
right: 50px;
}
.rating input:nth-of-type(2) {
right: 100px;
}
.rating input:nth-of-type(3) {
right: 150px;
}
.rating input:nth-of-type(4) {
right: 200px;
}
.rating input:nth-of-type(5) {
right: 250px;
}
.rating input:nth-of-type(6) {
right: 300px;
}
.rating input:checked ~ .star:after, .rating input:hover ~ .star:after {
content: '\f005';
}
.rating .star {
display: inline-block;
font-family: FontAwesome;
font-size: 42px;
color: #FBB202;
cursor: pointer;
margin: 3px;
}
.rating .star:after {
content: '\f006';
}
.rating .star:hover ~ .star:after, .rating .star:hover:after {
content: '\f005';
}

  </style>
</head>
<body>
  <h1>Ratings</h1>
  <div class="rating">
    <input type="radio" name="star"/><span class="star"> </span>
    <input type="radio" name="star"/><span class="star"> </span>
    <input type="radio" name="star"/><span class="star"> </span>
    <input type="radio" name="star"/><span class="star"> </span>
    <input type="radio" name="star"/><span class="star"> </span>
    <span class="emo"> </span>
  </div>
</body>
</html>
