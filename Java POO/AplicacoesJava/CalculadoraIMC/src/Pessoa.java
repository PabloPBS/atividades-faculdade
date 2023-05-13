public class Pessoa {
    
    private double peso;
    private double altura;
    private double valorImc;
    private String classificacaoImc;

    public void calcularImc(double peso, double altura) {
        valorImc = getPeso()/(Math.pow(getAltura(), 2));
        setValorImc(valorImc); 
    }

    public void classificacaoImc(double valorImc) {
        if (valorImc < 18.5) {
            setClassificacaoImc("Abaixo do peso.");
        } else if (valorImc < 25) {
            setClassificacaoImc("Peso ideal.");
        } else if (valorImc < 30) {
            setClassificacaoImc("Levemente acima do peso.");
        } else if (valorImc < 35) {
            setClassificacaoImc("Obesidade grau 1.");
        } else if (valorImc < 40) {
            setClassificacaoImc("Obesidade grau 2.");
        } else {
            setClassificacaoImc("Obesidade grau 3.");
        }
    }

    public double getValorImc() {
        return this.valorImc;
    }

    public void setValorImc(double valorImc) {
        this.valorImc = valorImc;
    }

    public String getClassificacaoImc() {
        return this.classificacaoImc;
    }

    public void setClassificacaoImc(String classificacaoImc) {
        this.classificacaoImc = classificacaoImc;
    }

    public double getPeso() {
        return this.peso;
    }

    public void setPeso(double peso) {
        this.peso = peso;
    }

    public double getAltura() {
        return this.altura;
    }

    public void setAltura(double altura) {
        this.altura = altura;
    }
}