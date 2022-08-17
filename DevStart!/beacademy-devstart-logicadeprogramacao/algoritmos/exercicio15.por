programa
{
	//importa função math
	inclua biblioteca Matematica --> math

	funcao inicio()
	{
		//declara as variavéis
		real valorDivida, valorDevido, valorJuros = 0.00, juros = 0.00
		inteiro parcelas, i = 0

		escreva(".......Juros compostos.......\n")

		//entrada de dados
		escreva("Digite o valor da divida: ")
		leia(valorDivida)
		
		escreva("Digite a taxa de juros da divida: ")
		leia(juros)

		escreva("digite a quantidade de parcelas: ")
		leia(parcelas)

			//executa a rotina de calculo juros
			enquanto(i < parcelas){
				//formula para calcular juros
				valorJuros += (valorDivida + valorJuros) * (juros / 100)

				//imprime o valor do juros por parcela
				escreva("Valor dos juros "+ (i+1) +"ª: "+ math.arredondar(valorJuros, 2) +"\n")
				i++
			}
			//soma o valor dos juros com a divida
			valorDevido = valorJuros + valorDivida
			escreva("Taxa de juros "+ juros +"% a.m\n")
			escreva("Valor total pago: "+ math.arredondar(valorDevido, 2) +"\n")	
	}
}