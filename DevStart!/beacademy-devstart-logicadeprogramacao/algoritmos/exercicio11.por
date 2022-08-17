programa
{
	
	funcao inicio()
	{
		cadeia usuario = "Elivandro", senha = "paylivre", EnterUser, EnterSenha
		inteiro chances = 5
			
		faca{
			
			chances--
			escreva("\ndigite seu usuário: ")
			leia(EnterUser)
			
			escreva("\ndigite sua senha: ")
			leia(EnterSenha)
		
			se(EnterUser == usuario e EnterSenha == senha){
			chances = 5
			escreva("\nSeja bem vindo DevStarter: " + usuario, " \n")
			pare
			
			}senao se(chances > 0){
				escreva("\nvocê tem mais " + chances + " restantes\n\n")
			}senao{
				escreva("\nvocê não tem mais nenhuma chance restantes\n\n")
			}
			
		}enquanto(chances > 0)
		
	}
}