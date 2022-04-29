# https://www.beecrowd.com.br/judge/pt/problems/view/1009

nomeVendedor = str(input())
salarioFixo = float(input())
vendas = float(input())

bonus = (vendas * 0.15) + salarioFixo

print('TOTAL = R$ {:.2f}'.format(bonus))
