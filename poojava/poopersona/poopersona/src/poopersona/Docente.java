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
public class Docente extends Persona{
    public String profesion;
    public String area;
    
    public Docente()
    {
        
    }
    public Docente(String idpersona, String nombre, double salario, String prefesion, String area)
    {
        super(idpersona,nombre,salario);
        this.profesion=profesion;
        this.area=area;
    }

    public String getProfesion() {
        return profesion;
    }

    public void setProfesion(String profesion) {
        this.profesion = profesion;
    }

    public String getArea() {
        return area;
    }

    public void setArea(String area) {
        this.area = area;
    }
    
}
