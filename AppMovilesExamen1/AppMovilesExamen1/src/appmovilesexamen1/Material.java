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
public class Material {
    public String idmat;
    public String nombre;
    
    public void Reparar()
    {
        System.out.println("Material Reparado");
    }
    
    public Material()
    {
        
    }
    public Material(String idmat, String nombre)
    {
        this.idmat=idmat;
        this.nombre=nombre;
    }
    

    public void setIdmat(String idmat) {
        this.idmat = idmat;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }
    public String getIdMat()
    {
        return this.idmat;
    }
}
