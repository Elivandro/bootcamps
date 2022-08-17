programa
{

	funcao inicio()
	{
	
		//declara as variavéis
		inteiro opcao, multiplo = 0

		//entrada de dados
		escreva(".....escolha uma opção.....\n\n")
		escreva("0 -> Para multiplos de dois      1 -> Para multiplos de três\n")
		escreva("Digite sua opção: ")
		leia(opcao)
			
			escolha(opcao){

				caso 0:
					enquanto(multiplo <= 100){
						
						se(multiplo % 2 == 0){
							
						escreva("multiplos de 2: "+ multiplo +"\n")
						
						}
						multiplo++
					}
					
					pare
				caso 1:
					enquanto(multiplo <= 100){
						
						se(multiplo % 3 == 0){
							
						escreva("multiplos de 3: "+ multiplo +"\n")
						
						}
						multiplo++
					}	
					pare
				caso contrario:
				
					escreva("\nopção invalida!!!\n")
					
					pare
			}

	}
}