function time()
{
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
document.getElementById('data_hora').innerHTML=h+":"+m+":"+s;
setTimeout('time()',500);
}

function mostrar_div(obj) {

      document.getElementById('div_1').style.display="none";
      document.getElementById('div_2').style.display="none";
      document.getElementById('div_3').style.display="none";
      document.getElementById('div_4').style.display="none";
      document.getElementById('div_teste').style.display="none";
      document.getElementById('1').style.display="none";
      

   switch (obj.id) {
      case 'mostra_div1':
      document.getElementById('div_1').style.display="block";
      document.getElementById('div_teste').style.display="block";
      break
      case 'mostra_div2':
      document.getElementById('div_2').style.display="block";
      document.getElementById('div_teste').style.display="block";
      break
      case 'mostra_div3':
      document.getElementById('div_3').style.display="block";
      document.getElementById('div_teste').style.display="block";
      break
      case 'mostra_div4':
      document.getElementById('div_4').style.display="block";
      document.getElementById('div_teste').style.display="block";
      break
   }
}

var omsomar= document.calc.output.value;

function agua(){
   document.calc.output.value += "2,00";
   soma();
}
function suco(){
   document.calc.output.value += "4,00";
   soma();
}
function refri(){
   document.calc.output.value += "5,00";
   soma();
}
function soma(){
   document.calc.output.value += "+";
}
function valorlop(){
   var valor = eval(document.calc.output.value);
   document.calc.output.value = valor;
}