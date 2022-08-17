programa
{
	
	funcao inicio()
	{

		inteiro opcao

		real valor
		real resultado
		
		escreva("Calculadora de conversões, escolha uma opção:\n\n")

		faca{
			escreva("\n1. Celsius para fahrenheit.\n")
			escreva("3. Celsius para kelvin.\n")
			escreva("3. Quilometros para milhas.\n")
			escreva("4. Milimetros para polegadas.\n")
			escreva("5. Sair.\n\n")
			leia(opcao)

			escolha(opcao){
				caso 1:
					escreva("\nInforme o valor que deseja converter: ")
					leia(valor)
					resultado = valor * 1.8 + 32
					escreva(resultado+" Fahrenheit\n")
					pare

				caso 2:
					escreva("\nInforme o valor que deseja converter: ")
					leia(valor)
					resultado = valor + 273.15
					escreva(resultado+" Kelvin\n")
					pare
				caso 3:
					escreva("\nInforme o valor que deseja converter: ")
					leia(valor)
					resultado = valor * 0.62
					escreva(resultado+" Milhas\n")
					pare
				caso 4:
					escreva("\nInforme o valor que deseja converter: ")
					leia(valor)
					resultado = valor / 25.4
					escreva(resultado+" Polegadas\n")
					pare
				caso contrario:
					escreva("\nPrograma de conversões encerrado.\n\n\n")
					pare
			}
		}
		enquanto(opcao !=5)
		
	}
}