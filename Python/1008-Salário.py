# https://www.beecrowd.com.br/judge/pt/problems/view/1008

idFunc = int(input())
horasTrab = int(input())
salarioH = float(input())

salario = (horasTrab * salarioH)

print('NUMBER =', idFunc)
print('SALARY = U$ {:.2f}'.format(salario))
