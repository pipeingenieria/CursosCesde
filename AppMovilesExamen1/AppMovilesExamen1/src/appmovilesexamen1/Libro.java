/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package appmovilesexamen1;

/**
 *
 * @author 305
 */
public class Libro extends Material {
    public String autor;
    
    public Libro()
    {
        
    }
    public Libro(String autor, String idmat, String nombre)
    {
        super(idmat,nombre);
        this.autor=autor;
    }

    public String getAutor() {
        return autor;
    }

    public void setAutor(String autor) {
        this.autor = autor;
    }
    
    public void Reservar()
    {
        System.out.println("El libro ha sido reservado");
    }
}
