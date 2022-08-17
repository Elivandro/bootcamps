programa
{

	funcao inicio()
	{
		//declara as variaveis;
		cadeia data_nasc
		inteiro maior_idade = 18
		inteiro ano_atual, mes_atual, dia_atual, ano_nasc, mes_nasc, dia_nasc, idade = 0
		ano_atual = 2022
		mes_atual = 5
		dia_atual = 1

		//solicita dados;
		escreva("digite o dia de seu nascimento: ")
		leia(dia_nasc)
		escreva("\ndigite o mes de seu nascimento: ")
		leia(mes_nasc)
		escreva("\ndigite o ano de seu nascimento: ")
		leia(ano_nasc)

		//formata o ano de nascimento;
		data_nasc = (dia_nasc + "/" + mes_nasc + "/" + ano_nasc)

		//verifica a idade;
		enquanto(ano_nasc < ano_atual ou mes_nasc < mes_atual ou dia_nasc < dia_atual){
			idade++
			dia_nasc++
			se(dia_nasc > 30){
				dia_nasc = 1
				mes_nasc++
			}se(mes_nasc > 12)
				mes_nasc = 1
				ano_nasc++
		}

		//imprime idade e maioridade
		se(idade >= maior_idade){
			escreva("\nvocê possui " + idade + " anos de idade e, é maior de idade.\n")

		}senao{
			escreva("\nvocê possui " + idade + " anos de idade e, é menor de idade.\n")
		}

		escreva("nasceu na data de: " + data_nasc + "\n\n")
	}
}