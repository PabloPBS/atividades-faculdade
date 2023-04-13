public class questao05 {
    public static void main(String[] args) {
        for (int n = 1, fatorial = 1; n <= 10; n++) {
            fatorial = fatorial * n;
            System.out.println ("O fatorial de " + n + "! É igual a " + fatorial);
        }
    }
}