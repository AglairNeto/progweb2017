var tabela = "";
for (var i = 1; i <= 10; i++) 
{
    tabela += "<table border=\"1\"><tr> <th colspan=\"2\">Produtos de "+i+"</th></tr>";
    for (var j = 1; j <= 10; j++) 
	{
        tabela += "<tr> <td>"+i+"x"+j+"</td> <td>"+(i*j)+"</td> </tr>";
    }
    tabela += "</table>";
}
document.write(tabela);
