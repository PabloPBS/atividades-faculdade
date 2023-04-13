public class questao06 {
    public static void main(String[] args) {
        for (long n = 1, fatorial = 1; n <= 30; n++) {
            fatorial = fatorial * n;
            System.out.println ("O fatorial de " + n + "! É igual a " + fatorial);
            //A partir de 20, o valor fica muito grande, se tornando além da capacidade do tipo int e long
        }
    }
}