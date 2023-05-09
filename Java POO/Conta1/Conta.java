package Conta1;

public class Conta {

    Data dataAbertura;
    String nomeTitular;
    int numeroConta;
    String agenciaConta;
    double saldoConta;
    //String dataAbertura;

    public void Sacar(double saque) {
        if (saque > saldoConta) {
            System.out.printf("Você não possui saldo suficiente para realizar o saque. Tente novamente.");
        } else {
            this.saldoConta -= saque;
            System.out.printf("%nVocê sacou R$%.2f com sucesso. Saldo restante: R$%.2f.", saque, saldoConta);
        }
    }

    public void Depositar(double deposito) {
        this.saldoConta += deposito;
        System.out.printf("%nVocê depositou R$%.2f com sucesso. Saldo atual: R$%.2f.", deposito, saldoConta);
    }

    public double calcularRendimento() {
        return saldoConta * 0.1;
    }

    public String recuperarDadosParaImpressao() {
        String dados = "\nNome do titular: " + this.nomeTitular;
        dados += "\nNúmero da conta: " + this.numeroConta;
        dados += "\nAgência da conta: " + this.agenciaConta;
        dados += "\nSaldo da conta: " + this.saldoConta;
        dados += "\nData de abertura da conta: " + dataAbertura.FormatarData();

        return dados;
    }
}

class Data {
    int dia;
    int mes;
    int ano;

    public String FormatarData() {
        String dataFormatada = Integer.toString(dia);
        dataFormatada += "/";
        dataFormatada += Integer.toString(mes);
        dataFormatada += "/";
        dataFormatada += Integer.toString(ano);
        return dataFormatada;
    }
}
