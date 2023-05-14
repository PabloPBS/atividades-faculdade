import java.util.Scanner;

public class Moeda {
    public static void main(String[] args) throws Exception {
        
        Scanner scan = new Scanner(System.in);
        String res;

        do {
            System.out.print("Digite o dinheiro em reais para ver quantos dólares podem ser comprados: R$");
            double real = scan.nextDouble();

            double dolar = real/4.88;

            System.out.printf("Com R$%.2f, você pode comprar US$%.2f dólares. (Cotação de 13/04)", real, dolar);

            System.out.println("\nDeseja realizar outra operação? (S/N)");
            res = scan.next();
            System.out.println("-=-=-");
        } while (res.equals("S") || res.equals("s"));
        System.out.println("Encerrando programa...");
    }
}
