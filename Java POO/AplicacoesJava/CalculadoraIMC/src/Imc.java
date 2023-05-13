public class Imc {
    
    private double valor;
    private String classificacao;

    public double calcularIMC(double peso, double altura) {
        return valor = peso/(Math.pow(altura, 2));
    }

    public String classificacaoImc(double valor) {
        if (valor < 18.5) {
            this.classificacao = "Abaixo do peso.";
        } else if (valor < 25) {
            this.classificacao = "Peso ideal";
        } else if (valor < 30) {
            this.classificacao = "Levemente acima do peso";
        } else if (valor < 35) {
            this.classificacao = "Obesidade grau 1";
        } else if (valor < 40) {
            this.classificacao = "Obesidade grau 2";
        } else {
            this.classificacao = "Obesidade grau 3";
        }

        return this.classificacao;
    }

    public double getValor() {
        return this.valor;
    }

    public void setValor(double valor) {
        this.valor = valor;
    }
}
