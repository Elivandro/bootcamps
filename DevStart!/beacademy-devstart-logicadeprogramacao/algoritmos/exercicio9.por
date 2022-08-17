programa
{
	inclua biblioteca Matematica
 --> math
	
	funcao inicio()
	{
	
		//declara as variavéis;
		inteiro opcao
		real diametro,raio, area, pi = 3.14152592

		escreva(".......Calcular área do ciruclo.......\n")
		escreva("0 -> calcular com o diametro        1 -> calcular com o raio\n")
		escreva("opção: ")
		leia(opcao)
		
		escolha(opcao){
			caso 0:
				escreva("Digite o diametro do circulo: ")
				leia(diametro)
				
				raio = diametro / 2
				area = raio * raio * pi
				
				escreva(math.arredondar(area, 3))
			pare
			caso 1:
				escreva("Digite o raio do circulo: ")
				leia(raio)
				
				area = raio * raio * pi
				
				escreva(math.arredondar(area, 3))
			pare
			caso contrario:
				escreva("opção invalida!!!")
			pare
		}
		
	}
}