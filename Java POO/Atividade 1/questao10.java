public class questao10 {
    public static void main(String[] args) {
        double janeiro = 15000;
        double fevereiro = 23000;
        double marco = 17000;
        double despesaTotal = janeiro+fevereiro+marco;
        System.out.println ("Despesa total do trimestre: R$" + despesaTotal);
        double mediaDespesa = despesaTotal/3;
        System.out.println("Média mensal dos gastos: R$" + mediaDespesa);
    }
}
