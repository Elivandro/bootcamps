programa
{
	
	funcao inicio()
	{
		//declara as variáveis;
		real peso
		real altura

		//escreve a interalçao;
		escreva(".......Vamos calcular seu IMC.......")
		escreva("\nDigite seu Peso: ")
		leia(peso)
		escreva("Digite sua Altura: ")
		leia(altura)

		//faz o calculo e, compara para saber se está dentro do peso;
		//executa a formula imc = peso × altura²;
		se(peso / ( altura * altura) < 19){

			escreva("você está abaixo do peso.")

		}senao se(peso / ( altura * altura) >= 19 e peso / ( altura * altura) < 25){

			escreva("seu peso está normal.")

		}senao se(peso / ( altura * altura) >= 25 e peso / ( altura * altura) < 30){

			escreva("voce está com sobrepeso")

		}senao se(peso / ( altura * altura) >= 30 e peso / ( altura * altura) < 40){

			escreva("Obesidade Tipo 1")

		}senao{

			escreva("Obesidade mórbida")

		}
	}
}