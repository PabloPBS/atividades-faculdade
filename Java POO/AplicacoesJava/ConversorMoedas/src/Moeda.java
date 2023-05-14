public class Moeda {

    private double valorReal;
    private double valorDolar;

    public void paraDolar (double real) {
        double dolar = getValorReal()/4.88;
       this.valorDolar = dolar;
    }

    public void setValorReal(double real) {
        this.valorReal = real;
    }

    public double getValorReal() {
        return this.valorReal;
    }

    public void setValorDolar(double dolar) {
        this.valorDolar = dolar;
    }

    public double getValorDolar() {
        return this.valorDolar;
    }
}