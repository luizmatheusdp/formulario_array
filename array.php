<?php
$codigo=$_POST['codigo'];
$produ=$_POST['prod'];
$categoria = array
  (
  array(1, "produto de limpeza", "Detergente<br> sabão<br> sabonete <br> água sanitária <br>",$produ),
  array(2 ,"Produtos Alimentícios","Biscoito, bolo, macarrão, pão e arroz <br>" ),
  array(3 ,"Produtos de consumo","Jeans, blusa, short,  bermuda e sapato <br>" ),
  );

if ($codigo == $categoria[0][0]) {
echo(" <h1>Você escolheu os ".$categoria[0][1]." que contem os itens: <br>".$categoria[0][2].$categoria[0][3]);
}
if ($codigo == $categoria[1][0]) {
echo("<h1>Você escolheu os ".$categoria[1][1]." que contem os itens: <br>".$categoria[1][2].$categoria[0][3]);
}
if ($codigo == $categoria[2][0]) {
echo("<h1>Você escolheu os ".$categoria[2][1]." que contem os itens: <br>".$categoria[2][2].$categoria[0][3]);	
}

echo '<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="(evangelista)">

</body>
</html>';
  ?>