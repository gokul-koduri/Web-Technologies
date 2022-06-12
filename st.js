
function f1(){
var para = document.createElement("li");
var node = document.createTextNode("Badmittion"); para.appendChild(node);

var element = document.getElementById("list"); var child = document.getElementById("3");
element.insertBefore(para,child);// JavaScript Document
}
function f2(){
var lis = document.getElementById("list"); lis.removeChild(list.childNodes[0]);
}
function f3(){
document.getElementById("2").style.color = "red";
}