/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package poopersona;

/**
 *
 * @author 209
 */
public class Poopersona {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        /*// TODO code application logic here
        Persona per1=new Persona();
        //Asignar contenido a los atributos
        per1.setIdpersona("456");
        per1.setNombre("Andres Hernandez");
        per1.setSalario(25000000);
        System.out.println(per1.getIdpersona()+"-"+per1.getNombre()+"-"+per1.getSalario());
        per1.Liquidar();
        if(per1.Retirar(per1.getSalario()))
        {
            System.out.println("No tiene derecho a Bonificacion");
        }else
        {
            System.out.println("Tiene derecho a Bonificacion");
        }
        Persona per2= new Persona("125","Gabriel Mendez",1250000);
        System.out.println(per2.getNombre());
        System.out.println(per2.getIdpersona());*/
        Empleado emp1 = new Empleado("789","Jose Martinez",1800000,"Revolucionario");
        emp1.Liquidar();//Metodo de la clase persona
        System.out.println(emp1.getNombre());//Metodo de persona
        emp1.Transferir();//Metodo de Empleado
    }
    
}
