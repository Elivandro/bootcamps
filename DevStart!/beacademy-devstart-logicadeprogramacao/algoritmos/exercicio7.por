programa
{
	
	funcao inicio()
	{
		//declara as variaveis
		cadeia produto[5]
		inteiro quantidade[5], index
		real preco[5]

		escreva("......Cadastrar produtos ......")

		//estrutura de repetição
		para(index = 0; index < 5; index++){
			//entrada de dados
			escreva("\ndigite o NOME do "+ (index+1) +"º produto: ")
			leia(produto[index])

			escreva("\ndigite a QUANTIDADE do "+ produto[index] +" em estoque: ")
			leia(quantidade[index])

			escreva("\ndigite o preço do "+ produto[index] +" : ")
			leia(preco[index])

		}
		para(index = 0; index < 5; index++){
			//impressao dos dados
			escreva("\nProduto: "+ produto[index] +"\n")
			escreva("Quantidade: " + quantidade[index] +"\n")
			escreva("Preço: "+ preco[index] +"\n\n")

		}
	}
}