programa
{
	
	funcao inicio()
	{
		real valor1
		real valor2

		caracter operador

		escreva("Calculadora simples, apenas dois digitos.\n\n")

		escreva("Digite o primeiro numero: ")
		leia(valor1)

		escreva("Digite o segundo numero: ")
		leia(valor2)

		escreva("\n+ para somar...")
		escreva("\n- para subtrair...")
		escreva("\n* para multiplicar...")
		escreva("\n/ para dividir...")

		escreva("\n\nSelecione o operador: ")
		leia(operador)
		
		escreva("\nvoce escolheu o operador: "+operador+"\n")
		escreva("Resultado: "+valor1+" "+operador+" "+valor2+" = ")

		escolha(operador){
			
		caso '+':
			escreva(valor1 + valor2)
			escreva("\n")
			pare
		caso  '-':
			escreva(valor1 - valor2)
			escreva("\n")
			pare
		caso '*':
			escreva(valor1 * valor2)
			escreva("\n")
			pare
		caso '/':
			escreva(valor1 / valor2)
			escreva("\n")
			pare
		}

	}
}