import java.util.Scanner;

public class TesteMedida {
    public static void main(String[] args) throws Exception {

        Scanner scan = new Scanner(System.in);
        Medida medida = new Medida();
        String res;

        do {
            System.out.print("Digite uma media em metros para ver suas conversões: ");
            medida.setM(scan.nextDouble());

            medida.converter();

            System.out.println("-=-");
            System.out.println("Medidas equivalentes a " + medida.getM() + " metros:");
            medida.mostrarValores();
            System.out.println("-=-");

            System.out.println("Deseja converter outra medida? (S/N)");
            res = scan.next();
            System.out.println("-=-=-=-=-=-=-=-=-");
        } while (res.equals("S") || res.equals("s"));

        System.out.println("Encerrando Programa...");
    }
}