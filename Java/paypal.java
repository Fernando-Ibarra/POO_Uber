package Java;

class tarjeta extends Payment{
    String email;

    public tarjeta(String id, String email){
        super(id);
        this.email = email;
    }
}