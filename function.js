var number = Math.random();
number = number*6;
number = Math.floor(number);
number++;
if(number === 1)
{
  document.querySelectorAll("img")[0].src = "images/dice1.png";
}
if(number === 2)
{
  document.querySelectorAll("img")[0].src = "images/dice2.png";
}
if(number === 3)
{
  document.querySelectorAll("img")[0].src = "images/dice3.png";
}
if(number === 4)
{
  document.querySelectorAll("img")[0].src = "images/dice4.png";
}
if(number === 5)
{
  document.querySelectorAll("img")[0].src = "images/dice5.png";
}
if(number === 6)
{
  document.querySelectorAll("img")[0].src = "images/dice6.png";
}

var number2 = Math.floor(Math.random()*6)+1;
var image = "images/dice"+number2+".png";
document.querySelectorAll("img")[1].src=image;

if(number > number2)
{
  document.querySelector("h1").innerHTML = "🎉Player 1 wins!!";
}
if(number < number2)
{
  document.querySelector("h1").innerHTML = "Player 2 wins!!🎉";
}
if(number === number2)
{
  document.querySelector("h1").innerHTML = "🎉Draw🎉";
}
