programa
{
	
	funcao inicio()
	{
		//declara as variaveis
		inteiro numero
		inteiro contador = 0

		//solicita os dados
		escreva("Digite o numero que você deseja ver a tabuada: ")			
		leia(numero)

		//cria a rotina
		enquanto(contador <= 10){
			escreva(numero+" × "+contador+": "+numero * contador+"\n")
			contador++
		}
	}
}