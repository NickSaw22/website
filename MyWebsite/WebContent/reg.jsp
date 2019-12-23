<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Regjsp</title>
</head>
<body>
<%@ page import ="java.sql.*" %>
<%@ page import ="javax.sql.*" %>
<%
String user=request.getParameter("userid"); 
session.putValue("userid",user); 
String uname=request.getParameter("uname"); 
String pwd=request.getParameter("pwd"); 
String gender=request.getParameter("gender");
String dob=request.getParameter("dob");
String email=request.getParameter("email");
String phno=request.getParameter("phno");
Class.forName("com.mysql.jdbc.Driver"); 
java.sql.Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3308/mydb","root","root"); 
Statement st= con.createStatement(); 
ResultSet rs; 
int i=st.executeUpdate("insert into reguser values ('"+user+"','"+uname+"','"+pwd+"','"+gender+"','"+dob+"','"+email+"','"+phno+"')"); 

out.println("Registered"); 


%>
<a href ="index.html">Login</a><br/><br/>
<a href="home.html">Home</a>
</body>
</html>