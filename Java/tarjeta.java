package Java;

class tarjeta extends Payment{
    Integer number;
    Integer cvv;
    String date;

    public tarjeta(String id, Integer number, Integer cvv, String date){
        super(id);
        this.number = number;
        this.cvv = cvv;
        this.date = date;
    }
}