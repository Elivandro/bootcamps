programa
{
	
	funcao inicio()
	{
		cadeia nome[2], endereco[2], telefone[2]
		inteiro cpf[2], rg[2], x

		escreva("......Cadastro de clientes......")
		
		para(x = 0; x < 2;x++){
			escreva("\ndigite o NOME do "+ (x+1) +"º cliente:")
			leia(nome[x])
			escreva("\ndigite o CPF do "+ (x+1) +"º cliente:")
			leia(cpf[x])
			escreva("\ndigite o RG do "+ (x+1) +"º cliente:")
			leia(rg[x])
			escreva("\ndigite o TELEFONE do "+ (x+1) +"º cliente:")
			leia(telefone[x])
			escreva("\ndigite o ENDEREÇO do "+ (x+1) +"º cliente:")
			leia(endereco[x])
		
		}
		para(x = 0; x < 2;x++){
			escreva("\nNome: "+ nome[x] +"\n")
			escreva("CPF: " + cpf[x] +"\n")
			escreva("RG: "+ rg[x] +"\n")
			escreva("Telefone: "+ telefone[x] +"\n")
			escreva("Endereco: "+ endereco[x] +"\n\n")
		
		}
	}
}