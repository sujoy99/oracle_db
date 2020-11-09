package com.select;

import java.sql.Statement;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;

public class SelectTest {

	public static void main(String[] args) throws Exception {
		
		String sql = "select BILL_CYCLE_CODE from MIS_BILL_CYCLE_MASTER order by BILL_CYCLE_CODE desc";
		
		Class.forName("oracle.jdbc.driver.OracleDriver");
		
		Connection con = DriverManager.getConnection("jdbc:oracle:thin:@180.211.137.17:1521/ebps","PDBMIS", "pdbmis123");
		
		Statement st = con.createStatement();
		
		boolean flag = st.execute(sql);
		
		if(flag == true) {
			ResultSet rs = st.getResultSet();
			
			while(rs.next()) {
				System.out.println(rs.getInt(1));
			}
			rs.close();
		}
		st.close();
		con.close();
		
		
	}
}
