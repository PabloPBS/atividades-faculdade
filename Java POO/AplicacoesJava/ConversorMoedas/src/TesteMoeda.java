import java.util.Scanner;

public class TesteMoeda {
    public static void main(String[] args) throws Exception {
        
        Scanner scan = new Scanner(System.in);
        Moeda moeda = new Moeda();
        String res;

        do {
            System.out.print("Digite o dinheiro em reais para ver quantos dólares podem ser comprados: R$");
            moeda.setValorReal(scan.nextDouble());

            moeda.paraDolar(moeda.getValorReal());

            System.out.printf("Com R$%.2f, você pode comprar US$%.2f dólares. (Cotação de 13/04)", moeda.getValorReal(), moeda.getValorDolar());

            System.out.println("\nDeseja realizar outra operação? (S/N)");
            res = scan.next();
            System.out.println("-=-=-");
        } while (res.equals("S") || res.equals("s"));
        System.out.println("Encerrando programa...");
    }
}