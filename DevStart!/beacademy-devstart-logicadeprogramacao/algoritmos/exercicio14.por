programa
{
 
 funcao inicio()
 {
  inteiro divisor = 2
  inteiro numero
  inteiro contador = 0
   
  escreva("\nChecagem de números primos \n")
  escreva("\nInforme um número: ")
  leia(numero)
  
  enquanto(divisor <= numero / 2)
  {
   se(numero % divisor == 0)
   {
    contador = contador + 1
    pare
   }
   
   divisor = divisor + 1
   
  }
  
  se(contador == 0 e numero != 1 )
  {
   escreva("\n"+numero+" é um número primo\n")
  }
  senao
  {
   escreva("\n"+numero+" não é um número primo\n")
  }
 }
}