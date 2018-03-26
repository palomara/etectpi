/*Validação de Campos*/
    function Verifica () {
    var NOME = document.getElementById('Cad').pnome.value;
    var CIDADE = document.getElementById('Cad').pcidade.value;
    var EMAIL = document.getElementById('Cad').pemail.value;
    var ASSUNTO = document.getElementById('Cad').passunto.value;
    if (NOME == '' || CIDADE == '' || EMAIL == '' || ASSUNTO == '') {
      alert ('Todos os campos devem estar preenchidos.');
      return false;
    } 
    }


function slide1(){
document.getElementById('slide').className="slide";
document.getElementById('id').src="./img/bg_home1.png";
setTimeout("slide2()", 3000)
document.getElementById('aId').href="#"
document.getElementById("text1").innerHTML = "Subway Melt®";
document.getElementById("text2").innerHTML = "Imagine peito de peru fatiado, presunto, bacon, queijo derretido, vegetais e condimentos saborosos.";
}
 
function slide2(){
document.getElementById('slide').className="slide2";
document.getElementById('id').src="./img/ham__1365688672.png";
setTimeout("slide3()", 3000)
document.getElementById('aId').href="#"
document.getElementById("text1").innerHTML = "Peito de Peru";
document.getElementById("text2").innerHTML = "Alto no sabor e baixo teor de gordura. O sanduíche de Peito de Peru fica perfeito com vegetais frescos e condimentos à sua escolha";
}
 
function slide3(){
document.getElementById('slide').className="slide3";
document.getElementById('id').src="./img/bg_home2.png";
setTimeout("slide1()", 3000)
document.getElementById('aId').href="#"
document.getElementById("text1").innerHTML = "Promoção imperdível";
document.getElementById("text2").innerHTML = "Na compra de um sanduíche de Frango defumado com Cream Cheese, você ganha um refrigerante de 300 ml.";
}


function login(){
var username = document.getElementById('login').username.value;
var password = document.getElementById('login').password.value;
 

    if (username == "user" && password == "123456")
    {
        window.location.replace("caixa.html");
        
    }
    else
    {
        alert("ERRO: login ou senha Incorreto");
    }

}


        

 
