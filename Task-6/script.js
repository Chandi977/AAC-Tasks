function a() {
  document.getElementById("image").style.backgroundImage = "url('Source/A.jpg')";
}
function b() {
  document.getElementById("image").style.backgroundImage = "url('Source/B.png')";
}
function c() {
  document.getElementById("image").style.backgroundImage = "url('Source/C.png')";
}
function d() {
  document.getElementById("image").style.backgroundImage = "url('Source/D.jpg')";
}
function e() {
  document.getElementById("image").style.backgroundImage = "url('Source/E.jpg')";
}function f() {
  document.getElementById("image").style.backgroundImage = "url('Source/F.jpg')";
}function g() {
  document.getElementById("image").style.backgroundImage = "url('Source/G.jpg')";
}function h() {
  document.getElementById("image").style.backgroundImage = "url('Source/H.jpg')";
}function i() {
  document.getElementById("image").style.backgroundImage = "url('Source/I.jpg')";
}function j() {
  document.getElementById("image").style.backgroundImage = "url('Source/J.png')";
}function k() {
  document.getElementById("image").style.backgroundImage = "url('Source/K.jpg')";
}function l() {
  document.getElementById("image").style.backgroundImage = "url('Source/L.jpg')";
}function m() {
  document.getElementById("image").style.backgroundImage = "url('Source/M.png')";
}function n() {
  document.getElementById("image").style.backgroundImage = "url('Source/N.jpg')";
}function o() {
  document.getElementById("image").style.backgroundImage = "url('Source/O.jpg')";
}function p() {
  document.getElementById("image").style.backgroundImage = "url('Source/P.jpg')";
}function q() {
  document.getElementById("image").style.backgroundImage = "url('Source/Q.jpg')";
}function r() {
  document.getElementById("image").style.backgroundImage = "url('Source/R.jpg')";
}function s() {
  document.getElementById("image").style.backgroundImage = "url('Source/S.jpg')";
}function t() {
  document.getElementById("image").style.backgroundImage = "url('Source/T.jpg')";
}function u() {
  document.getElementById("image").style.backgroundImage = "url('Source/U.jpg')";
}function v() {
  document.getElementById("image").style.backgroundImage = "url('Source/V.jpg')";
}function w() {
  document.getElementById("image").style.backgroundImage = "url('Source/W.jpg')";
}function x() {
  document.getElementById("image").style.backgroundImage = "url('Source/X.jpg')";
}function y() {
  document.getElementById("image").style.backgroundImage = "url('Source/Y.jpg')";
}function z() {
  document.getElementById("image").style.backgroundImage = "url('Source/Z.jpg')";
}



//this area is for rotation
function check(){
  var textinput=document.getElementById("text").value;
  textinput=textinput.toUpperCase();
  if (textinput=="EARTH") {
    document.getElementById("output").style.backgroundImage="url('Source/images.jpeg')"
  }
  else if (textinput=="UMBRELLA") {
document.getElementById("output").style.backgroundImage="url('Source/Um.jpeg')"
  }
}

//this area is for stop resume start
var time;
function earth(){
  document.getElementById("main").style.backgroundImage="url('Source/images.jpeg')";
  time=setTimeout(umbrella, 1000);
}
function umbrella(){
  document.getElementById("main").style.backgroundImage="url('Source/Um.jpeg')";
  time=setTimeout(earth,1000)
}
var valt;
function stop(){
  valt= document.getElementById("main").value;
  clearTimeout(time);
}
