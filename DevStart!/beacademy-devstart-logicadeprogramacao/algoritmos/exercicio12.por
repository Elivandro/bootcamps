programa
{
	
	funcao inicio()
	{
		//Declaração das variáveis
		real entrada_value
		real entrada_juros
		real soma_juros
		real subtrai_juros

		escreva("calculadora de juros simples\n\n")
		
		//Entrada de dados do usuário: Dividendo e divisor
		escreva("Digite o valor: ")
		leia(entrada_value)

		escreva("Digite a taxa de juros: ")
		leia(entrada_juros)

		//Cálculo da soma de juros e impressão do resultado
		soma_juros = entrada_value + ((entrada_value * entrada_juros) / 100)
		escreva("\n"+entrada_value+" somado com "+entrada_juros+"% de juros é: "+soma_juros+"\n")

		//Cálculo da subtração de juros e impressão do resultado
		subtrai_juros = entrada_value - ((entrada_value * entrada_juros) / 100)
		escreva("\n"+entrada_value+" subtraido com "+entrada_juros+"% de juros é: "+subtrai_juros+"\n")
	}
}