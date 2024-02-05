/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package controladores;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
//import java.sql.*;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author USUARIO
 */
public class InicioSesion extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @param msg
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     * *@param args the command line arguments
     */
    //public static void main(String[] args) {
        
        //String usuario="root";
        //String password="";
        //String url="jdbc:mysql://localhost:3306/crm_aveza";
        //        Connection conexion;
        //        Statement statement;
        //        ResultSet rs;
        //try {
        //    conexion = DriverManager.getConnection(url,usuario,password);
        //    statement=conexion.createStatement();
        //    rs = statement.executeQuery("SELECT * FROM tbl_registro_cliente WHERE cedula=71366468");
            //    rs.next();
        //    do{
            //    System.out.println(rs.getString("contrasena")+" : "+rs.getInt("cedula"));
          //  }while(rs.next());
            
        //} catch (SQLException ex) {
          //  Logger.getLogger(InicioSesion.class.getName()).log(Level.SEVERE, null, ex);
        //}
        //try {
            // TODO code application logic here
         //   Class.forName("com.mysql.cj.jdbc.Driver");
        //} catch (ClassNotFoundException ex) {
       //     Logger.getLogger(InicioSesion.class.getName()).log(Level.SEVERE, null, ex);
      //  }
    //}
        
    protected void processRequest(HttpServletRequest request, HttpServletResponse response, String msg)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            
            /* TODO output your page here. You may use following sample code. */
           
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet InicioSesion</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1> Hola " + msg + "</h1>");
            out.println("</body>");
            out.println("</html>");
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        String user=request.getParameter("usuario");
            String contrasena=request.getParameter("clave");
        
        try {
            // TODO code application logic here
            Class.forName("com.mysql.cj.jdbc.Driver");
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(InicioSesion.class.getName()).log(Level.SEVERE, null, ex);
        }
        String message=user+". La contraseña ingresada es: "+contrasena;
        processRequest(request, response, message);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
