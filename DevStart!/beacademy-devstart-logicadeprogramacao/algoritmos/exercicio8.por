programa
{

	funcao inicio()
	{
		inteiro nota1[3], nota2[3], notatotal[3], media = 6, x = 0
		cadeia nome[3]

		para(x = 0; x < 3; x++){
			escreva("Digite o nome do Aluno "+ (x+1) +": ")
			leia(nome[x])
		}
		para(x = 0; x<3; x++){
			escreva("digite a primeira nota de "+ nome[x]+ ":")
			leia(nota1[x])
			nota1[x] += nota1[x]
		}
		para(x = 0; x<3; x++){
			escreva("digite a segunda nota de "+ nome[x] +":")
			leia(nota2[x])
			nota2[x] += nota2[x]
		}
		para(x = 0; x < 3; x++){
			notatotal[x] = (nota1[x] + nota2[x])/2
				se(notatotal[x] > media){
					escreva("Parabens "+ nome[x] +", Aprovado! \n")
				}senao{
					escreva(nome[x],", Reprovado!\n")
			}
		}

	}
}